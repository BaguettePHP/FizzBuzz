<?php
namespace Baguette\FizzBuzz;

/**
 * @author    USAMI Kenta <tadsan@zonu.me>
 * @copyright 2016 USAMI Kenta
 * @license   https://www.gnu.org/licenses/gpl-3.0.html GPL-3.0
 */
final class ComposableValue extends Value
{
    /** @var Value[] */
    private $values = [];

    public function __construct(int $n, Value ...$values)
    {
        parent::__construct($n);

        $this->values = array_values($values);
    }

    public function add(Value $value)
    {
        $this->values[] = $value;
    }

    public function __toString()
    {
        $s = '';

        foreach ($this->values as $v) {
            $s .= $v;
        }

        return $s;
    }
}
