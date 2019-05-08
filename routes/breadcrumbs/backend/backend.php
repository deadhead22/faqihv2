<?php

Breadcrumbs::for('admin.dashboard', function ($trail) {
    $trail->push(__('strings.backend.dashboard.title'), route('admin.dashboard'));
});

Breadcrumbs::for('admin.page', function ($trail) {
    $trail->push(__('strings.backend.page.title'), route('admin.page'));
});

require __DIR__.'/auth.php';
require __DIR__.'/log-viewer.php';
