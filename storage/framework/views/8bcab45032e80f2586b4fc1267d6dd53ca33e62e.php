<?php $__env->startSection('content'); ?>


<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="panel">
                <div class="panel-heading"><div class="panel-title"><h3>masukan barang</h3></div></div>
                <div class="panel-body">
              
                <form action="<?php echo e(route('inventorypost')); ?>" method="POST">
                    <?php echo csrf_field(); ?>
                  <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">kode stok</label>
                            <input type="text" class="form-control" name="stock_code" placeholder="kode stok">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">nama barang</label>
                            <input type="text" class="form-control" name="stock_name" placeholder="nama barang">
                        </div>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">jumlah stok</label>
                            <input type="text" class="form-control" name="stock_qty" placeholder="jumlah stok">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">keterangan stok</label>
                            <input type="text" class="form-control" name="stock_ket" placeholder="keterangan stok">
                        </div>
                    </div>
                  </div>
                  <button type="submit" class="btn btn-primary">submit</button>
                </form>
                
                </div>
            </div>
        </div>
    </div>
</div>



<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>