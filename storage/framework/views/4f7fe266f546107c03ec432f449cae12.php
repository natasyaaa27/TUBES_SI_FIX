<?php $__env->startSection('content'); ?>
    <main class="main-container">
        <div class="main-title">
            <div class="home-content">
                <h3>OUTLET DATA</h3>

                <a href="<?php echo e(route('outlet.create')); ?>">
                    <button type="button" class="btn btn-tambah">
                        Add Data
                    </button>
                </a>
                <a href="<?php echo e(url('print-outlet')); ?>">
                    <button type="button" class="btn btn-tambah">
                        Export Data
                    </button>
                </a>
                <table class="table1">
                    <thead>
                        <tr>
                            <th>ID Outlet</th>
                            <th>ID Stok Barang</th>
                            <th>Kategori Barang</th>
                            <th>Nama Outlet</th>
                            <th>Alamat Outlet</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $__currentLoopData = $outlet; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td><?php echo e($p->id_outlet); ?></td>
                                <td><?php echo e($p->id_stokBr); ?></td>
                                <td><?php echo e($p->kategori_barang->kategori_barang); ?></td>
                                <td><?php echo e($p->nama_outlet); ?></td>
                                <td><?php echo e($p->alamat_outlet); ?></td>
                                <td>
                                    <form action="<?php echo e(route('outlet.destroy', $p->id_outlet)); ?>" method="POST">
                                        <a href="<?php echo e(route('outlet.edit', $p->id_outlet)); ?>"
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

<?php echo $__env->make('template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Tubes_SI\resources\views/outlet/outlet.blade.php ENDPATH**/ ?>