<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerHgJlTVN\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerHgJlTVN/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerHgJlTVN.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerHgJlTVN\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerHgJlTVN\App_KernelDevDebugContainer([
    'container.build_hash' => 'HgJlTVN',
    'container.build_id' => '3486c2ca',
    'container.build_time' => 1595429414,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerHgJlTVN');