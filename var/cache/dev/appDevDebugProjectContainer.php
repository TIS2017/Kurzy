<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerXkacqsn\appDevDebugProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerXkacqsn/appDevDebugProjectContainer.php') {
    touch(__DIR__.'/ContainerXkacqsn.legacy');

    return;
}

if (!\class_exists(appDevDebugProjectContainer::class, false)) {
    \class_alias(\ContainerXkacqsn\appDevDebugProjectContainer::class, appDevDebugProjectContainer::class, false);
}

return new \ContainerXkacqsn\appDevDebugProjectContainer();
