<?php

namespace Koodilab\Http\Middleware;

use Illuminate\Foundation\Http\Middleware\CheckForMaintenanceMode as Middleware;

class CheckForMaintenanceMode extends Middleware
{
    /**
     * {@inheritdoc}
     */
    protected $except = [];
}