<!DOCTYPE html>
<html>

<head>
    <title>Laporan Barang</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <style type="text/css">
        table tr td,
        table tr th {
            font-size: 9pt;
        }
    </style>
    <center>
        <h5 class="mb-2">Laporan Barang</h5>
    </center>

    <table class='table table-bordered'>
        <thead>
            <tr>
                <th>NO</th>
                <th>Nama Pembeli</th>
                <th>Nama Pegawai</th>
                <th>ID Gudang</th>
                <th>Nama Barang</th>
                <th>Stok</th>
                <th>Kategori</th>
            </tr>
        </thead>
        <tbody>
            <?php $i=1 ?>
            <?php $__currentLoopData = $barang; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($i++); ?></td>
                    <td><?php echo e($p->pembeli->nama); ?></td>
                    <td><?php echo e($p->pegawai->nama); ?></td>
                    <td><?php echo e($p->gudang->id_gudang); ?></td>
                    <td><?php echo e($p->nama_barang); ?></td>
                    <td><?php echo e($p->stok_barang); ?></td>
                    <td><?php echo e($p->kategori_barang); ?></td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>

</body>

</html>
<?php /**PATH C:\xampp\htdocs\Tubes_SI\resources\views/barang/laporan-barang.blade.php ENDPATH**/ ?>