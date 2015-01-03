<?php

namespace ukatama\Mew;

use ukatama\Mew;
use ukatama\Mew\Error\NotFoundException;
use ukatama\Mew\Utility;

class Registry {
    static public function controller($path) {
        $name = 'ukatama\\Mew\\' . Utility::CamelCase($path) . 'Controller';
        if (!class_exists($name)) {
            throw new NotFoundException("Controller \"$path\" is not defined");
        }
        return $name;
    }
}
