<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/index.css">
    <title>Register</title>
</head>
<body>
    <?php 
        include('navbar.php');
        //include('enkrip.php');
    ?>

    <!-- <section class="container mt-top"> -->
        <!-- <h5 class="tombol-a"><a href="home.php#services" title="More Details"><i class="bi bi-arrow-left"></i> Pesan -->
                <!-- Lagi</a> -->
        <!-- </h5> -->
        <!-- ======= Contact Section ======= -->
        <section id="contact" class="contact">
        <div class="container" data-aos="fade-up">

            <div class="section-header">
            <h2>Form Page</h2>
            </div>

            <div class="row gx-lg-0 gy-4">

            <div class="col-lg-4">
                <div class="info-container d-flex flex-column align-items-center justify-content-center">
                <img src="assets/img/hero-img.svg" class="img-fluid" style="width: 300px; height: auto" alt="data-bg" data-aos="zoom-out" data-aos-delay="100">
                </div>
            </div>

            <div class="col-lg-8">
                <form action="todo.php" method="post" class="php-email-form">
                    <div class="row">
                        <div class="form-group mt-3">
                            <input type="text" name="kegiatan" value="" class="form-control" style="height: 50px; border-radius: 10px;" placeholder="Masukan Nama Kegiatan" required>
                        </div>
                        <div class="form-group mt-3">
                            <input type="text" class="form-control" name="tanggal" style="height: 50px; border-radius: 10px;" placeholder="Masukan Tanggal Deadline" required>
                            </div>
                        </div>
                        <div class="form-group mt-3">
                            <input type="text" class="form-control" name="keterangan" id="keterangan" style="height: 50px; border-radius: 10px;" placeholder="Masukan Keterangan" required>
                        </div>
                        <div class="form-group mt-3">
                            <!-- <input type="password" class="form-control" name="password" id="password" style="height: 50px; border-radius: 10px;" placeholder="Masukan Password" required> -->
                    </div>
                    <div class="text-center">
                        <button type="submit" class="btn" name="submit">Submit</button>
                    </div>
                </form>
            </div><!-- End Contact Form -->

            </div>
        </div>
        </section><!-- End Contact Section -->
        </div>

    <!-- </section> -->
        </div>
        <?php //} ?>
      </div>

</body>
</html>