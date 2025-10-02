<div class="p-6">
    
    <!--[if BLOCK]><![endif]--><?php if($this->articles->count() > 0 ): ?>
      <div class="max-w-[85rem] px-4 py-10 sm:px-6 lg:px-8 lg:py-14 mx-auto">
        <div class="max-w-2xl mx-auto text-center mb-10 lg:mb-14">
            <h2 class="text-2xl font-bold md:text-4xl md:leading-tight">
                Latest Articles
            </h2>
        </div>
           <div class="grid sm:grid-cols-2 md:grid-cols-3 gap-6">
            <!--[if BLOCK]><![endif]--><?php $__currentLoopData = $this->articles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $article): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php
$__split = function ($name, $params = []) {
    return [$name, $params];
};
[$__name, $__params] = $__split('components.article-card', ['article' => $article]);

$__html = app('livewire')->mount($__name, $__params, $article->id, $__slots ?? [], get_defined_vars());

echo $__html;

unset($__html);
unset($__name);
unset($__params);
unset($__split);
if (isset($__slots)) unset($__slots);
?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><!--[if ENDBLOCK]><![endif]-->
           </div>
      </div>
    <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
</div>
<?php /**PATH D:\filament\wire-content\resources\views/livewire/pages/home.blade.php ENDPATH**/ ?>