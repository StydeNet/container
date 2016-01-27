<?php

namespace Styde\Container;

class Application
{

    /**
     * @var Container
     */
    protected $container;

    public function __construct(Container $container)
    {
        $this->container = $container;
    }

    public function registerProviders(array $providers)
    {
        foreach ($providers as $provider)
        {
            $provider = new $provider($this->container);
            $provider->register();
        }
    }

}



