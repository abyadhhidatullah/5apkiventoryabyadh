

<?php
// Tentukan halaman yang diminta
$halaman = $_GET['halaman'] ?? 'home';
?>
<!-- Header -->
<?php include 'pages/component/header.php'; ?>
<!-- /Header -->
<body class="hold-transition layout-top-nav">
    <div class="wrapper">
        <!-- Navbar -->
        <?php include 'pages/component/navbar.php'; ?>
        <!-- /.navbar -->
        <!-- Content Wrapper -->
        <div class="content-wrapper flex-fill d-flex justify-content-center align-items-center p-4">
            <?php
            switch ($halaman) {
                // ==================================================
                // HOME
                // ==================================================
                case "home":
            ?>
                    <!-- HERO CAROUSEL -->
                    <div
                        id="heroCarousel"
                        class="carousel slide"
                        data-ride="carousel"
                        data-interval="5000">
                        <!-- INDICATORS -->
                        <ol class="carousel-indicators">
                            <li
                                data-target="#heroCarousel"
                                data-slide-to="0"
                                class="active">
                            </li>
                            <li
                                data-target="#heroCarousel"
                                data-slide-to="1">
                            </li>
                            <li
                                data-target="#heroCarousel"
                                data-slide-to="2">
                            </li>
                        </ol>
                        <!-- CAROUSEL CONTENT -->
                        <div class="carousel-inner">
                            <!-- SLIDE 1 -->
                            <div class="carousel-item active">
                                <div
                                    style="
                                    height:100vh;
                                    background:url('assets/image/slider/slider1.jpg')
                                    center center/cover no-repeat;
                                    position:relative;
                                ">
                                    <!-- Overlay -->
                                    <div
                                        style="
                                        position:absolute;
                                        top:0;
                                        left:0;
                                        width:100%;
                                        height:100%;
                                        background:rgba(0,0,0,.5);
                                    ">
                                    </div>
                                    <!-- Content -->
                                    <div
                                        class="d-flex flex-column justify-content-center align-items-center text-center text-white h-100 px-3"
                                        style="position:relative;">
                                        <h1 class="display-3 font-weight-bold">
                                            Selamat Datang di<br>
                                            CV Digital
                                        </h1>
                                        <p class="lead">
                                            Bangun profil profesionalmu
                                            dalam satu platform digital.
                                        </p>
                                        <a
                                            href="index.php?halaman=registerpeserta"
                                            class="btn btn-primary btn-lg">
                                            <i class="fas fa-user-plus mr-2"></i>
                                            Registrasi Peserta
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <!-- SLIDE 2 -->
                            <div class="carousel-item">
                                <div
                                    style="
                                    height:100vh;
                                    background:url('assets/image/slider/slider2.jpg')
                                    center center/cover no-repeat;
                                    position:relative;
                                ">
                                    <!-- Overlay -->
                                    <div
                                        style="
                                        position:absolute;
                                        top:0;
                                        left:0;
                                        width:100%;
                                        height:100%;
                                        background:rgba(0,0,0,.5);
                                    ">
                                    </div>
                                    <!-- Content -->
                                    <div
                                        class="d-flex flex-column justify-content-center align-items-center text-center text-white h-100 px-3"
                                        style="position:relative;">
                                        <h1 class="display-3 font-weight-bold">
                                            Tampilkan Potensi Terbaikmu
                                        </h1>
                                        <p class="lead">
                                            Lengkapi biodata, pendidikan,
                                            dan keahlianmu.
                                        </p>
                                        <a
                                            href="index.php?halaman=registerpeserta"
                                            class="btn btn-primary btn-lg">
                                            Mulai Sekarang
                                            <i class="fas fa-arrow-right ml-2"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <!-- SLIDE 3 -->
                            <div class="carousel-item">
                                <div
                                    style="
                                    height:100vh;
                                    background:url('assets/image/slider/slider3.jpg')
                                    center center/cover no-repeat;
                                    position:relative;
                                ">
                                    <!-- Overlay -->
                                    <div
                                        style="
                                        position:absolute;
                                        top:0;
                                        left:0;
                                        width:100%;
                                        height:100%;
                                        background:rgba(0,0,0,.5);
                                    ">
                                    </div>
                                    <!-- Content -->
                                    <div
                                        class="d-flex flex-column justify-content-center align-items-center text-center text-white h-100 px-3"
                                        style="position:relative;">
                                        <h1 class="display-3 font-weight-bold">
                                            Jadikan Profilmu<br>
                                            Lebih Profesional
                                        </h1>
                                        <p class="lead">
                                            Sederhana, rapi,
                                            dan mudah diperkenalkan.
                                        </p>
                                        <a
                                            href="index.php?halaman=registerpeserta"
                                            class="btn btn-primary btn-lg">
                                            Buat CV Digital
                                            <i class="fas fa-arrow-right ml-2"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- PREVIOUS -->
                        <a
                            class="carousel-control-prev"
                            href="#heroCarousel"
                            role="button"
                            data-slide="prev">
                            <span
                                class="carousel-control-prev-icon"
                                aria-hidden="true">
                            </span>
                            <span class="sr-only">
                                Previous
                            </span>
                        </a>
                        <!-- NEXT -->
                        <a
                            class="carousel-control-next"
                            href="#heroCarousel"
                            role="button"
                            data-slide="next">
                            <span
                                class="carousel-control-next-icon"
                                aria-hidden="true">
                            </span>
                            <span class="sr-only">
                                Next
                            </span>
                        </a>
                    </div>
                    <!-- /.hero carousel -->
            <?php
                    break;
                // ==================================================
                // LOGIN USER
                // ==================================================
                case "loginuser":
                    include "auth/loginuser.php";
                    break;
                // ==================================================
                // REGISTRASI PESERTA
                // ==================================================
                case "registerpeserta":
                    include "auth/registrasipeserta.php";
                    break;
                // ==================================================
                // CONTACT
                // ==================================================
                case "contact":
                    echo '
                    <section class="content">
                        <div class="container-fluid">
                            <h1>Contact</h1>
                            <p>Halaman contact sedang dalam pengembangan.</p>
                        </div>
                    </section>
                ';
                    break;
                // ==================================================
                // dashboard
                // ==================================================
                case "dashboard":
                    include "pages/dashboard.php";
                    break;
                // ==================================================
                // ADMIN
                // ==================================================
                case "admin":
                    include "pages/admin/index.php";
                    break;
                case "tambahadmin":
                    include "pages/admin/tambah.php";
                    break;
                case "editadmin":
                    include "pages/admin/edit.php";
                    break;
                case "lihatadmin":
                    include "pages/admin/lihat.php";
                    break;
                // ==================================================
                // CV DIGITAL
                // ==================================================
                case "cvdigital":
                    include "pages/cvdigital/index.php";
                    break;
                case "tambahcv":
                    include "pages/cvdigital/tambah.php";
                    break;
                case "editcv":
                    include "pages/cvdigital/edit.php";
                    break;
                case "lihatcv":
                    include "pages/cvdigital/lihat.php";
                    break;
                // ==================================================
                // HALAMAN TIDAK DITEMUKAN
                // ==================================================
                default:
                    include "views/notfound.php";
                    break;
            }
            ?>
        </div>
        <!-- /.content-wrapper -->
        <!-- Footer -->
        <?php include 'pages/component/footer.php'; ?>
        <!-- /.footer -->
    </div>
    <!-- /.wrapper -->
</body>
</html>