<?php
require_once 'prod_list.php';
require_once 'ClassStock.php';

try{
    $stock = new ClassStock();

} catch(Exception $e) {
    echo $e->getMessage();
}


