<?php

/**
 * @package   Baguette\FizzBuzz\sample
 * @author    USAMI Kenta <tadsan@zonu.me>
 * @copyright 2016 USAMI Kenta
 * @license   https://www.gnu.org/licenses/gpl-3.0.html GPL-3.0
 */

use Baguette\FizzBuzz;
use function Baguette\iter\take;

require_once __DIR__ . '/../vendor/autoload.php';

$factory = new FizzBuzz\FizzBuzzFactory(
    new class implements FizzBuzz\FizzBuzzStrategy {
        public function fizzbuzzize(int $n) :FizzBuzz\Value
        {
            return new FizzBuzz\StringValue(
                $n,
                (($n % 3 == 0) ? (($n % 5 == 0) ? 'FizzBuzz' : 'Fizz')
                               : (($n % 5 == 0) ? 'Buzz' : '')) ?: "$n"
            );
        }
    }
);

foreach (take($factory->generate(), 100) as $v) {
    echo $v, PHP_EOL;
}

exit;
