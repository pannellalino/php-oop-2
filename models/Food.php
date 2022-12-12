<?php

class Food extends Product{
  public $weight;
  public $ingredients;
  public $typology;

  public function __construct(Category $_category, $_id, $_name, $_brand, $_price, $_isAvaiable, $_image, $_weight, $_ingredients, $_typology)
  {
    parent::__construct($_category, $_id, $_name, $_brand, $_price, $_isAvaiable, $_image);

    $this->weight = $_weight;
    $this->ingredients= $_ingredients;
    $this->typology = $_typology;
  }
}