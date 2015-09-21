<?php
use Cake\Routing\Router;

Router::plugin('FacebookOAuth', ['path' => '/facebookoauth'], function ($routes) {
    $routes->fallbacks('InflectedRoute');
});
