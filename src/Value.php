<?php

namespace Baguette\FizzBuzz;

/**
 * @author    USAMI Kenta <tadsan@zonu.me>
 * @copyright 2016 USAMI Kenta
 * @license   https://www.gnu.org/licenses/gpl-3.0.html GPL-3.0
 */
abstract class Value
{
    /** @var int */
    protected $n;

    public function __construct(int $n)
    {
        $this->n = $n;
    }

    abstract function __toString();
}
