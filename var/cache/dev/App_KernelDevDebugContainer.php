<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerMyPO2yD\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerMyPO2yD/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerMyPO2yD.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerMyPO2yD\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerMyPO2yD\App_KernelDevDebugContainer([
    'container.build_hash' => 'MyPO2yD',
    'container.build_id' => 'f4db696c',
    'container.build_time' => 1593597711,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerMyPO2yD');