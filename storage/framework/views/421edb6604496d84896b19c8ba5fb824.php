<!-- aktifitas3---2.d. Didalam resources/views buat sub view dengan nama home.blade.php -->
<!-- Menghubungkan dengan view template master -->
<link rel="stylesheet" type="text/css" href="/css/bootstrap.css">
<script type="text/javascript" src="/js/app.js"></script>
<!-- Menghubungkan dengan view template master -->


<!-- isi bagian judul halaman -->
<!-- cara penulisan isi section yang pendek -->









<!-- isi bagian konten -->
<!-- cara penulisan isi section yang panjang -->
<?php $__env->startSection('konten'); ?>
    <div class="container-fluid p-0">
        <!-- About-->
        <section class="resume-section" id="about">
            <div class="resume-section-content">
                <h2 class="mb-0">
                    Home
                    <span class="text-primary">Page</span>
                </h2>
                <div class="subheading mb-5">
                    Selamat datang <?php echo e($nama); ?>!

                </div>
                <p class="lead mb-5">Ini Adalah Halaman Home dari proyek Praktikum Pemrograman Web Lanjut</p>
                <div class="social-icons">
                    <a class="social-icon" href="https://www.instagram.com/mahdi.r.zaki/"><i
                            class="fab fa-instagram"></i></a>
                    <a class="social-icon" href="https://www.facebook.com/mahdi.zaki.180"><i
                            class="fab fa-facebook-f"></i></a>
                </div>
            </div>
        </section>
        <hr class="m-0" />
    <?php $__env->stopSection(); ?>

<?php echo $__env->make('master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\1. Kuliah\SMT 4\Prak PWL\perpus_prakPWL\resources\views/blog/home.blade.php ENDPATH**/ ?>