<?php

use fw\core\Router;

// Clients routes
Router::add('^catalog/(?P<alias>[0-9]+)$', ['controller' => 'Catalog', 'action' => 'filter']);
Router::add('^catalog/page-(?P<alias>[0-9]+)$', ['controller' => 'Catalog', 'action' => 'index']);
Router::add('^catalog/(?P<alias>[0-9]+)$', ['controller' => 'Catalog', 'action' => 'category']);
Router::add('^product/(?P<alias>[0-9]+)$', ['controller' => 'Product', 'action' => 'index']);
Router::add('^cart/(?P<action>[a-z-]+)/(?P<alias>[0-9]+)$', ['controller' => 'Cart', 'action' => 'index']);
Router::add('^cart/(?P<action>[a-z-]+)/(?P<alias>[0-9]+)$', ['controller' => 'Cart', 'action' => 'add']);
Router::add('^cart/(?P<action>[a-z-]+)/(?P<alias>[0-9]+)$', ['controller' => 'Cart', 'action' => 'ajax']);
Router::add('^post/view/(?P<alias>[0-9]+)$', ['controller' => 'Post', 'action' => 'view']);


//Admin routes
Router::add('^product/(?P<action>[a-z-]+)/(?P<alias>[0-9]+)$', ['controller' => 'Product', 'action' => 'delete', 'prefix' => 'admin']);
Router::add('^product/(?P<action>[a-z-]+)/(?P<alias>[0-9]+)$', ['controller' => 'Product', 'action' => 'edit', 'prefix' => 'admin']);
Router::add('^product/(?P<action>[a-z-]+)/(?P<alias>[0-9]+)$', ['controller' => 'Product', 'action' => 'create', 'prefix' => 'admin']);

Router::add('^category/(?P<action>[a-z-]+)/(?P<alias>[0-9]+)$', ['controller' => 'Category', 'action' => 'delete', 'prefix' => 'admin']);
Router::add('^category/(?P<action>[a-z-]+)/(?P<alias>[0-9]+)$', ['controller' => 'Category', 'action' => 'edit', 'prefix' => 'admin']);
Router::add('^category/(?P<action>[a-z-]+)/(?P<alias>[0-9]+)$', ['controller' => 'Category', 'action' => 'create', 'prefix' => 'admin']);

Router::add('^order/(?P<action>[a-z-]+)/(?P<alias>[0-9]+)$', ['controller' => 'Order', 'action' => 'delete', 'prefix' => 'admin']);
Router::add('^order/(?P<action>[a-z-]+)/(?P<alias>[0-9]+)$', ['controller' => 'Order', 'action' => 'edit', 'prefix' => 'admin']);
Router::add('^order/(?P<action>[a-z-]+)/(?P<alias>[0-9]+)$', ['controller' => 'Order', 'action' => 'view', 'prefix' => 'admin']);

Router::add('^user/(?P<action>[a-z-]+)/(?P<alias>[0-9]+)$', ['controller' => 'User', 'action' => 'delete', 'prefix' => 'admin']);
Router::add('^user/(?P<action>[a-z-]+)/(?P<alias>[0-9]+)$', ['controller' => 'User', 'action' => 'edit', 'prefix' => 'admin']);
Router::add('^user/(?P<action>[a-z-]+)/(?P<alias>[0-9]+)$', ['controller' => 'User', 'action' => 'create', 'prefix' => 'admin']);

Router::add('^post/(?P<action>[a-z-]+)/(?P<alias>[0-9]+)$', ['controller' => 'Post', 'action' => 'delete', 'prefix' => 'admin']);
Router::add('^post/(?P<action>[a-z-]+)/(?P<alias>[0-9]+)$', ['controller' => 'Post', 'action' => 'edit', 'prefix' => 'admin']);
Router::add('^post/(?P<action>[a-z-]+)/(?P<alias>[0-9]+)$', ['controller' => 'Post', 'action' => 'create', 'prefix' => 'admin']);
Router::add('^post/(?P<action>[a-z-]+)/(?P<alias>[0-9]+)$', ['controller' => 'Post', 'action' => 'view', 'prefix' => 'admin']);


//Правила по умолчанию
// --- Adminka ---
Router::add('^admin$', ['controller' => 'Admin', 'action' => 'index', 'prefix' => 'admin']);
Router::add('^admin/?(?P<controller>[a-z-]+)/?(?P<action>[a-z-]+)?$', ['prefix' => 'admin']);

/// --- Clients ---
Router::add('^$', ['controller' => 'Main', 'action' => 'index']);
Router::add('^(?P<controller>[a-z-]+)/?(?P<action>[a-z-]+)?$');

Router::dispatch($query);