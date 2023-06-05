<?php $__env->startSection('content'); ?>
    <main class="main-container">
        <div class="main-title">
            <div class="home-content">
                <h3>PRODUCTION DATA</h3>

                <a href="<?php echo e(route('bahan_baku.create')); ?>">
                    <button type="button" class="btn btn-tambah">
                        Add Data
                    </button>
                </a>
                <a href="<?php echo e(url('print-bahanbaku')); ?>">
                    <button type="button" class="btn btn-tambah">
                        Export Data
                    </button>
                </a>
                <table class="table1">
                    <thead>
                        <tr>
                            <th>ID Bahan Baku</th>
                            <th>Nama Tenaga Kerja</th>
                            <th>Nama Bahan Baku</th>
                            <th>Harga Bahan Baku</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $__currentLoopData = $bahan_baku; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td><?php echo e($p->id_bahanBk); ?></td>
                                <td><?php echo e($p->tenaga_kerja->nama); ?></td>
                                <td><?php echo e($p->nama_bahanbaku); ?></td>
                                <td><?php echo e($p->harga_bahanbaku); ?></td>
                                <td>
                                    <form action="<?php echo e(route('bahan_baku.destroy', $p->id_bahanBk)); ?>" method="POST">
                                        <a href="<?php echo e(route('bahan_baku.edit', $p->id_bahanBk)); ?>"
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

<?php echo $__env->make('template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Tubes_SI\resources\views/bahan-baku/bahan-baku.blade.php ENDPATH**/ ?>