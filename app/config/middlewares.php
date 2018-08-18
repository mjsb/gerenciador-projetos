<?php 

$app->middleware('before', function ($c) {
    #echo 'Middleware before ';
});

$app->middleware('before', function ($c) {
    if (!preg_match('/^\/api\/*./', $c['router']->getCurrentUrl())) {
        return;
    }

    $data = (new \App\Controllers\UsersController)->getCurrentUser($c);

    $c['loggedUser'] = function () use ($data) {
        return $data;
    };
});
/*
$app->middleware('after', function ($c) {
    echo ' Midd after ';
});

$app->middleware('after', function ($c) {
    echo ' Midd after 2';
});
*/