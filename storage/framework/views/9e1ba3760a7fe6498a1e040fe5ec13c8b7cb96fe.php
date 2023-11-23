<div class="bg-primary py-5 text-center container mt-5" style="border-radius:1.5rem;background: linear-gradient(180deg, rgba(37, 57, 111, 0.5) 0%, rgba(37, 57, 111, 0.5) 92.57%);">
    <h1 class="text-white">Join Our Community</h1>
    <p class="text-white fs-5">Temui tim perusahaan, pengumuman, penawaran khusus, dan banyak lagi. . .</p>
    <?php if (isset($component)) { $__componentOriginaldd0ce856c3ea49f74e71c4aff4cde182914fa869 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\Molecules\Button::class, ['text' => 'Launch Whatsapp','align' => 'center','type' => 'light'] + (isset($attributes) ? (array) $attributes->getIterator() : [])); ?>
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
</div><?php /**PATH C:\Users\Aini Azzah\My_Project\laravel\e-commerce_simple\resources\views/client/components/organisms/join-community.blade.php ENDPATH**/ ?>