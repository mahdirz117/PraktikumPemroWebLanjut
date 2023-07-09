<!-- Menghubungkan dengan view template master -->


<!-- isi bagian judul halaman -->
<!-- cara penulisan isi section yang pendek -->

<!-- isi bagian konten -->
<!-- cara penulisan isi section yang panjang -->
<?php $__env->startSection('konten'); ?>
    <section class="resume-section" id="education">
        <div class="resume-section-content">
            <h2 class="mb-5">Data Buku</h2>
            <p>List buku yang tersedia di perpustakaan</p>
            <a href="/tambah" class="btn btn-primary">+ Tambah Buku</a>

            <div class="d-flex flex-column flex-md-row justify-content-between mb-5">
                <div class="container mt-5">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama buku</th>
                                <th>Kategori</th>
                                <th>Penerbit</th>
                                <th>Tahun</th>
                                <th>Jumlah Buku</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $__currentLoopData = $buku; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data_buku): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td><?php echo e($data_buku->id); ?></td>
                                    <td><?php echo e($data_buku->nama_buku); ?></td>
                                    <td><?php echo e($data_buku->kategori_buku); ?></td>
                                    <td><?php echo e($data_buku->penerbit_buku); ?></td>
                                    <td><?php echo e($data_buku->tahun_buku); ?></td>
                                    <td><?php echo e($data_buku->jumlah_buku); ?></td>
                                    <td>
                                        <ul class="list-inline m-0">
                                            <li class="list-inline-item">
                                                <a class="btn btn-primary" href="<?php echo e(url('/blog/edit', $data_buku->id)); ?>">
                                                    <i class="fa fa-edit"></i>
                                                </a>
                                            </li>
                                            <li class="list-inline-item">
                                                <form action="<?php echo e(route('blog.delete', $data_buku->id)); ?>" method="POST"
                                                    style="display: inline;">
                                                    <?php echo csrf_field(); ?>
                                                    <?php echo method_field('DELETE'); ?>
                                                    <button class="btn btn-danger" type="submit" data-toggle="tooltip"
                                                        data-placement="top" title="Delete">
                                                        <i class="fa fa-trash"></i>
                                                    </button>
                                                </form>

                                            </li>
                                        </ul>
                                    </td>
                                </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                    </table>

                    <br />
                    <div>
                        Halaman : <?php echo e($buku->currentPage()); ?><br />
                        Jumlah Data : <?php echo e($buku->total()); ?> <br />
                        Data Per Halaman : <?php echo e($buku->perPage()); ?> <br />
                    </div>

                    <div class="d-flex mt-3">
                        <?php echo e($buku->links()); ?>

                    </div>

                </div>
            </div>

        </div>
    </section>
    <hr class="m-0" />
<?php $__env->stopSection(); ?>

<?php echo $__env->make('master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\1. Kuliah\SMT 4\Prak PWL\perpus_prakPWL\resources\views/blog/tabel.blade.php ENDPATH**/ ?>