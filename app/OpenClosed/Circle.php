<?php


namespace OCP;


use OCP\Contracts\ShapeInterface;

class Circle implements ShapeInterface
{

    /**
     * @var $radius
     */
    private $radius;

    /**
     * Circle constructor.
     * @param $radius
     */
    public function __construct($radius)
    {

        $this->radius = $radius;
    }

    /**
     * @return float|int
     */
    public function area()
    {
        return $this->radius * $this->radius * pi();
    }
}