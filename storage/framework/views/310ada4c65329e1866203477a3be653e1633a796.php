<?php $__env->startSection('content'); ?>

<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="panel">
                <div class="panel-heading"><h3 class="panel-title">project building</h3></div>
                <div class="panel-body">
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">no</th>
                                    <th scope="col">kategori project</th>
                                    <th scope="col">brand project</th>
                                    <th scope="col">lokasi project</th>
                                    <th scope="col">pemegang project</th>
                                    <th scope="col">jenis</th>
                                    <th scope="col">pekerja project</th>
                                    <th scope="col">harga project</th>
                                    <th scope="col">lama pengerjaan</th>
                                    <th scope="col">handle</th>
                                </tr>
                            </thead>
                            <?php $__currentLoopData = $project; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $projects): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tbody>
                                <tr>
                                    <td><?php echo e($projects->id); ?></td>
                                    <td><?php echo e($projects->project_category); ?></td>
                                    <td><?php echo e($projects->brand_project); ?></td>
                                    <td><?php echo e($projects->location_project); ?></td>
                                    <td><?php echo e($projects->hold_project); ?></td>
                                    <td><?php echo e($projects->type_project); ?></td>
                                    <td><?php echo e($projects->worker_project); ?></td>
                                    <td><?php echo e($projects->revenue_project); ?></td>
                                    <td><?php echo e($projects->deadline_project); ?></td>
                                    <td>
                                        <div class="row">
                                            <div class="col-md-5"><a href="" class="btn btn-primary">edit</a></div>
                                            <div class="col-md-5"><a href="" class="btn btn-danger">delete</a></div>
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
</div>




<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>