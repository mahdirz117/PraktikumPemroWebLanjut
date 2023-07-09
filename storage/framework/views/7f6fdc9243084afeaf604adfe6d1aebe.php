
 
<?php $__env->startSection('halaman', 'login'); ?>
<?php $__env->startSection('judul_halaman', 'Halaman Login User'); ?>
 
<?php $__env->startSection('konten'); ?>
<div class="row justify-content-center">
    <div class="card" style="width: 18rem;">
        <div class="card-body">
            <h5 class="card-title text-center">Login</h5>
            <h6 class="card-subtitle mb-2 text-center text-muted">Isi dengan lengkap</h6>
            <form action="/authenticate" method="post" class="user">
                <?php echo csrf_field(); ?>
                <div class="form-group mt-3">
                   <input type="email" name="email" class="form-control" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Masukkan email anda" value="<?php echo e(old('email')); ?>">
                </div>
                <div class="form-group mt-3">
             	 <input type="password" name="password" class="form-control" id="exampleInputPassword" placeholder="Password" value="<?php echo e(old('password')); ?>">
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
                
                <div class="form-group mt-3 text-center">
     			  <button type="submit" class="btn btn-primary btn-block">Login</button>
                </div>
            </form>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\1. Kuliah\SMT 4\Prak PWL\perpus_prakPWL\resources\views/auth/login.blade.php ENDPATH**/ ?>