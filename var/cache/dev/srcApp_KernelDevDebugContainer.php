<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerHowlcq3\srcApp_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerHowlcq3/srcApp_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerHowlcq3.legacy');

    return;
}

if (!\class_exists(srcApp_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerHowlcq3\srcApp_KernelDevDebugContainer::class, srcApp_KernelDevDebugContainer::class, false);
}

return new \ContainerHowlcq3\srcApp_KernelDevDebugContainer([
    'container.build_hash' => 'Howlcq3',
    'container.build_id' => 'f6372807',
    'container.build_time' => 1577213093,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerHowlcq3');
