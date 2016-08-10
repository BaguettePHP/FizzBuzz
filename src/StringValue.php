<?php

namespace Baguette\FizzBuzz;

/**
 * @author    USAMI Kenta <tadsan@zonu.me>
 * @copyright 2016 USAMI Kenta
 * @license   https://www.gnu.org/licenses/gpl-3.0.html GPL-3.0
 */
final class StringValue extends Value
{
    /** @var string */
    private $s;

    /**
     * @param int    $n
     * @param string $s
     */
    public function __construct(int $n, string $s)
    {
        parent::__construct($n);

        $this->s = $s;
    }

    public function __toString()
    {
        return $this->s;
    }
}
