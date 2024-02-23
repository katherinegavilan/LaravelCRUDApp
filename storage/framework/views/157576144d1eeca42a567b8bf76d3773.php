<?php $__env->startSection('content'); ?>
<div>
    <a href="/">Inicio</a>
    <?php if(auth()->guard()->check()): ?>
        <a href="/home">Principal</a>
        <form style="display: inline" action="/logout" method="POST">
            <?php echo csrf_field(); ?>
            <a href="#" onclick="this.closest('form').submit()">Logout</a>
        </form>
    <?php else: ?>
        <a href="/login">Login</a>
    <?php endif; ?>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/katherine/livewire-example/resources/views/livewire/nav.blade.php ENDPATH**/ ?>