<?php

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
