<!-- Menghubungkan dengan view template master -->


<!-- isi bagian konten -->
<!-- cara penulisan isi section yang panjang -->
<?php $__env->startSection('konten'); ?>

    <section class="resume-section" id="interests">
        <div class="resume-section-content">
            <h2 class="mb-5">Form Tambah Buku</h2>

            <form action="/insert" method="post">
                <?php echo e(csrf_field()); ?>

                <div class="form-group mt-3">
                    <label for="nama">Nama</label>
                    <input type="text" class="form-control" name="nama" id="nama" placeholder="Nama Buku">
                </div>
                <div class="form-group mt-3">
                    <label for="kategori">Kategori</label>
                    <select class="form-control" name="kategori" id="kategori">
                        <option value="Anak - anak">Anak - anak</option>
                        <option value="Ilmu Pengetahuan Alam">Ilmu Pengetahuan Alam</option>
                        <option value="Politik">Politik</option>
                        <option value="Religi">Religi</option>
                        <option value="Novel">Novel</option>
                    </select>
                </div>
                <div class="form-group mt-3">
                    <label for="penerbit">Penerbit</label>
                    <select class="form-control" name="penerbit" id="penerbit">
                        <option value="Bukunesia">Bukunesia</option>
                        <option value="Graha Ilmu">Graha Ilmu</option>
                        <option value="Al Hayat">Al Hayat</option>
                        <option value="Deep Publish">Deep Publish</option>
                        <option value="Falcon Publishing">Falcon Publishing</option>
                        <option value="Kata Depan">Kata Depan</option>
                    </select>
                </div>
                <div class="row mt-3">
                    <div class="col">
                        <label for="tahun">Tahun Buku</label>
                        <input type="number" name="tahun" class="form-control">
                    </div>
                    <div class="col">
                        <label for="jumlah">Jumlah Stok Buku</label>
                        <input type="number" name="jumlah" class="form-control">
                    </div>
                </div>

                <?php if(count($errors) > 0): ?>
                    <div class="alert alert-danger mt-3">
                        <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            - <?php echo e($error); ?> <br>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                <?php endif; ?>

                <?php if(session('error')): ?>
                    <div class="alert alert-danger mt-3">
                        <?php echo e(session('error')); ?>!
                    </div>
                <?php endif; ?>

                <div class="form-group mt-3">
                    <input class="btn btn-primary" type="submit" value="Simpan Data">
                </div>
            </form>

        </div>
    </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\1. Kuliah\SMT 4\Prak PWL\perpus_prakPWL\resources\views/blog/tambah.blade.php ENDPATH**/ ?>