<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerL01gskw\appDevDebugProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerL01gskw/appDevDebugProjectContainer.php') {
    touch(__DIR__.'/ContainerL01gskw.legacy');

    return;
}

if (!\class_exists(appDevDebugProjectContainer::class, false)) {
    \class_alias(\ContainerL01gskw\appDevDebugProjectContainer::class, appDevDebugProjectContainer::class, false);
}

return new \ContainerL01gskw\appDevDebugProjectContainer(array(
    'container.build_hash' => 'L01gskw',
    'container.build_id' => '344befd8',
    'container.build_time' => 1538509815,
), __DIR__.\DIRECTORY_SEPARATOR.'ContainerL01gskw');
