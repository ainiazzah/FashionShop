<div class="container py-5">
    <div class="row g-3">
        <?php if (isset($component)) { $__componentOriginal1def3a0c7be0ab159af685d1f57f7e53b4c6e2f8 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\Molecules\DiscountBlock::class, ['background' => 'primary','discount' => '30% OFF','item' => 'Luxury Watches','image' => 'watch.png'] + (isset($attributes) ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('molecules.discount-block'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $constructor = (new ReflectionClass(App\View\Components\Molecules\DiscountBlock::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal1def3a0c7be0ab159af685d1f57f7e53b4c6e2f8)): ?>
<?php $component = $__componentOriginal1def3a0c7be0ab159af685d1f57f7e53b4c6e2f8; ?>
<?php unset($__componentOriginal1def3a0c7be0ab159af685d1f57f7e53b4c6e2f8); ?>
<?php endif; ?>
        <?php if (isset($component)) { $__componentOriginal1def3a0c7be0ab159af685d1f57f7e53b4c6e2f8 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\Molecules\DiscountBlock::class, ['background' => 'info','discount' => '45% OFF','item' => 'Belt Black Smooth','image' => 'belt.png'] + (isset($attributes) ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('molecules.discount-block'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $constructor = (new ReflectionClass(App\View\Components\Molecules\DiscountBlock::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal1def3a0c7be0ab159af685d1f57f7e53b4c6e2f8)): ?>
<?php $component = $__componentOriginal1def3a0c7be0ab159af685d1f57f7e53b4c6e2f8; ?>
<?php unset($__componentOriginal1def3a0c7be0ab159af685d1f57f7e53b4c6e2f8); ?>
<?php endif; ?>
    </div>
</div><?php /**PATH C:\Users\Aini Azzah\My_Project\laravel\e-commerce_simple\resources\views/client/components/organisms/discounts.blade.php ENDPATH**/ ?>