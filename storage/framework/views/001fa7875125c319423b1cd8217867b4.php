<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Livewire Crud Example - TechvBlogs</title>    
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <?php echo $__env->make('livewire.nav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    </nav>
    <div class="container">
        <div class="row justify-content-center mt-3">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header text-center">
                        <h2>Livewire Crud Example - TechvBlogs</h2>
                    </div>
                    
                </div>
            </div>
        </div>
        <div class="row justify-content-center mt-3">
            <?php
$__split = function ($name, $params = []) {
    return [$name, $params];
};
[$__name, $__params] = $__split('category');

$__html = app('livewire')->mount($__name, $__params, 'lw-39397638-0', $__slots ?? [], get_defined_vars());

echo $__html;

unset($__html);
unset($__name);
unset($__params);
unset($__split);
if (isset($__slots)) unset($__slots);
?>
        </div>
    </div>
    <?php echo \Livewire\Mechanisms\FrontendAssets\FrontendAssets::scripts(); ?>

</body>

</html>
<?php /**PATH /home/katherine/livewire-example/resources/views/home.blade.php ENDPATH**/ ?>