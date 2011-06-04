<?php

namespace Aurel\RandomBundle\Generator;


class MainGenerator
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
    
    /**
     * Get the uniform generator
     *
     * @return UniformGenerator $uniform
     */
    public function uniform()
    {
        return $this->uniform;
    }
}
