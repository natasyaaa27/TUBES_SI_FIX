<?php $__env->startSection('content'); ?>
    <main class="main-container">
        <div class="main-title">
            <div class="home-content">
                <h3>EDIT PRODUCT DATA</h3>
                <div class="clearfix"></div>
                <div class="row">
                    <div class="col-md-12 col-sm-12 ">
                        <div class="x_panel">
                            <div class="x_content">
                                <br />
                                <form id="demo-form2" action="<?php echo e(route('barang.update', $barang->id_barang)); ?>"
                                    data-parsley-validate class="form-horizontal form-label-left" method="post">
                                    <?php echo csrf_field(); ?>
                                    <?php echo method_field('PUT'); ?>
                                    <div class="item form-group">
                                        <label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">Nama
                                            Pembeli</label>
                                        <div class="col-md-6 col-sm-6 ">
                                            <select class="form-control" name="id_pembeli" id="id_pembeli" required>
                                                <?php $__currentLoopData = $pembeli; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $hot): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <option <?php echo e($hot->id_pembeli == $barang->id_pembeli ? 'selected' : ''); ?>

                                                        value="<?php echo e($hot->id_pembeli); ?>">
                                                        <?php echo e($hot->nama); ?>

                                                    </option>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="item form-group">
                                        <label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">Nama
                                            Pegawai</label>
                                        <div class="col-md-6 col-sm-6 ">
                                            <select class="form-control" name="id_pegawai" id="id_pegawai" required>
                                                <?php $__currentLoopData = $pegawai; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $hot): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <option <?php echo e($hot->id_pegawai == $barang->id_pegawai ? 'selected' : ''); ?>

                                                        value="<?php echo e($hot->id_pegawai); ?>">
                                                        <?php echo e($hot->nama); ?>

                                                    </option>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="item form-group">
                                        <label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">Nama
                                            Gudang</label>
                                        <div class="col-md-6 col-sm-6 ">
                                            <select class="form-control" name="id_gudang" id="id_gudang" required>
                                                <?php $__currentLoopData = $gudang; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $hot): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <option <?php echo e($hot->id_gudang == $barang->id_gudang ? 'selected' : ''); ?>

                                                        value="<?php echo e($hot->id_gudang); ?>">
                                                        <?php echo e($hot->id_gudang); ?>

                                                    </option>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="item form-group">
                                        <label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">Nama
                                            Barang</label>
                                        <div class="col-md-6 col-sm-6 ">
                                            <input id="middle-name" name="nama_barang" value="<?php echo e($barang->nama_barang); ?>" class="form-control" type="text"
                                                name="middle-name">
                                        </div>
                                    </div>
                                    <div class="item form-group">
                                        <label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">Stok
                                            Barang</label>
                                        <div class="col-md-6 col-sm-6 ">
                                            <input id="middle-name" name="stok_barang" value="<?php echo e($barang->stok_barang); ?>" class="form-control" type="text"
                                                name="middle-name">
                                        </div>
                                    </div>
                                    <div class="item form-group">
                                        <label for="middle-name"
                                            class="col-form-label col-md-3 col-sm-3 label-align">Kategori Barang</label>
                                        <div class="col-md-6 col-sm-6 ">
                                            <input id="middle-name" name="kategori_barang" value="<?php echo e($barang->kategori_barang); ?>"  class="form-control"
                                                type="text" name="middle-name">
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

<?php echo $__env->make('template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Tubes_SI\resources\views/barang/edit-barang.blade.php ENDPATH**/ ?>