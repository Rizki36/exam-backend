<?php

namespace App\Models;

class Rectangle extends PlaneFigure
{
    public $wide;

    /**
     * @param float|int $height
     * @param float|int $width
     */
    public function __construct(
        $height,
        $width
    ) {
        /** init property value  */
        $this->height = $height;
        $this->width = $width;
        $this->calculateWide();
    }

    /**
     * @return void
     */
    public function calculateWide()
    {
        $this->wide = $this->height * $this->width;
        return $this->wide;
    }

    public function printWide()
    {
        return 'base * height / 2 : ' . $this->wide;
    }
}
