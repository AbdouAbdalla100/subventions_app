<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerXKaCKhx\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerXKaCKhx/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerXKaCKhx.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerXKaCKhx\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerXKaCKhx\App_KernelDevDebugContainer([
    'container.build_hash' => 'XKaCKhx',
    'container.build_id' => 'b37f9700',
    'container.build_time' => 1630409355,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerXKaCKhx');
