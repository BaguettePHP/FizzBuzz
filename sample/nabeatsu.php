<?php

/**
 * Sekai no Nabeatsu
 *
 * @package   Baguette\FizzBuzz\sample
 * @author    USAMI Kenta <tadsan@zonu.me>
 * @copyright 2016 USAMI Kenta
 * @license   https://www.gnu.org/licenses/gpl-3.0.html GPL-3.0
 *
 * @see http://itpro.nikkeibp.co.jp/article/Watcher/20080704/310169/
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
                sprintf("%d%s", $n, (($n % 3 == 0) || strpos($n, '3') !== false) ? ' アホ' : '')
            );
        }
    }
);

foreach (take($factory->generate(), 100) as $v) {
    echo $v, PHP_EOL;
}
echo 'オモロー', PHP_EOL;

exit;
