AurelRandomBundle
=================

This bundle provides helpers to generate random numbers.


Installation
============

Add RandomBundle to your vendor/bundles/ dir
------------------------------------------

::

    $ git submodule add git://github.com/AurelC2G/RandomBundle.git vendor/bundles/Aurel/RandomBundle

Add the Aurel namespace to your autoloader
----------------------------------------

::

    // app/autoload.php
    $loader->registerNamespaces(array(
        'Aurel' => __DIR__.'/../vendor/bundles',
        // your other namespaces
    );

Add RandomBundle to your application kernel
-----------------------------------------

::

    // app/AppKernel.php

    public function registerBundles()
    {
        return array(
            // ...
            new Aurel\RandomBundle\AurelRandomBundle(),
            // ...
        );
    }



Usage
=====

RandomBundle provides several services to generate random numbers :

- ``aurel_random.uniform`` implements ``UniformGeneratorInterface``
- ``aurel_random.gaussian`` implements ``GaussianGeneratorInterface``


Instead of those specialized services, you can also inject ``aurel_random.main``,
which provides shortcuts to all of the other services and allow you to only
inject a single dependancy.
