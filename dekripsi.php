<!DOCTYPE html>
<html>
    <?php
        include "style.php";
        include "navbar.php";
    ?>
<head>
    <title>Dekripsi</title>
    
    <section class="container mt-top">
        <br>
        <br>
    <div class="section-header">
            <h2>Hasil Dekripsi</h2>
            </div>
            <div class="row gx-lg-0 gy-4">

        <table class="table table-hover table-striped">
            <thead>
                <tr>
                    <th>NO</th>
                    <th>Kegiatan</th>
                    <th>Tanggal Deadline</th>
                    <th>Keterangan</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                include "server.php";
                include "enkrip.php";
                
                $alert = '';
                $keyMatrixArray = generateMatrix("algoritma playfair cipher");
                $id = 1;

                try {
                    // Query untuk mengambil data dari tabel enkripsi
                    $selectQuery = "SELECT * FROM enkripsi";
                    $result = mysqli_query($db, $selectQuery);

                    // Looping untuk menampilkan data yang diambil dari database
                    while ($row = mysqli_fetch_assoc($result)) {
                        // Mendekripsi data yang diambil dari database
                        $decrypted_kegiatan = decrypt($keyMatrixArray, $row['en_kegiatan']);
                        $decrypted_tanggal = decrypt($keyMatrixArray, $row['en_tanggal']);
                        $decrypted_keterangan = decrypt($keyMatrixArray, $row['en_keterangan']);

                        // Misalnya, Anda dapat menampilkan data yang telah didekripsi di sini
                        //echo "Decrypted Kegiatan: " . $decrypted_kegiatan . "<br>";
                        //echo "Decrypted Tanggal: " . $decrypted_tanggal . "<br>";
                        //echo "Decrypted Keterangan: " . $decrypted_keterangan . "<br><br>";
                    }

                    // Jangan lupa bebas menyesuaikan cara menampilkan data sesuai dengan kebutuhan Anda
                } catch (Exception $e) {
                    // Handle exceptions jika terjadi kesalahan
                    $alert = '<button class="alert btn-danger"><strong>Error: ' . $e->getMessage() . '</strong></button>';

                    // Log the exception details for debugging purposes
                    error_log($e->getMessage());
                }

                echo '<div class="text-center">' . $alert . '</div>';
                ?>
                    <tr>
                        <td>
                            <?= $id++ ?>
                        </td>
                        <td >
                            <?= $decrypted_kegiatan ?>
                        </td>
                        <td>
                            <?= $decrypted_tanggal ?>
                        </td>
                        <td>
                            <?= $decrypted_keterangan ?>
                        </td>
                        <td>
                            <?= $decrypted_keterangan ?>
                        </td>
                    </tr>
                    <?php
                
                ?>
            </tbody>
        </table>
    </section>
    <?php include 'scripts.php' ?>
    </body>

</html>