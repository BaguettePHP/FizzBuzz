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
];
$factory = new FizzBuzz\FizzBuzzFactory(new FizzBuzz\Mapper($map));

foreach (take($factory->generate(), 100) as $v) {
    echo $v, PHP_EOL;
}
exit;
