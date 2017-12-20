<?php

class ClassStock
{
    public $goods = [];

    public function __construct($goods)
    {
        $this->goods = $goods;
    }

    public function getProductId($id)
    {
        if(isset($id)) {
            $this->goods = $id;
        } else {
            throw new Exception('Product ID Not Found');
        }
        return $this->goods;
    }

}