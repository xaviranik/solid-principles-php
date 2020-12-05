<?php


namespace OCP;


use OCP\Contracts\ShapeInterface;

class Rectangle implements ShapeInterface
{

    /**
     * @var $height
     */
    private $height;

    /**
     * @var $width
     */
    private $width;

    /**
     * Square constructor.
     *
     * @param $height
     * @param $width
     */
    public function __construct($height, $width)
    {
        $this->height = $height;
        $this->width = $width;
    }

    /**
     * @return float|int
     */
    public function area()
    {
        return $this->width * $this->height;
    }

}