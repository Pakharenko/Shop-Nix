<?php

use fw\core\Router;

//Router::add('^(?P<controller>[a-z-]+)/?(?P<action>[a-z-]+)/(?P<id>[0-9]+)?$');
//Router::add('^catalog/(?P<action>[a-z-]+)/(?P<alias>[a-z]+)$', ['controller' => 'Catalog']);

Router::add('^catalog/(?P<alias>[0-9]+)$', ['controller' => 'Catalog', 'action' => 'category']);
Router::add('^product/(?P<alias>[0-9]+)$', ['controller' => 'Product', 'action' => 'index']);
Router::add('^cart/(?P<action>[a-z-]+)/(?P<alias>[0-9]+)$', ['controller' => 'Cart', 'action' => 'index']);
Router::add('^cart/(?P<action>[a-z-]+)/(?P<alias>[0-9]+)$', ['controller' => 'Cart', 'action' => 'addAjax']);
Router::add('^post/(?P<action>[a-z-]+)/(?P<alias>[0-9]+)$', ['controller' => 'Post', 'action' => 'view']);

//Правила по умолчанию
Router::add('^$', ['controller' => 'Main', 'action' => 'index']);
Router::add('^(?P<controller>[a-z-]+)/?(?P<action>[a-z-]+)?$');

Router::dispatch($query);