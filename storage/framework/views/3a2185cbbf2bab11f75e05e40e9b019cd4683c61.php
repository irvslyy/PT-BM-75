<?php $__env->startSection('content'); ?>



<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="panel">
                <div class="panel-heading"><h3 class="panel-title">Blog</h3></div>
                <h5></h5>
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
                                    <button type="submit" class="btn btn-danger" data-toggle="modal" data-target="#exampleModal"> <i class="fa fa-trash"></i>  </button>

                                        <form action="<?php echo e(route('blog.delete',$blogs->id)); ?>" method="POST">
                                        <?php echo csrf_field(); ?>
                                        <?php echo method_field('DELETE'); ?>
                                             <!-- Modal -->
                                            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog" role="document">
                                                    <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel">Delete</h5>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        are you sure to delete?
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                        <button type="submit" class="btn btn-primary">Save changes</button>
                                                    </div>
                                                    </div>
                                                </div>
                                            </div>  
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