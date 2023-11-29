<?php 
        include('server.php');
        include('enkrip.php');
        
        $alert = '';
        $keyMatrixArray = generateMatrix("algoritma playfair cipher");
        
        if (isset($_POST['submit'])) {
            // kegiatan
            $kegiatan_plain = $_POST['kegiatan'];
            $formatted_kegiatan = formatMessage($kegiatan_plain);
            $kegiatan = encrypt($keyMatrixArray,$formatted_kegiatan);
        
            // tangggal deadline
            $tanggal_plain = $_POST['tanggal'];
            $formatted_tanggal = formatMessage($tanggal_plain);
            $tanggal = encrypt($keyMatrixArray,$formatted_tanggal);
        
            // keterangan
            $keterangan_plain = $_POST['keterangan'];
            $formatted_keterangan = formatMessage($keterangan_plain);
            $keterangan = encrypt($keyMatrixArray,$formatted_keterangan);
        
            try {
                $query = "INSERT INTO enkripsi (en_kegiatan, en_tanggal, en_keterangan) ";
                $query .= "VALUES('$kegiatan','$tanggal','$keterangan')";
                
                $run = mysqli_query($db, $query);
        
                if ($run) {
                    $alert = '<button class="alert btn-success"><strong>Success! Message Has Been Sent!</strong></button>';
                } else {
                    // Provide more details about the database error
                    throw new Exception("Database Error: " . mysqli_error($db));
                }
            } catch (Exception $e) {
                $alert = '<button class="alert btn-danger"><strong>Form berhasil diisi, terima kasih!</strong></button>';
                
                // Log the exception details for debugging purposes
                error_log($e->getMessage());
            }
        
            echo '<div class="text-center">' . $alert . '</div>'; }
         
        ?>


