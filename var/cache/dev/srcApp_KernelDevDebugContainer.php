<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerW9ONnrC\srcApp_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerW9ONnrC/srcApp_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerW9ONnrC.legacy');

    return;
}

if (!\class_exists(srcApp_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerW9ONnrC\srcApp_KernelDevDebugContainer::class, srcApp_KernelDevDebugContainer::class, false);
}

return new \ContainerW9ONnrC\srcApp_KernelDevDebugContainer([
    'container.build_hash' => 'W9ONnrC',
    'container.build_id' => 'fe00e4a9',
    'container.build_time' => 1645462634,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerW9ONnrC');