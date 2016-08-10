<?php

namespace Baguette\FizzBuzz;

/**
 * @author    USAMI Kenta <tadsan@zonu.me>
 * @copyright 2016 USAMI Kenta
 * @license   https://www.gnu.org/licenses/gpl-3.0.html GPL-3.0
 */
final class Mapper implements FizzBuzzStrategy
{
    /** @var array */
    private $fizzbuzz_map;

    /**
     * @param array $fizzbuzz_map
     */
    public function __construct(array $fizzbuzz_map)
    {
        $this->fizzbuzz_map = $fizzbuzz_map;
    }

    /**
     * @param  int $n
     * @return Value
     */
    public function fizzbuzzize(int $n) :Value
    {
        $vs = [];

        foreach ($this->fizzbuzz_map as $m => $v) {
            if ($n % $m == 0) {
                $vs[] = ($v instanceof \Closure) ? $v($n) : new $v($n);
            }
        }

        return (count($vs) > 0) ? new ComposableValue($n, ...$vs) : new NumberValue($n);
    }
}
