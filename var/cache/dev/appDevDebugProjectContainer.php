<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\Container5rtcttf\appDevDebugProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/Container5rtcttf/appDevDebugProjectContainer.php') {
    touch(__DIR__.'/Container5rtcttf.legacy');

    return;
}

if (!\class_exists(appDevDebugProjectContainer::class, false)) {
    \class_alias(\Container5rtcttf\appDevDebugProjectContainer::class, appDevDebugProjectContainer::class, false);
}

return new \Container5rtcttf\appDevDebugProjectContainer([
    'container.build_hash' => '5rtcttf',
    'container.build_id' => 'cf1371f5',
    'container.build_time' => 1659964869,
], __DIR__.\DIRECTORY_SEPARATOR.'Container5rtcttf');
