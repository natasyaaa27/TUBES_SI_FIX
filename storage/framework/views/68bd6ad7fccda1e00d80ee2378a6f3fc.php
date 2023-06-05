<?php $__env->startSection('content'); ?>
    <main class="main-container">
        <div class="main-title">
            <div class="home-content">
                <h3>ADD RAW MATERIAL DATA</h3>
                <div class="clearfix"></div>
                <div class="row">
                    <div class="col-md-12 col-sm-12 ">
                        <div class="x_panel">
                            <div class="x_content">
                                <br />
                                <form id="demo-form2" action="<?php echo e(route('bahan_baku.update', $bahan_baku->id_bahanBk)); ?>"
                                    data-parsley-validate class="form-horizontal form-label-left" method="post">
                                    <?php echo csrf_field(); ?>
                                    <?php echo method_field('PUT'); ?>
                                    <div class="item form-group">
                                        <label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">ID
                                            Tenaga Kerja</label>
                                        <div class="col-md-6 col-sm-6 ">
                                            <select class="form-control" name="id_tenagakerja" id="id_tenagakerja" required>
                                                <option value="" selected>Pilih</option>
                                                <?php $__currentLoopData = $tenaga_kerja; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $k): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <option
                                                        <?php echo e($k->id_tenagakerja == $bahan_baku->id_tenagakerja ? 'selected' : ''); ?>

                                                        value="<?php echo e($k->id_tenagakerja); ?>">
                                                        <?php echo e($k->nama); ?>

                                                    </option>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="item form-group">
                                        <label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">Nama
                                            Bahan Baku</label>
                                        <div class="col-md-6 col-sm-6 ">
                                            <input id="middle-name" name="nama_bahanbaku" value="<?php echo e($bahan_baku->nama_bahanbaku); ?>" class="form-control"
                                                type="text" name="middle-name">
                                        </div>
                                    </div>
                                    <div class="item form-group">
                                        <label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">Harga
                                            Bahan Baku</label>
                                        <div class="col-md-6 col-sm-6 ">
                                            <input id="middle-name" name="harga_bahanbaku" value="<?php echo e($bahan_baku->harga_bahanbaku); ?>" class="form-control"
                                                type="number" name="middle-name">
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

<?php echo $__env->make('template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Tubes_SI\resources\views/bahan-baku/edit-bahan-baku.blade.php ENDPATH**/ ?>