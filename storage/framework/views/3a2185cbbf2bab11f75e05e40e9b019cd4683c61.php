<?php $__env->startSection('content'); ?>



<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="panel">
                <div class="panel-heading"><h3 class="panel-title">Blog</h3></div>
                <div class="panel-body">
                <a href="<?php echo e(route('blog.create')); ?>" class="btn btn-primary">create post now</a>
                    <table class="table">
                        <thead class="thead-light">
                            <tr>
                                <th scope="col">NO</th>
                                <th scope="col">TITLE</th>
                                <th scope="col">DESC</th>
                                <th scope="col">IMAGE</th>
                                <th scope="col">HANDLE</th>
                            </tr>
                        </thead>
                        <?php $__currentLoopData = $blog; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $blogs): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tbody>
                            <tr>
                                <th scope="row"><?php echo e($blogs->id); ?></th>
                                <td> <?php echo str_limit($blogs->TITLE,20); ?> </td>
                                <td> <?php echo str_limit($blogs->DESC,50); ?> </td>
                                <td> <img src="<?php echo e(asset('/thumbnail/'. $blogs->IMAGE)); ?>" alt="s" width="15%"> </td>
                                <td>
                                 <div class="row">
                                    <div class="col-md-5">
                                        <a href="<?php echo e(route('blog.edit',$blogs->id)); ?>" class="btn btn-primary"> <i class="fas fa-pen"></i> </a>
                                    </div>
                                    <div class="col-md-5">
                                        <form action="<?php echo e(route('blog.delete',$blogs->id)); ?>" method="POST">
                                        <?php echo csrf_field(); ?>
                                        <?php echo method_field('DELETE'); ?>
                                            <button type="submit" class="btn btn-danger"> <i class="fa fa-trash"></i>  </button>
                                        </form>
                                    </div>
                                 </div>
                                </td>
                            </tr>
                        </tbody>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </table>

                </div>
            </div>
        </div>
    </div>    
</div>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>