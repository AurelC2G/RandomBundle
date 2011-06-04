<?php

/**
 * (c) Aurelien Fredouelle <aurelien.fredouelle@gmail.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace Aurel\RandomBundle\Generator;


interface UniformGeneratorInterface
{
    /**
     * Toss a coin and return the result.
     *
     * The probability to get "True" is given as a parameter.
     *
     * @param double $proba The probability to get "True"
     * @return boolean
     */
    public function tossCoin($proba = 0.5);

    /**
     * Return a random number with a uniform distribution between two
     * boundaries.
     *
     * @param double $min The lower bound
     * @param double $max The upper bound
     * @return double A random number 
     */
    public function get($min = 0.0, $max = 1.0);
}
