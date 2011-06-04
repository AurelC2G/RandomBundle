<?php

namespace Aurel\RandomBundle\Generator;


class MainGenerator implements MainGeneratorInterface
{
    /**
     * Uniform number generator
     * 
     * @var UniformGeneratorInterface
     */
    protected $uniform;

    /**
     * Gaussian number generator
     * 
     * @var GaussianGeneratorInterface
     */
    protected $gaussian;


    public function __construct(UniformGeneratorInterface  $uniform,
                                GaussianGeneratorInterface $gaussian)
    {
        $this->uniform = $uniform;
        $this->gaussian = $gaussian;
    }

    public function tossCoin($proba = 0.5)
    {
        return $this->uniform->tossCoin($proba);
    }

    public function uniformGet($min = 0.0, $max = 1.0)
    {
        return $this->uniform->get($min, $max);
    }

    public function gaussianGet($m = 0.0, $s = 1.0)
    {
        return $this->gaussian->get($m, $s);
    }
}
