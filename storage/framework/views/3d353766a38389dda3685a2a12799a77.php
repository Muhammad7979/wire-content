<div class="py-12 space-y-3">
    <div class="max-w-5xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white shadow rounded overflow-hidden ">
            <article class="mx-auto prose text-gray-500">
                <h1 class="text-gray-800">
                    <?php echo e($article?->title); ?>

                </h1>
                
                <img class="rounded-sm" src="/storage/<?php echo e($article->image?->path); ?>" alt="">
                <?php echo e($article->image?->caption); ?>

                <?php echo $article?->content; ?>

            </article>
        </div>
    </div>

     <div class="max-w-5xl mx-auto sm:px-6 lg:px-8">
        <div class="p-10 bg-white shadow rounded overflow-hidden text-gray-800">
          <?php
$__split = function ($name, $params = []) {
    return [$name, $params];
};
[$__name, $__params] = $__split('comments', ['model' => $article,'emojis' => ['👍', '❤️', '😂', '🎉', '😢', '😡']]);

$__html = app('livewire')->mount($__name, $__params, 'lw-3206396920-0', $__slots ?? [], get_defined_vars());

echo $__html;

unset($__html);
unset($__name);
unset($__params);
unset($__split);
if (isset($__slots)) unset($__slots);
?>
        </div>
    </div>

</div><?php /**PATH D:\filament\wire-content\resources\views/livewire/pages/article.blade.php ENDPATH**/ ?>