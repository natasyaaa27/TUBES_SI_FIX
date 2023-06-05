<?php $__env->startSection('content'); ?>
    <main class="main-container">
        <div class="main-title">
            <div class="home-content">
                <h3>ADD USER DATA</h3>
                <div class="clearfix"></div>
                <div class="row">
                    <div class="col-md-12 col-sm-12 ">
                        <div class="x_panel">
                            <div class="x_content">
                                <br />
                                <form id="demo-form2" action="<?php echo e(route('pengguna.store')); ?>" data-parsley-validate
                                    class="form-horizontal form-label-left" method="post">
                                    <?php echo csrf_field(); ?>
                                    <div class="item form-group">
                                        <label for="middle-name"
                                            class="col-form-label col-md-3 col-sm-3 label-align">Username</label>
                                        <div class="col-md-6 col-sm-6 ">
                                            <input id="middle-name" name="username" class="form-control" type="text"
                                                name="middle-name">
                                        </div>
                                    </div>
                                    <div class="item form-group">
                                        <label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">Password</label>
                                        <div class="col-md-6 col-sm-6 ">
                                            <input id="middle-name" name="password" class="form-control" type="text"
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

<?php echo $__env->make('template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Tubes_SI\resources\views/pengguna/tambah-pengguna.blade.php ENDPATH**/ ?>