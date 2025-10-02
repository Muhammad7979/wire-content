<a class="group relative"
   wire:navigate
   href="<?php echo e(route('article.show', $article)); ?>">
    <div class="aspect-w-16 aspect-h-11">
        <img
            class="aspect-square w-full rounded-md bg-gray-200 object-cover group-hover:opacity-75 lg:aspect-auto lg:h-80"
            src="/storage/<?php echo e($article?->image?->path); ?>"
            alt="<?php echo e($article?->image?->alt_text); ?>"/>
        <h3 class="tetext-sm text-gray-700">
            <?php echo e($article->name); ?>

        </h3>
        <!--[if BLOCK]><![endif]--><?php if($article->content): ?>
            <p class="mt-1 text-sm text-gray-500">
                <?php echo e(Str::limit($article->content,100)); ?>

            </p>
        <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
    </div>
    <h5 class="text-sm font-medium text-gray-900">
    </h5>
</a><?php /**PATH D:\filament\wire-content\resources\views/livewire/components/article-card.blade.php ENDPATH**/ ?>