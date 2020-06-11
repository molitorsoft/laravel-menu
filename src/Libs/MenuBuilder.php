<?php


namespace Molitor\Menu\Libs;


abstract class MenuBuilder
{
    abstract public function build($name, Menu $menu);
}
