<?php

class Accessory extends Product{
  public $utility;
  public $material;
  public $size;

  public function __construct(Category $_category, $_id, $_name, $_brand, $_price, $_isAvaiable, $_image, $_utility, $_material, $_size)
  {
    parent::__construct($_category, $_id, $_name, $_brand, $_price, $_isAvaiable, $_image);

    $this->utility = $_utility;
    $this->material = $_material;
    $this->size = $_size;
  }
}