<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\Container3Z3x4o7\srcApp_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/Container3Z3x4o7/srcApp_KernelDevDebugContainer.php') {
    touch(__DIR__.'/Container3Z3x4o7.legacy');

    return;
}

if (!\class_exists(srcApp_KernelDevDebugContainer::class, false)) {
    \class_alias(\Container3Z3x4o7\srcApp_KernelDevDebugContainer::class, srcApp_KernelDevDebugContainer::class, false);
}

return new \Container3Z3x4o7\srcApp_KernelDevDebugContainer([
    'container.build_hash' => '3Z3x4o7',
    'container.build_id' => 'b8bc9db3',
    'container.build_time' => 1562759332,
], __DIR__.\DIRECTORY_SEPARATOR.'Container3Z3x4o7');
