<?php

class Product{
  public $category;
  public $id;
  public $name;
  public $brand;
  public $price;
  public $isAvaiable;
  public $image;

  public function __construct(Category $_category, $_id, $_name, $_brand, $_price, $_isAvaiable, $_image)
  {
    $this->category = $_category;
    $this->id = $_id;
    $this->name = $_name;
    $this->brand = $_brand;
    $this->price = $_price;
    $this->isAvaiable = $_isAvaiable;
    $this->image = $_image;
  }
}