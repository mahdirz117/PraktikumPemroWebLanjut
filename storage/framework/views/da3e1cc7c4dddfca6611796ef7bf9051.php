<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

<!DOCTYPE html>
<html>
<head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Laravel Blade View</title>
        <link rel="icon" type="image/x-icon" href="<?php echo e(asset ('style/assets/img/favicon.ico')); ?>" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Saira+Extra+Condensed:500,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Muli:400,400i,800,800i" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="<?php echo e(asset ('style/css/styles.css')); ?>" rel="stylesheet" />
    </head>
    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top" id="sideNav">
        
                    <h3 class="mb-0">Ini Namanya Menu</h3>

            <a class="navbar-brand js-scroll-trigger" href="#page-top">
                <span class="d-block d-lg-none">Mahdi Romzuz Zaki</span>
                <span class="d-none d-lg-block"><img class="img-fluid img-profile rounded-circle mx-auto mb-2" src="<?php echo e(asset ('style/assets/img/DSC02007.png')); ?>" alt="..." /></span>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav">
                    <?php if(Auth::check()): ?>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="<?php echo url('/home') ?>">Home</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="<?php echo url('/tentang') ?>">Tentang</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="<?php echo url('/kontak') ?>">Kontak</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="<?php echo url('/tabel') ?>">Tabel Buku</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="<?php echo url('/pegawai') ?>">Data Pegawai</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="<?php echo url('/logout') ?>">Logout</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#"><?php echo e(Auth::user()->name); ?></a></li>
                    <?php else: ?>
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="<?php echo url('/login') ?>">Login</a>
                    </li>
                    <?php endif; ?>
                </ul>
            </div>
           
            <h6 class="mb-0">
            <a >Modul praktikum pemrograman web lanjut tahun <?php echo $__env->make('tahun', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?></a>
</h6>
         
        </nav>
            <!-- bagian judul halaman blog -->
               
    <h3> <?php echo $__env->yieldContent('judul_halaman'); ?> </h3>
   
   <!-- bagian konten blog -->
   <?php echo $__env->yieldContent('konten'); ?>


    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>

</html>
<?php /**PATH D:\1. Kuliah\SMT 4\Prak PWL\perpus_prakPWL\resources\views/master.blade.php ENDPATH**/ ?>