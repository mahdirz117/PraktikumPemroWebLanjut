<!-- Menghubungkan dengan view template master -->


<!-- isi bagian judul halaman -->
<!-- cara penulisan isi section yang pendek -->
<?php $__env->startSection('halaman', 'editbuku'); ?>
<?php $__env->startSection('judul_halaman', 'Halaman Edit Data Buku'); ?>


<!-- isi bagian konten -->
<!-- cara penulisan isi section yang panjang -->
<?php $__env->startSection('konten'); ?>

    <div style="padding-left: 100px; padding-right:100px; height:80%">
        <br>
        <div class="header">
            <div class="header-tittle">
                <h3>Edit Data Buku</h3>
                <p>Masukkan data buku yang akan diedit</p>
            </div>
            <div class="header-back">
                <button class="btn btn-dark" onclick="history.back()">Kembali</button>
            </div>
        </div>
        <form method="POST" action="/blog/update">
            <?php echo csrf_field(); ?>
            <?php $__currentLoopData = $buku; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data_buku): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <input type="hidden" name="id" value="<?php echo e($data_buku->id); ?>">
                <label for="nama">Nama</label><br>
                <input type="text" name="nama" id="nama" value="<?php echo e($data_buku->nama_buku); ?>"><br>
                <label for="kategori_buku">Kategori</label><br>
                <select name="kategori" id="kategori" placeholder="Anak - anak">
                    <option value="Anak - anak" <?php if ($data_buku->kategori_buku == 'Anak - anak') {
                        echo 'Selected';
                    } ?>>Anak - anak</option>
                    <option value="Ilmu Pengeteahuan Alam" <?php if ($data_buku->kategori_buku == 'Ilmu Pengetahuan Alam') {
                        echo 'Selected';
                    } ?>>Ilmu Pengetahuan Alam</option>
                    <option value="Politik" <?php if ($data_buku->kategori_buku == 'Politik') {
                        echo 'Selected';
                    } ?>>Politik</option>
                    <option value="Religi" <?php if ($data_buku->kategori_buku == 'Religi') {
                        echo 'Selected';
                    } ?>>Religi</option>
                    <option value="Novel" <?php if ($data_buku->kategori_buku == 'Novel') {
                        echo 'Selected';
                    } ?>>Novel</option>
                </select><br>
                <label for="penerbit">Penerbit</label><br>
                <select name="penerbit" id="penerbit" placeholder="Bukunesia">
                    <option value="Bukunesia" <?php if ($data_buku->penerbit_buku == 'Bukunesia') {
                        echo 'Selected';
                    } ?>>Bukunesia</option>
                    <option value="Graha Ilmu" <?php if ($data_buku->penerbit_buku == 'Graha Ilmu') {
                        echo 'Selected';
                    } ?>>Graha Ilmu</option>
                    <option value="Al Hayat" <?php if ($data_buku->penerbit_buku == 'Al Hayat') {
                        echo 'Selected';
                    } ?>>Al Hayat</option>
                    <option value="Deep Publish" <?php if ($data_buku->penerbit_buku == 'Deep Publlish') {
                        echo 'Selected';
                    } ?>>Deep Publish</option>
                    <option value="Falcon Publishing" <?php if ($data_buku->penerbit_buku == 'Falcon Publishing') {
                        echo 'Selected';
                    } ?>>Falcon Publishing</option>
                    <option value="Kata Depan" <?php if ($data_buku->penerbit_buku == 'Kata Depan') {
                        echo 'Selected';
                    } ?>>Kata Depan</option>
                </select><br>
                <table>
                    <tr>
                        <label for="tahun">Tahun Buku</label>
                        <input type="number" name="tahun" class="form-control" value="<?php echo e($data_buku->tahun_buku); ?>">
                    <tr>
                    <tr>
                        <label for="jumlah">Jumlah Stok Buku</label>
                        <input type="number" name="jumlah" class="form-control" value="<?php echo e($data_buku->jumlah_buku); ?>">
                    </tr>
                </table>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <?php if($errors->any()): ?>
        <br>
        <div class="alert alert-danger">
            <ul>
                <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li><?php echo e($error); ?></li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
        </div>
        <?php endif; ?>






            <input class="btn btn-primary margin-top-25" type="submit" name="submit" id="submit" value="Simpan Data">
        </form>


    </div>
    <style>
        .padding-left-30 {
            padding-left: 30px;
        }

        .margin-top-25 {
            margin-top: 25px;
        }

        label {
            padding-top: 10px;
        }

        .header {
            content: "";
            display: table;
            clear: both;
            width: 100%;
        }

        .header-tittle {
            float: left;
            width: 50%;
            padding: 10px;
        }

        .header-back {
            padding-top: 35px;
            height: 100%;
        }

        input,
        select {
            width: 250px;
        }
    </style>



<?php $__env->stopSection(); ?>

<?php echo $__env->make('master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\1. Kuliah\SMT 4\Prak PWL\perpus_prakPWL\resources\views/blog/edit.blade.php ENDPATH**/ ?>