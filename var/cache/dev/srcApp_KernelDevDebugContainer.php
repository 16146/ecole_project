<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerUN4mduo\srcApp_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerUN4mduo/srcApp_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerUN4mduo.legacy');

    return;
}

if (!\class_exists(srcApp_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerUN4mduo\srcApp_KernelDevDebugContainer::class, srcApp_KernelDevDebugContainer::class, false);
}

return new \ContainerUN4mduo\srcApp_KernelDevDebugContainer([
    'container.build_hash' => 'UN4mduo',
    'container.build_id' => 'a87655a5',
    'container.build_time' => 1572216347,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerUN4mduo');
