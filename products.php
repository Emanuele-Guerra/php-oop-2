<?php

class product
{
    public $category;
    public $type;
    public $size;
    public $race;
    public $price;
    public $brand;
    public function __construct($category, $type, $size, $race,  $price, $brand)
    {
        $this->category = $category;
        $this->size = $size;
        $this->race = $race;
        $this->price = $price;
        $this->brand = $brand;
        $this->type = $type;
    }
};


// ------------------------------------------------------------> 


class food extends product
{
    public $size;
    public $type;

    public function __construct($size, $type)
    {
        $this->size = $size;
        $this->type = $type;
    }
};
class games extends product
{
    public $shape;
    public $color;

    public function __construct($shape, $color)
    {
        $this->shape = $shape;
        $this->color = $color;
    }
};
class accessories extends product
{
    public $size;
    public $isOutdoor;
    public $isIndoor;

    public function __construct($size, $isOutdoor, $isIndoor)
    {
        $this->size = $size;
        $this->isOutdoor = $isOutdoor;
        $this->isIndoor = $isIndoor;
    }
}
