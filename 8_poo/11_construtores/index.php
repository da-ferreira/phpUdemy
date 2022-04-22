
<?php

class Car
{
    public int $doors;
    public string $color;
    public string $brand;

    public function __construct(int $doors, string $color, string $brand)
    {
        $this->doors = $doors;
        $this->color = $color;
        $this->brand = $brand;
    }
}

$bmw = new Car(4, "Red", "BMW");
printf("%d, %s, %s\n", $bmw->doors, $bmw->color, $bmw->brand);
