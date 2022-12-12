<?php

class Toy extends Product
{
  public $battery;
  public $color;

  public function __construct(Category $_category, $_id, $_name, $_brand, $_price, $_isAvaiable, $_image, $_battery, $_color)
  {
    parent::__construct($_category, $_id, $_name, $_brand, $_price, $_isAvaiable, $_image);

    $this->battery = $_battery;
    $this->color = $_color;
  }
}