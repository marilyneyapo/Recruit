<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerCWzqWea\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerCWzqWea/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerCWzqWea.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerCWzqWea\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerCWzqWea\App_KernelDevDebugContainer([
    'container.build_hash' => 'CWzqWea',
    'container.build_id' => '495e5d75',
    'container.build_time' => 1734632074,
    'container.runtime_mode' => \in_array(\PHP_SAPI, ['cli', 'phpdbg', 'embed'], true) ? 'web=0' : 'web=1',
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerCWzqWea');
