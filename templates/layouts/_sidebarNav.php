<?php declare(strict_types=1);
view()->beginBlock('sidebarNav'); ?>
<a href="<?php echo url(['list']); ?>" class="text-center">
    <svg class="block mx-auto w-6 h-6 xl:w-8 xl:h-8" width="32" height="32" fill="currentColor">
        <use xlink:href="<?php echo view()->theme->baseUrl . '/images/icons.svg#columns-gap'; ?>" />
    </svg>
    <span class="block mt-2 mx-auto"><?php echo translate('admin', 'Widgets'); ?></span>
</a>
<?php view()->endBlock(); ?>