<?php

namespace Slushkin\Task02;

class Vector
{
    private int $x;
    private int $y;
    private int $z;

    public function __construct(int $x, int $y, int $z)
    {
        $this->x = $x;
        $this->y = $y;
        $this->z = $z;
    }

    public function __toString()
    {
        return "({$this->x}, {$this->y}, {$this->z})";
    }

    public function add(Vector $vector): Vector
    {
        $this->x += $vector->x;
        $this->y += $vector->y;
        $this->z += $vector->z;
        $NewVector = new Vector($this->x,$this->y,$this->z);

        return $NewVector;
    }

    public function sub(Vector $vector): Vector
    {
        $this->x -= $vector->x;
        $this->y -= $vector->y;
        $this->z -= $vector->z;
        $NewVector = new Vector($this->x,$this->y,$this->z);

        return $NewVector;
    }

    public function product($number): Vector
    {
        $this->x *= $number;
        $this->y *= $number;
        $this->z *= $number;
        $NewVector = new Vector($this->x,$this->y,$this->z);

        return $NewVector;
    }

    public function scalarProduct(Vector $vector): int
    {
        $ScalarProduct = $this->x * $vector->x + $this->y * $vector->y + $this->z * $vector->z;

        return $ScalarProduct;
    }

    public function vectorProduct(Vector $vector): Vector
    {
        $new_vector = new Vector($vector->x, $vector->y, $vector->z);

        $new_vector->x = $this->y * $vector->z - $this->z * $vector->y;
        $new_vector->y = -1 * ($this->x * $vector->z - $this->z * $vector->x);
        $new_vector->z = $this->x * $vector->y - $this->y * $vector->x;
        
        return $new_vector;
    }
}
