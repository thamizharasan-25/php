<?php
//there are three types in public specifiers
/*
    public
    private
    protected
*/
 class Mic
 {
    public $brand;
    public $color;
    public $usb_port;
    public $model;
    public $price;
     function __construct($brand)
     {
        $this->$brand;
     }
}
