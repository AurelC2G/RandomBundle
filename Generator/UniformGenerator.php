<?php

namespace Aurel\RandomBundle\Generator;

class UniformGenerator
{
    /**
     * Toss a coin and return the result.
     *
     * The probability to get "True" is given as a parameter.
     *
     * @param double $proba The probability to get "True"
     * @return boolean
     */
    public function tossCoin($proba = 0.5)
    {
        return $this->randomBase() <= $proba;
    }

    /**
     * Return a random number with a uniform distribution between two
     * boundaries.
     *
     * @param double $min The lower bound
     * @param double $max The upper bound
     * @return double A random number 
     */
    public function get($min = 0.0, $max = 1.0)
    {
        return (double)rand() / (double)getrandmax();
    }

    /**
     * Return a random number with a uniform distribution between 0 and 1.
     *
     * @return double A random number 
     */
    protected function randomBase()
    {
        return (double)mt_rand() / (double)mt_getrandmax();
    }
}
