<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerNxPPwfX\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerNxPPwfX/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerNxPPwfX.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerNxPPwfX\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerNxPPwfX\App_KernelDevDebugContainer([
    'container.build_hash' => 'NxPPwfX',
    'container.build_id' => '825c4f93',
    'container.build_time' => 1672924866,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerNxPPwfX');
