<?php $__env->startSection('content'); ?>
    <div class="images bg-5 bg-2-font">
        <p></p>
        <img src="<?php echo e(asset('logo.jpg')); ?>" class="img-circle" alt="Cinque Terre" width="250" height="250">
        <p></p>
        <p>IDEADVERTISE</p>
        <p> ENGAGE. CONNECT. PROMOTE.</p>
        <p></p>
    </div>

    <div class="images bg-5 bg-2-font">
        <p></p>
        <img src="<?php echo e(asset($client->image)); ?>" class="img-circle" alt="Cinque Terre" width="250" height="250">
        <p></p>
        <p><?php echo e($client->name); ?></p>
        <p><?php echo e($client->skill); ?></p>
        <p>Rp.<?php echo e($client->price); ?></p>


        <a href="<?php echo e(url('/book/'.$client->id)); ?>"> <button type="submit" class="btn btn-primary btn-md">Book</button></a>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>