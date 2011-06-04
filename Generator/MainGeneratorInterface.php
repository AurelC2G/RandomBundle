<?php

namespace Aurel\RandomBundle\Generator;


interface MainGeneratorInterface
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
    public function uniformGet($min = 0.0, $max = 1.0);

    /**
     * N(m,s)
     *
     * Return a random number with normal distribution :
     *     mean = m
     *     std dev = s
     *
     * @return double A random number 
     */
    public function gaussianGet($m = 0.0, $s = 1.0);
}
