<?php

namespace App\Custom;

use Illuminate\Routing\ResourceRegistrar as OriginalRegistrar;

class ResourceRegistrar extends OriginalRegistrar
{
    /**
     * Add search actions for a resourceful controller.
     *
     * @var array
     */
    protected $resourceDefaults = ['index', 'create', 'store', 'show', 'edit', 'update', 'destroy', 'data'];


    /**
     * Add the data method for a resourceful route.
     *
     * @param  string  $name
     * @param  string  $base
     * @param  string  $controller
     * @param  array   $options
     * @return \Illuminate\Routing\Route
     */
    protected function addResourceData($name, $base, $controller, $options)
    {
        $uri = $this->getResourceUri($name).'/search';

        $action = $this->getResourceAction($name, $controller, 'search', $options);

        return $this->router->post($uri, $action);
    }
}