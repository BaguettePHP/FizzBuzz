<?php

namespace Baguette\FizzBuzz;

/**
 * @author    USAMI Kenta <tadsan@zonu.me>
 * @copyright 2016 USAMI Kenta
 * @license   https://www.gnu.org/licenses/gpl-3.0.html GPL-3.0
 */
final class FizzBuzzFactory
{
    /** @var FizzBuzzStrategy */
    private $strategy;

    public function __construct(FizzBuzzStrategy $strategy)
    {
        $this->strategy = $strategy;
    }

    /**
     * @param  int $from
     * @return \Generator
     */
    public function generate(int $from = 1)
    {
        $n = $from;
        while (true) {
            yield $this->strategy->fizzbuzzize($n++);
        }
    }
}
