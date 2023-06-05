<?php $__env->startSection('content'); ?>
    <main class="main-container">
        <div class="main-title">
            <div class="home-content">
                <h3>INVENTORY DATA</h3>

                <a href="<?php echo e(route('gudang.create')); ?>">
                    <button type="button" class="btn btn-tambah">
                        Add Data
                    </button>
                </a>
                <table class="table1">
                    <thead>
                        <tr>
                            <th>ID Gudang</th>
                            <th>ID Stok Produksi</th>
                            <th>Hasil Produksi</th>
                            <th>Jumlah Stok</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $__currentLoopData = $gudang; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td><?php echo e($p->id_gudang); ?></td>
                                <td><?php echo e($p->id_stokPr); ?></td>
                                <td><?php echo e($p->hasil_produksi); ?></td>
                                <td><?php echo e($p->jumlah_stok); ?></td>
                                <td>
                                    <form action="<?php echo e(route('gudang.destroy', $p->id_gudang)); ?>" method="POST">
                                        <a href="<?php echo e(route('gudang.edit', $p->id_gudang)); ?>" style="text-decoration: none">
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

<?php echo $__env->make('template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Tubes_SI\resources\views/gudang/gudang.blade.php ENDPATH**/ ?>