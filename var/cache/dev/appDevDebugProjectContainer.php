<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerQxsuylw\appDevDebugProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerQxsuylw/appDevDebugProjectContainer.php') {
    touch(__DIR__.'/ContainerQxsuylw.legacy');

    return;
}

if (!\class_exists(appDevDebugProjectContainer::class, false)) {
    \class_alias(\ContainerQxsuylw\appDevDebugProjectContainer::class, appDevDebugProjectContainer::class, false);
}

return new \ContainerQxsuylw\appDevDebugProjectContainer();
