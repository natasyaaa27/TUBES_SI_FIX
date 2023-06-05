<?php $__env->startSection('content'); ?>
    <main class="main-container">
        <div class="main-title">
            <div class="home-content">
                <h3>BARANG DATA</h3>

                <a href="<?php echo e(route('barang.create')); ?>">
                    <button type="button" class="btn btn-tambah">
                        Add Data
                    </button>
                </a>
                <a href="<?php echo e(url('print-barang')); ?>">
                    <button type="button" class="btn btn-tambah">
                        Export Data
                    </button>
                </a>
                <table class="table1">
                    <thead>
                        <tr>
                            <th>ID Barang</th>
                            <th>Nama Pembeli</th>
                            <th>Nama Pegawai</th>
                            <th>ID Gudang</th>
                            <th>Nama Barang</th>
                            <th>Stok</th>
                            <th>Kategori</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $__currentLoopData = $barang; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td><?php echo e($p->id_barang); ?></td>
                                <td><?php echo e($p->pembeli->nama); ?></td>
                                <td><?php echo e($p->pegawai->nama); ?></td>
                                <td><?php echo e($p->gudang->id_gudang); ?></td>
                                <td><?php echo e($p->nama_barang); ?></td>
                                <td><?php echo e($p->stok_barang); ?></td>
                                <td><?php echo e($p->kategori_barang); ?></td>
                                <td>
                                    <form action="<?php echo e(route('barang.destroy', $p->id_barang)); ?>" method="POST">
                                        <a href="<?php echo e(route('barang.edit', $p->id_barang)); ?>" style="text-decoration: none">
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

<?php echo $__env->make('template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Tubes_SI\resources\views/barang/barang.blade.php ENDPATH**/ ?>