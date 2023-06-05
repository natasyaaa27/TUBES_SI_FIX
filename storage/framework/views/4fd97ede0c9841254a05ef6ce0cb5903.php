<?php $__env->startSection('content'); ?>
    <main class="main-container">
        <div class="main-title">
            <div class="home-content">
                <h3>PRODUCT STOCK DATA</h3>

                <a href="<?php echo e(route('stok_barang.create')); ?>">
                    <button type="button" class="btn btn-tambah">
                        Add Data
                    </button>
                </a>
                <a href="<?php echo e(url('print-stokbarang')); ?>">
                    <button type="button" class="btn btn-tambah">
                        Export Data
                    </button>
                </a>
                <table class="table1">
                    <thead>
                        <tr>
                            <th>ID Stok Barang</th>
                            <th>Nama Barang</th>
                            <th>Stok Produksi</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $__currentLoopData = $stok_barang; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td><?php echo e($p->id_stokBr); ?></td>
                                <td><?php echo e($p->barang->nama_barang); ?></td>
                                <td><?php echo e($p->stok_produksi); ?></td>
                                <td>
                                    <form action="<?php echo e(route('stok_barang.destroy', $p->id_stokBr)); ?>" method="POST">
                                        <a href="<?php echo e(route('stok_barang.edit', $p->id_stokBr)); ?>"
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

<?php echo $__env->make('template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Tubes_SI\resources\views/stok-barang/stok-barang.blade.php ENDPATH**/ ?>