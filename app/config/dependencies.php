<?php
// DIC configuration

/*   use Monolog\Logger;
  use Monolog\Handler\RotatingFileHandler; */
$container = $app->getContainer();

// db instance
// $container['pdo'] = function ($c) {
//   $settings = $c->get('settings')['mysql'];
//   $pdo = new PDO('mysql:host=' . $settings['host'] . ';dbname=' . $settings['database'], $settings['username'], $settings['password']);
//    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//    $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
//   return $pdo;
// };



    $capsule = new \Illuminate\Database\Capsule\Manager;
    $capsule->addConnection($container['settings']['db']);
    $capsule->setAsGlobal();
    $capsule->bootEloquent();

    $container['db'] = function ($container) use ($capsule) {
        return $capsule;
    };



// monolog
 /*  $container['logger'] = function ($c) {
    $settings = $c->get('settings')['logger'];
    $logger = new Monolog\Logger($settings['name']);
    $logger->pushProcessor(new Monolog\Processor\UidProcessor());
    $logger->pushHandler(new Monolog\Handler\StreamHandler($settings['path'], $settings['level']));
    return $logger;
 }; */
