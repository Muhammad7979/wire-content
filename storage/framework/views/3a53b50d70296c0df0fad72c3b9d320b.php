<div>
    <!--[if BLOCK]><![endif]--><?php if(count($chunks)): ?>
        <div class="mt-8 px-6">
            <!--[if BLOCK]><![endif]--><?php for($chunk = 0; $chunk < $page; $chunk++): ?>
                <div class="border-b border-gray-100 dark:border-gray-900 last:border-b-0"
                     wire:key="chunks-<?php echo e($chunk); ?>">
                    <?php
$__split = function ($name, $params = []) {
    return [$name, $params];
};
[$__name, $__params] = $__split('comment-chunk', ['markdownOptions' => $markdownOptions,'allowGuests' => $allowGuests,'maxDepth' => $maxDepth,'emojis' => $emojis,'ids' => $chunks[$chunk]]);

$__html = app('livewire')->mount($__name, $__params, 'chunk-'.e(md5(json_encode($this->chunks[$chunk]))).'', $__slots ?? [], get_defined_vars());

echo $__html;

unset($__html);
unset($__name);
unset($__params);
unset($__split);
if (isset($__slots)) unset($__slots);
?>
                </div>
            <?php endfor; ?><!--[if ENDBLOCK]><![endif]-->
        </div>
    <?php endif; ?><!--[if ENDBLOCK]><![endif]-->


    <!--[if BLOCK]><![endif]--><?php if($this->hasMorePages()): ?>
        <div class="mt-8 flex items-center justify-center">
            <button
                class="inline-flex items-center px-4 py-2 bg-white dark:bg-gray-800 border border-gray-300 dark:border-gray-600 rounded-md font-semibold text-xs text-gray-700 dark:text-gray-200 uppercase tracking-widest shadow-sm hover:bg-gray-50 dark:hover:bg-gray-800 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 disabled:opacity-25 transition ease-in-out duration-150"
                wire:click="loadMore">
                Load more
            </button>
        </div>
    <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
    <!--[if BLOCK]><![endif]--><?php if($this->allowGuests || auth()->user()): ?>
        <form wire:submit="createComment" class="mt-4">
            <div class="mb-3">
                <?php if (isset($component)) { $__componentOriginalf919ea398f74bf80562cc195eb7c9f14 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalf919ea398f74bf80562cc195eb7c9f14 = $attributes; } ?>
<?php $component = WireComments\Components\MarkdownEditor::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('markdown-editor'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\WireComments\Components\MarkdownEditor::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['options' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($markdownOptions),'wire:model' => 'form.body','placeholder' => 'Post a comment','class' => 'w-full','rows' => '4']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalf919ea398f74bf80562cc195eb7c9f14)): ?>
<?php $attributes = $__attributesOriginalf919ea398f74bf80562cc195eb7c9f14; ?>
<?php unset($__attributesOriginalf919ea398f74bf80562cc195eb7c9f14); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalf919ea398f74bf80562cc195eb7c9f14)): ?>
<?php $component = $__componentOriginalf919ea398f74bf80562cc195eb7c9f14; ?>
<?php unset($__componentOriginalf919ea398f74bf80562cc195eb7c9f14); ?>
<?php endif; ?>

                <!--[if BLOCK]><![endif]--><?php $__errorArgs = ['form.body'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <p class="text-red-500 dark:text-red-400 mt-1 mb-1"><?php echo e($message); ?></p>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?><!--[if ENDBLOCK]><![endif]-->
            </div>
            <button
                type="submit"
                wire:loading.attr="disabled"
                wire:loading.class="opacity-50 cursor-not-allowed"
                class="inline-flex items-center px-4 py-2 bg-gray-800 dark:bg-gray-900 border border-transparent rounded-md font-semibold text-xs dark:text-gray-100 text-white uppercase tracking-widest hover:bg-gray-700 focus:bg-gray-700 active:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 disabled:opacity-50 transition ease-in-out duration-150">
                Post a Comment
            </button>
        </form>
    <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
</div>
<?php /**PATH D:\filament\wire-content\resources\views/vendor/wire-comments/livewire/components/comments.blade.php ENDPATH**/ ?>