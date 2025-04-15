<?php

namespace EdemotsCourses\EsgiDesignPattern\Exercice1;

class Car implements Vehicle
{
    public float $speed = 0;

    public function accelerate(): float {
        $this->speed += 3.5;
        return $this->speed;
    }

    public function breaks(): float {
        if ($this->speed > 5) {
            $this->speed -= 5;
        } else {
            $this->speed = 0;
        }
        return $this->speed;
    }
}
