<?php $__env->startSection('content'); ?>
    <main class="main-container">
        <div class="main-title">
            <div class="home-content">
                <h3>ADD EMPLOYEE DATA</h3>
                <div class="clearfix"></div>
                <div class="row">
                    <div class="col-md-12 col-sm-12 ">
                        <div class="x_panel">
                            <div class="x_content">
                                <br />
                                <form id="demo-form2" action="<?php echo e(route('outlet.store')); ?>" data-parsley-validate
                                    class="form-horizontal form-label-left" method="post">
                                    <?php echo csrf_field(); ?>
                                    <div class="item form-group">
                                        <label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">ID
                                            Stok Barang</label>
                                        <div class="col-md-6 col-sm-6 ">
                                            <select class="form-control" name="id_stokBr" id="id_stokBr" required>
                                                <?php $__currentLoopData = $stok_barang; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $hot): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <option value="<?php echo e($hot->id_stokBr); ?>">
                                                        <?php echo e($hot->id_stokBr); ?>

                                                    </option>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="item form-group">
                                        <label for="middle-name"
                                            class="col-form-label col-md-3 col-sm-3 label-align">Kategori Barang</label>
                                        <div class="col-md-6 col-sm-6 ">
                                            <select class="form-control" name="id_kategoriBr" id="id_kategoriBr" required>
                                                <?php $__currentLoopData = $kategori_barang; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $hot): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <option value="<?php echo e($hot->id_kategoriBr); ?>">
                                                        <?php echo e($hot->kategori_barang); ?>

                                                    </option>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="item form-group">
                                        <label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">Nama
                                            Outlet</label>
                                        <div class="col-md-6 col-sm-6 ">
                                            <input id="middle-name" name="nama_outlet" class="form-control" type="text"
                                                name="middle-name">
                                        </div>
                                    </div>
                                    <div class="item form-group">
                                        <label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">Alamat
                                            Outlet</label>
                                        <div class="col-md-6 col-sm-6 ">
                                            <input id="middle-name" name="alamat_outlet" class="form-control" type="text"
                                                name="middle-name">
                                        </div>
                                    </div>
                                    <div class="ln_solid"></div>
                                    <div class="item form-group">
                                        <div class="col-md-6 col-sm-6 offset-md-3">
                                            
                                            
                                            <button type="submit" class="btn btn-success">Submit</button>
                                        </div>
                                    </div>

                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Tubes_SI\resources\views/outlet/tambah-outlet.blade.php ENDPATH**/ ?>