<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerExzmqs4\appDevDebugProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerExzmqs4/appDevDebugProjectContainer.php') {
    touch(__DIR__.'/ContainerExzmqs4.legacy');

    return;
}

if (!\class_exists(appDevDebugProjectContainer::class, false)) {
    \class_alias(\ContainerExzmqs4\appDevDebugProjectContainer::class, appDevDebugProjectContainer::class, false);
}

return new \ContainerExzmqs4\appDevDebugProjectContainer(array(
    'container.build_hash' => 'Exzmqs4',
    'container.build_id' => '86df1ef2',
    'container.build_time' => 1537569335,
), __DIR__.\DIRECTORY_SEPARATOR.'ContainerExzmqs4');