<?php


namespace OCP;

/**
 * Class AreaCalculator
 *
 * @package OCP
 */
class AreaCalculator
{

    /**
     * @var $area
     */
    private $area;

    /**
     * @param  array  $shapes
     *
     * @return float|int
     */
    public function calculate($shapes = [])
    {
        foreach ($shapes as $shape) {
            $this->area[] = $shape->area();
        }

        return array_sum($this->area);
    }

}