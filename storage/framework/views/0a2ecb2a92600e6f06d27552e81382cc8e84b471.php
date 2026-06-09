<!DOCTYPE html>
<html>
<head>
    <title>Laravel Saya</title>
</head>
<body>
    <h1>Data Pelanggan</h1>

    <table border="1">
    <?php $__currentLoopData = $pelanggan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $i => $v): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <tr>
      <td><?php echo e($i+1); ?></td>
      <td><?php echo e($v); ?></td>
    </tr>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</table>
</body>
</html><?php /**PATH C:\xampp\penjualan\resources\views/pelanggan/index.blade.php ENDPATH**/ ?>