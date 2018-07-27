    <section id="feature" class="transparent-bg">
        <div class="container">
           <div class="center wow fadeInDown">
                <h2>Halaman Utama User</h2>
                <p class='lead'>Hai selamat datang <?= $_SESSION ['nama']; ?>
                <br>Silahkan Lengkapi Biodata serta Berkas & Dokumen yang diperlukan.</p>
            </div>
            <div class="row">
                <div class="features">
                    <div class="col-md-4 col-sm-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                        <div class="feature-wrap">
                            <a href="user/biodata.php"><i class="fa fa-group"></i></a>
                            <h2>Lengkapi Formulir</h2>
                            <h3>Melengkapi Formulir Pendaftaran.</h3>
                        </div>
                    </div><!--/.col-md-4-->

                    <div class="col-md-4 col-sm-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                        <div class="feature-wrap">
                            <a href="user/cetak/biodata.php" target="_blank"><i class="fa fa-print"></i></a>
                            <h2>Cetak Biodata</h2>
                            <h3>Mencetak Formulir Pendaftaran.</h3>
                        </div>
                    </div><!--/.col-md-4-->

                    <div class="col-md-4 col-sm-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                        <div class="feature-wrap">
                            <a href="index.php?page=dokumen"><i class="fa fa-picture-o"></i></a>
                            <h2>Upload Berkas</h2>
                            <h3>Mengupload dokumen & berkas.</h3>
                        </div>
                    </div><!--/.col-md-4-->
        </div><!--/.container-->
    </section><!--/#feature-->