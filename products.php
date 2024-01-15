<?php
require __DIR__ . "/dogs.php";
require __DIR__ . "/cats.php";
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


// class food extends product
// {
//     public $size;
//     public $type;
// };
// class games extends product
// {
//     public $shape;
//     public $color;
    
// };
// class accessories extends product
// {
//     public $size;
//     public $isOutdoor;
//     public $isIndoor;
// }
