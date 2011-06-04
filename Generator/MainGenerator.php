<?php

namespace Aurel\RandomBundle\Generator;


class MainGenerator implements MainGeneratorInterface
{
    /**
     * Uniform number generator
     * 
     * @var UniformGenerator
     */
    protected $uniform;
    
    
    public function __construct(UniformGenerator $uniform)
    {
        $this->uniform = $uniform;
    }
    
    public function tossCoin($proba = 0.5)
    {
        return $this->uniform->tossCoin($proba);
    }
    
    public function uniformGet($min = 0.0, $max = 1.0)
    {
        return $this->uniform->get($min, $max);
    }
}
