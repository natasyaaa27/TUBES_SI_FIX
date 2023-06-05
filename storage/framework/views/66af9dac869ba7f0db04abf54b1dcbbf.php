<?php $__env->startSection('content'); ?>
    <main class="main-container">
        <div class="main-title">
            <div class="home-content">
                <h3>PRODUCTION COST DATA</h3>

                <a href="<?php echo e(route('biaya_produksi.create')); ?>">
                    <button type="button" class="btn btn-tambah">
                        Add Data
                    </button>
                </a>
                <a href="<?php echo e(url('print-biayaproduksi')); ?>">
                    <button type="button" class="btn btn-tambah">
                        Export Data
                    </button>
                </a>
                <table class="table1">
                    <thead>
                        <tr>
                            <th>ID Biaya Produksi</th>
                            <th>ID Produksi</th>
                            <th>Biaya Bahan Baku</th>
                            <th>Biaya Total</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $__currentLoopData = $biaya_produksi; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td><?php echo e($p->id_biayaPr); ?></td>
                                <td><?php echo e($p->id_produksi); ?></td>
                                <td><?php echo e($p->biaya_bahanbaku); ?></td>
                                <td><?php echo e($p->biaya_total); ?></td>
                                <td>
                                    <form action="<?php echo e(route('biaya_produksi.destroy', $p->id_biayaPr)); ?>"
                                        method="POST">
                                        <a href="<?php echo e(route('biaya_produksi.edit', $p->id_biayaPr)); ?>"
                                            style="text-decoration: none">
                                            <button class="btn btn-tambah" type="button">
                                                Edit
                                            </button>
                                        </a>
                                        <?php echo csrf_field(); ?>
                                        <?php echo method_field('DELETE'); ?>
                                        <button class="btn btn-tambah" type="submit">
                                            Hapus
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                </table>
            </div>
    </main>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Tubes_SI\resources\views/biaya-produksi/biaya-produksi.blade.php ENDPATH**/ ?>