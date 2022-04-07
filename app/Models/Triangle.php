<?php

namespace App\Models;

class Triangle extends PlaneFigure
{
    /** @var float|int */
    public $height;
    /** @var float|int */
    public $base;
    /** @var float|int */
    public $wide;

    /**
     * @param float|int $height
     * @param float|int $base
     */
    public function __construct(
        $height,
        $base
    ) {
        /** init property value  */
        $this->height = $height;
        $this->base = $base;
        $this->calculateWide();
    }

    public function calculateWide()
    {
        $this->wide = $this->base * $this->height / 2;
        return $this->wide;
    }

    public function printWide()
    {
        return 'base * height / 2 : ' . $this->wide;
    }
}
