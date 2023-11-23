<?php $__env->startPush('css'); ?>
    <link rel="stylesheet" href="<?php echo e(asset('client/components/molecules/hero/hero-product.css')); ?>">
<?php $__env->stopPush(); ?>

<div class="container pb-5">
    <?php if (isset($component)) { $__componentOriginal467c91c243512402384f1999649fc71e0b8c5bcc = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\Molecules\Hero\TextBlock::class, [] + (isset($attributes) ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('molecules.hero.text-block'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $constructor = (new ReflectionClass(App\View\Components\Molecules\Hero\TextBlock::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal467c91c243512402384f1999649fc71e0b8c5bcc)): ?>
<?php $component = $__componentOriginal467c91c243512402384f1999649fc71e0b8c5bcc; ?>
<?php unset($__componentOriginal467c91c243512402384f1999649fc71e0b8c5bcc); ?>
<?php endif; ?>

    <div class="row g-md-4 g-3">
        <?php $__currentLoopData = $dataProduct->take(4); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="col-md-6 <?php echo e($loop->iteration == 2 || $loop->iteration == 3 ? 'col-6' : 'col-12'); ?>">
            <?php if (isset($component)) { $__componentOriginalc6cfd4770b9bf37ba89429b06f4de8056c78c951 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\Molecules\Hero\CardProduct::class, ['title' => $item->title,'dataImage' => $item->productImage] + (isset($attributes) ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('molecules.hero.card-product'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $constructor = (new ReflectionClass(App\View\Components\Molecules\Hero\CardProduct::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc6cfd4770b9bf37ba89429b06f4de8056c78c951)): ?>
<?php $component = $__componentOriginalc6cfd4770b9bf37ba89429b06f4de8056c78c951; ?>
<?php unset($__componentOriginalc6cfd4770b9bf37ba89429b06f4de8056c78c951); ?>
<?php endif; ?>
        </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
</div><?php /**PATH C:\Users\Aini Azzah\My_Project\laravel\e-commerce_simple\resources\views/client/components/organisms/hero.blade.php ENDPATH**/ ?>