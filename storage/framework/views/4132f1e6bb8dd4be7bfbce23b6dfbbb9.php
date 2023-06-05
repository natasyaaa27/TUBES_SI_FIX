<?php $__env->startSection('content'); ?>
    <main class="main-container">
        <div class="main-title">
            <div class="home-content">
                <h3>ADD INVENTORY DATA</h3>
                <div class="clearfix"></div>
                <div class="row">
                    <div class="col-md-12 col-sm-12 ">
                        <div class="x_panel">
                            <div class="x_content">
                                <br />
                                <form id="demo-form2" action="<?php echo e(route('gudang.update', $gudang->id_gudang)); ?>"
                                    data-parsley-validate class="form-horizontal form-label-left" method="post">
                                    <?php echo csrf_field(); ?>
                                    <?php echo method_field('PUT'); ?>
                                    <div class="item form-group">
                                        <label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">ID
                                            Stok Produksi</label>
                                        <div class="col-md-6 col-sm-6 ">
                                            <select class="form-control" name="id_stokPr" id="id_stokPr" required>
                                                <option value="" selected>Pilih</option>
                                                <?php $__currentLoopData = $stok_produksi; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $k): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <option <?php echo e($k->id_stokPr == $gudang->id_stokPr ? 'selected' : ''); ?>

                                                        value="<?php echo e($k->id_stokPr); ?>">
                                                        <?php echo e($k->id_stokPr); ?>

                                                    </option>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="item form-group">
                                        <label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">Hasil
                                            Produksi</label>
                                        <div class="col-md-6 col-sm-6 ">
                                            <input id="middle-name" name="hasil_produksi" value="<?php echo e($gudang->hasil_produksi); ?>" class="form-control"
                                                type="text" name="middle-name">
                                        </div>
                                    </div>
                                    <div class="item form-group">
                                        <label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">Jumlah
                                            Stok</label>
                                        <div class="col-md-6 col-sm-6 ">
                                            <input id="middle-name" name="jumlah_stok" value="<?php echo e($gudang->jumlah_stok); ?>" class="form-control" type="number"
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

<?php echo $__env->make('template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Tubes_SI\resources\views/gudang/edit-gudang.blade.php ENDPATH**/ ?>