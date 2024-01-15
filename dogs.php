<?php
class dogs extends product
{
    public $race;
    public $size;

    public function __construct($race, $size,)
    {
        $this->race = $race;
        $this->size = $size;
    }
}
