<?php $__env->startSection('content'); ?>


<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="panel">
                <div class="panel-heading"><h3 class="panel-title">inventaris</h3></div>
                <div class="panel-body">

                <div class="row">
                    <div class="col-md-6">
                        <a href=" <?php echo e(route('inventorycreate')); ?> " class="btn btn-primary">tambah stock</a>
                        <a href="<?php echo e(route('export')); ?>" class="btn btn-warning">export stock</a>
                    </div>
                    <div class="col-md-6">
                     <input class="typeahead form-control" type="text" placeholder="cari....">
                    </div>
                </div>

                   <table class="table table-responsive data-table">
                        <thead>
                            <tr>
                                <th scope="col">no</th>
                                <th scope="col">kode stock</th>
                                <th scope="col">nama stock</th>
                                <th scope="col">jumlah stock</th>
                                <th scope="col">keterangan stock</th>
                                <th scope="col">action</th>
                            </tr>
                        </thead>
                        <?php $__currentLoopData = $inventory; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $inventorys): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tbody>
                            <tr>
                                <th scope="col"> <?php echo e($inventorys->id); ?> </th>
                                <td> <?php echo e($inventorys->stock_code); ?> </td>
                                <td> <?php echo e($inventorys->stock_name); ?> </td>
                                <td> <?php echo e($inventorys->stock_qty); ?> </td>
                                <td> <?php echo e($inventorys->stock_ket); ?> </td>
                                <td>
                                    <div class="row">
                                        <div class="col-xs-3">
                                            <a href="<?php echo e(route('inventory.edit',$inventorys->id)); ?>" class="btn btn-primary">edit</a>
                                        </div>
                                        <div class="col-xs-3">
                                            <form action="<?php echo e(route('inventorydelete',$inventorys->id)); ?>" method="POST">
                                                <?php echo csrf_field(); ?>
                                                <?php echo method_field('DELETE'); ?>
                                                <button type="submit" class="btn btn-danger">delete</button>
                                            </form>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </table>
                    <?php echo e($inventory->links()); ?>

                </div>
            </div>
        </div>
    </div>
</div>









<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>