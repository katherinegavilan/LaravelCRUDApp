<div>
    <div class="col-md-12 mb-2">
        <div class="card">
            <div class="card-body">
                <!--[if BLOCK]><![endif]--><?php if(session()->has('success')): ?>
                <div class="alert alert-success" role="alert">
                    <?php echo e(session()->get('success')); ?>

                </div>
                <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
                <?php if(session()->has('error')): ?>
                <div class="alert alert-danger" role="alert">
                    <?php echo e(session()->get('error')); ?>

                </div>
                <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
                <!--[if BLOCK]><![endif]--><?php if($updateCategory): ?>
                <?php echo $__env->make('livewire.update', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                <?php else: ?>
                <?php echo $__env->make('livewire.create', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
            </div>
        </div>
    </div>
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Description</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <!--[if BLOCK]><![endif]--><?php if(count($categories) > 0): ?>
                            <!--[if BLOCK]><![endif]--><?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td>
                                    <?php echo e($category->name); ?>

                                </td>
                                <td>
                                    <?php echo e($category->description); ?>

                                </td>
                                <td>
                                        <button wire:click="edit(<?php echo e($category->id); ?>)" class="btn btn-primary btn-sm">Edit</button>
                                        <button wire:click="destroy(<?php echo e($category->id); ?>)" class="btn btn-danger btn-sm">Delete</button>
                                        <!--<button onclick="deleteCategory(<?php echo e($category->id); ?>)" class="btn btn-danger btn-sm">Delete</button>-->
                                </td>
                            </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><!--[if ENDBLOCK]><![endif]-->
                            <?php else: ?>
                            <tr>
                                <td colspan="3" align="center">
                                    No Categories Found.
                                </td>
                            </tr>
                            <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
                        </tbody>
                    </table>
                    
                </div>
            </div>
        </div>
    </div>
    <?php echo \Livewire\Mechanisms\FrontendAssets\FrontendAssets::scripts(); ?>

        <script>
            function deleteCategory(id){
            if(confirm("Are you sure to delete this record?"))
                window.livewire.emit('destroy',id);
            }
    </script>
    
</div>
<?php /**PATH /home/katherine/livewire-example/resources/views/livewire/category.blade.php ENDPATH**/ ?>