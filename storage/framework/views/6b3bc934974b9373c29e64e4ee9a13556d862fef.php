<?php $__env->startSection('content'); ?>

<div class="container-fluid">
    <div class="row">
        <div class="col-md-8">
            <form action="<?php echo e(route('blog.update',$blog->id)); ?>" method="POST">
            <?php echo csrf_field(); ?>
            <div class="panel">
                <div class="panel-heading"><h3 class="panel-title">create post</h3></div>
                <div class="panel-body">
                    <div class="form-group">
                        <label for="title">Title</label>
                        <input type="text" class="form-control" id="" name="TITLE" value="<?php echo e($blog->TITLE); ?>" placeholder="Enter Title" required>
                    </div>
                    <div class="form-group">
                        <label for="desc">Desc</label>
                        <textarea class="form-control" id="" rows="3" name="DESC" placeholder="Enter Desc" required><?php echo e($blog->DESC); ?></textarea>
                    </div>
                    
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="panel">
                <div class="panel-heading"><h3 class="panel-title">feature</h3></div>
                <div class="panel-body">
                    <button type="submit" class="btn btn-primary">post</button>
                </div>
            </div>
        </div>
        </form>
    </div>
</div>


<?php $__env->stopSection(); ?>



<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>