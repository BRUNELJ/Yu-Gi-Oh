<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerWltUbVB\srcApp_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerWltUbVB/srcApp_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerWltUbVB.legacy');

    return;
}

if (!\class_exists(srcApp_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerWltUbVB\srcApp_KernelDevDebugContainer::class, srcApp_KernelDevDebugContainer::class, false);
}

return new \ContainerWltUbVB\srcApp_KernelDevDebugContainer([
    'container.build_hash' => 'WltUbVB',
    'container.build_id' => 'f7a794c8',
    'container.build_time' => 1551792256,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerWltUbVB');
