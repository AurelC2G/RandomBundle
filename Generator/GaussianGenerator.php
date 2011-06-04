<?php

/**
 * (c) Aurelien Fredouelle <aurelien.fredouelle@gmail.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace Aurel\RandomBundle\Generator;


class GaussianGenerator implements GaussianGeneratorInterface
{
    protected $uniform;

    public function __construct(UniformGeneratorInterface $uniform)
    {
        $this->uniform = $uniform;
    }

    /**
     * N(m,s)
     *
     * Return a random number with normal distribution :
     *     mean = m
     *     std dev = s
     *
     * @return double A random number 
     */
    public function get($m = 0.0, $s = 1.0)
    {
        return $s * $this->gauss() + $m;
    }

    /**
     * N(0,1)
     *
     * Return a random number with normal distribution :
     *     mean = 0
     *     std dev = 1
     *
     * @return double A random number 
     */
    protected function gauss()
    {
        $x = $this->uniform->get(0.0, 1.0);
        $y = $this->uniform->get(0.0, 1.0);
        return sqrt(-2*log($x)) * cos(2*pi()*$y);
    }
}
