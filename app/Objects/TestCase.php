<?php
/**
 * Created by PhpStorm.
 * User: cameron
 * Date: 28/02/17
 * Time: 21:20
 */

namespace App\Objects;


abstract class TestCase
{
    protected $state = [];
    protected $setup = false;
    protected $iterations;
    protected $warmup = false;

    /**
     * Assign state and warmup variables.
     *
     * @param $state
     * @param bool $warmup
     */
    public function __construct($state, $warmup = false)
    {
        $this->state = $state;
        $this->iterations = count($state['extensions']);
        $this->warmup = $warmup;
    }

    /**
     * Run test against child's test method.
     *
     * @return array
     */
    public function run() {
        if ($this->warmup !== false) {
            $this->test(0, $this->warmup);
        }

        $start = microtime(true);
        $this->test(0, $this->iterations);

        $delta = microtime(true) - $start;

        return [
            'name' => $this->getName(),
            'iterations' => $this->iterations,
            'total' => $delta,
            'average' => $delta / $this->iterations
        ];
    }

    /**
     * Get child's class name.
     *
     * @return string
     */
    protected function getName() {
        return get_called_class();
    }

    /**
     * Child's test method.
     *
     * @param $start
     * @param $end
     * @return mixed
     */
    abstract protected function test($start, $end);

}