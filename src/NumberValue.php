<?php

namespace Baguette\FizzBuzz;

/**
 * @author    USAMI Kenta <tadsan@zonu.me>
 * @copyright 2016 USAMI Kenta
 * @license   https://www.gnu.org/licenses/gpl-3.0.html GPL-3.0
 */
final class NumberValue extends Value
{
    public function __toString()
    {
        return sprintf("%d", $this->n);
    }
}
