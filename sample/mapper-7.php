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

$map = [
    3 => '\Baguette\FizzBuzz\FizzValue',
    5 => '\Baguette\FizzBuzz\BuzzValue',
    7 => function (int $n) {
        return new class($n) extends FizzBuzz\Value { use FizzBuzz\SymbolToString; const SYMBOL = 'Nass'; };
    }
];
$factory = new FizzBuzz\FizzBuzzFactory(new FizzBuzz\Mapper($map));

foreach (take($factory->generate(), 100) as $v) {
    echo $v, PHP_EOL;
}
exit;
