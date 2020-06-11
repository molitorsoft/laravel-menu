<?php

namespace Molitor\Menu\Libs;

class MenuManager
{
    private $menuBuilders = [];

    public function addBuilder(MenuBuilder $menuBuilder)
    {
        $this->menuBuilders[] = $menuBuilder;
    }

    public function build($name)
    {
        $menu = new Menu();
        foreach ($this->menuBuilders as $menuBuilder) {
            $menuBuilder->build($name, $menu);
        }
        return $menu;
    }
}
