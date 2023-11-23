<div class="container py-3">
    <h3 class="mb-4 font-primary"><b><u>Check pesanan anda!</u></b></h3>
    <form action="<?php echo e(route('clientCheckOrderStatus')); ?>" method="post">
      <?php echo csrf_field(); ?>
      <div class="input-group mb-3">
        <input type="text" name="order_code" class="form-control bg-transparent" placeholder="Masukkan kode pesanan anda b5K-xxxxx" aria-label="Recipient's username" aria-describedby="button-addon2" required>
        <button class="btn btn-outline-primary" type="submit" id="button-addon2">Check</button>
      </div>
    </form>
    <hr/>
</div><?php /**PATH C:\Users\Aini Azzah\My_Project\laravel\e-commerce_simple\resources\views/client/components/molecules/check-order/form.blade.php ENDPATH**/ ?>