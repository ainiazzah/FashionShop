<div class="container py-5">
    <h1 class="text-center py-5">Kenapa memilih kami</h1>
    <div class="row g-4">
        <div class="col-md-4 col-12">
            <?php if (isset($component)) { $__componentOriginalfe228491fca439368027077f5040d986ebc19539 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\Molecules\ChoosenBlock::class, ['icon' => 'bi-box','title' => 'Free Shipping','desc' => 'Free on orders overs $100','bg' => 'primary'] + (isset($attributes) ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('molecules.choosen-block'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $constructor = (new ReflectionClass(App\View\Components\Molecules\ChoosenBlock::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalfe228491fca439368027077f5040d986ebc19539)): ?>
<?php $component = $__componentOriginalfe228491fca439368027077f5040d986ebc19539; ?>
<?php unset($__componentOriginalfe228491fca439368027077f5040d986ebc19539); ?>
<?php endif; ?>
        </div>        
        <div class="col-md-4 col-6">
            <?php if (isset($component)) { $__componentOriginalfe228491fca439368027077f5040d986ebc19539 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\Molecules\ChoosenBlock::class, ['icon' => 'bi-cash','title' => 'Money guarantee','desc' => '30 day money back','bg' => 'info'] + (isset($attributes) ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('molecules.choosen-block'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $constructor = (new ReflectionClass(App\View\Components\Molecules\ChoosenBlock::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalfe228491fca439368027077f5040d986ebc19539)): ?>
<?php $component = $__componentOriginalfe228491fca439368027077f5040d986ebc19539; ?>
<?php unset($__componentOriginalfe228491fca439368027077f5040d986ebc19539); ?>
<?php endif; ?>
        </div>
        <div class="col-md-4 col-6">
            <?php if (isset($component)) { $__componentOriginalfe228491fca439368027077f5040d986ebc19539 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\Molecules\ChoosenBlock::class, ['icon' => 'bi-clock','title' => '24/7 Support','desc' => 'Friendly support customer','bg' => 'success'] + (isset($attributes) ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('molecules.choosen-block'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $constructor = (new ReflectionClass(App\View\Components\Molecules\ChoosenBlock::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalfe228491fca439368027077f5040d986ebc19539)): ?>
<?php $component = $__componentOriginalfe228491fca439368027077f5040d986ebc19539; ?>
<?php unset($__componentOriginalfe228491fca439368027077f5040d986ebc19539); ?>
<?php endif; ?>
        </div>
    </div>
</div><?php /**PATH C:\Users\Aini Azzah\My_Project\laravel\e-commerce_simple\resources\views/client/components/organisms/choosen-us.blade.php ENDPATH**/ ?>