<?php

/**
 * (c) Aurelien Fredouelle <aurelien.fredouelle@gmail.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace Aurel\RandomBundle\Generator;


interface GaussianGeneratorInterface
{
    /**
     * N(m,s)
     *
     * Return a random number with normal distribution :
     *     mean = m
     *     std dev = s
     *
     * @return double A random number 
     */
    public function get($m = 0.0, $s = 1.0);
}
