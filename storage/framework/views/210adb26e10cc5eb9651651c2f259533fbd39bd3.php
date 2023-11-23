<div class="col-md-6 col-12">
    <div class="p-4 discount-block bg-<?php echo e($background); ?> d-flex justify-content-between" style="border-radius:1.2rem;">
        <div class="d-flex flex-column justify-content-between">
            <div>
                <h3 class="text-white m-0 fw-normal"><?php echo e($discount); ?></h3>
                <h2 class="text-white m-0"><?php echo e($item); ?></h2>
            </div>
            <div>
                <?php if (isset($component)) { $__componentOriginaldd0ce856c3ea49f74e71c4aff4cde182914fa869 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\Molecules\Button::class, ['text' => 'Buy Now','type' => 'light','align' => 'start','size' => 'sm'] + (isset($attributes) ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('molecules.button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $constructor = (new ReflectionClass(App\View\Components\Molecules\Button::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginaldd0ce856c3ea49f74e71c4aff4cde182914fa869)): ?>
<?php $component = $__componentOriginaldd0ce856c3ea49f74e71c4aff4cde182914fa869; ?>
<?php unset($__componentOriginaldd0ce856c3ea49f74e71c4aff4cde182914fa869); ?>
<?php endif; ?>
            </div>
        </div>
        <div class="bg-white rounded-3">
            <img src="<?php echo e(asset('client/img/'.$image)); ?>" alt="" class="img-fluid">
        </div>
    </div>
</div><?php /**PATH C:\Users\Aini Azzah\My_Project\laravel\e-commerce_simple\resources\views/client/components/molecules/discount-block.blade.php ENDPATH**/ ?>