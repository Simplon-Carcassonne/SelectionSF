<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerGhjLe7U\srcApp_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerGhjLe7U/srcApp_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerGhjLe7U.legacy');

    return;
}

if (!\class_exists(srcApp_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerGhjLe7U\srcApp_KernelDevDebugContainer::class, srcApp_KernelDevDebugContainer::class, false);
}

return new \ContainerGhjLe7U\srcApp_KernelDevDebugContainer([
    'container.build_hash' => 'GhjLe7U',
    'container.build_id' => 'b01f636b',
    'container.build_time' => 1568710012,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerGhjLe7U');