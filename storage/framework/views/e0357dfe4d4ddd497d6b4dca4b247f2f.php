<?php $__env->startSection('content'); ?>
    <main class="main-container">
        <div class="main-title">
            <div class="home-content">
                <h3>EDIT EMPLOYEE DATA</h3>
                <div class="clearfix"></div>
                <div class="row">
                    <div class="col-md-12 col-sm-12 ">
                        <div class="x_panel">
                            <div class="x_content">
                                <br />
                                <form id="demo-form2" action="<?php echo e(route('pegawai.update', $pegawai->id_pegawai)); ?>"
                                    data-parsley-validate class="form-horizontal form-label-left" method="post">
                                    <?php echo csrf_field(); ?>
                                    <?php echo method_field('PUT'); ?>
                                    <div class="item form-group">
                                        <label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">ID
                                            Pengguna</label>
                                        <div class="col-md-6 col-sm-6 ">
                                            <select class="form-control" name="id_pengguna" id="id_pengguna" required>
                                                <option value="">Pilih</option>
                                                <?php $__currentLoopData = $pengguna; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $k): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <option <?php echo e($k->id_pengguna == $pegawai->id_pengguna ? 'selected' : ''); ?>

                                                        value="<?php echo e($k->id_pengguna); ?>">
                                                        <?php echo e($k->username); ?>

                                                    </option>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="item form-group">
                                        <label for="middle-name"
                                            class="col-form-label col-md-3 col-sm-3 label-align">Nama</label>
                                        <div class="col-md-6 col-sm-6 ">
                                            <input id="middle-name" name="nama" value="<?php echo e($pegawai->nama); ?>"
                                                class="form-control" type="text" name="middle-name">
                                        </div>
                                    </div>
                                    <div class="item form-group">
                                        <label for="middle-name"
                                            class="col-form-label col-md-3 col-sm-3 label-align">Usia</label>
                                        <div class="col-md-6 col-sm-6 ">
                                            <input id="middle-name" name="usia" value="<?php echo e($pegawai->usia); ?>"
                                                class="form-control" type="text" name="middle-name">
                                        </div>
                                    </div>
                                    <div class="item form-group">
                                        <label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">Jenis
                                            Kelamin</label>
                                        <div class="col-md-6 col-sm-6 ">
                                            <input id="middle-name" name="jenis_kelamin"
                                                value="<?php echo e($pegawai->jenis_kelamin); ?>" class="form-control" type="text"
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

<?php echo $__env->make('template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Tubes_SI\resources\views/pegawai/edit-pegawai.blade.php ENDPATH**/ ?>