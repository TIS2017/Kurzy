<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerH4uwdhx\appDevDebugProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerH4uwdhx/appDevDebugProjectContainer.php') {
    touch(__DIR__.'/ContainerH4uwdhx.legacy');

    return;
}

if (!\class_exists(appDevDebugProjectContainer::class, false)) {
    \class_alias(\ContainerH4uwdhx\appDevDebugProjectContainer::class, appDevDebugProjectContainer::class, false);
}

return new \ContainerH4uwdhx\appDevDebugProjectContainer();
