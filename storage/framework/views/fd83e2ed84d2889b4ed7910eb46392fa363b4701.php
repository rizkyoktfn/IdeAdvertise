<?php $__env->startSection('content'); ?>
    <div class="images bg-5 bg-2-font">
        <p></p>
        <img src="<?php echo e(asset('logo.jpg')); ?>" class="img-circle" alt="Cinque Terre" width="250" height="250">
        <p></p>
        <p>IDEADVERTISE</p>
        <p> ENGAGE. CONNECT. PROMOTE.</p>
        <p></p>
    </div>

    <?php foreach($book as $b): ?>

    <div class="images bg-5 bg-2-font">
        <p></p>
        <img src="<?php echo e(asset($b->image)); ?>" class="img-circle" alt="Cinque Terre" width="250" height="250">
        <p></p>
        <p><?php echo e($b->name); ?></p>
        <p><?php echo e($b->skill); ?></p>
        <p>Rp.<?php echo e($b->price); ?></p>
        <p>021-<?php echo e($b->phone); ?></p>
        <p><?php echo e($b->email); ?></p>



    </div>
    <?php endforeach; ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>