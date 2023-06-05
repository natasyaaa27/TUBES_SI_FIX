<?php $__env->startSection('content'); ?>
    <main class="main-container">
        <div class="main-title">
            <div class="home-content">
                <h3>CLIENT DATA</h3>

                <a href="<?php echo e(route('pembeli.create')); ?>">
                    <button type="button" class="btn btn-tambah">
                        Add Data
                    </button>
                </a>
                <a href="<?php echo e(url('print-pembeli')); ?>">
                    <button type="button" class="btn btn-tambah">
                        Export Data
                    </button>
                </a>
                <table class="table1">
                    <thead>
                        <tr>
                            <th>ID Pembeli</th>
                            <th>ID Pengguna</th>
                            <th>Nama Pembeli</th>
                            <th>Usia</th>
                            <th>Jenis Kelamin</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $__currentLoopData = $pembeli; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td><?php echo e($p->id_pembeli); ?></td>
                                <td><?php echo e($p->pengguna->id_pengguna); ?></td>
                                <td><?php echo e($p->nama); ?></td>
                                <td><?php echo e($p->usia); ?></td>
                                <td><?php echo e($p->jenis_kelamin); ?></td>
                                <td>
                                    <form action="<?php echo e(route('pembeli.destroy', $p->id_pembeli)); ?>" method="POST">
                                        <a href="<?php echo e(route('pembeli.edit', $p->id_pembeli)); ?>"
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

<?php echo $__env->make('template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Tubes_SI\resources\views/pembeli/pembeli.blade.php ENDPATH**/ ?>