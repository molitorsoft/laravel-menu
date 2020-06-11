<?php


namespace Molitor\Menu\Libs;


class Menu
{
    private $items = [];

    public function addLink($href, $label)
    {
        $item = new MenuItem($href, $label);
        $this->addItem($item);
        return $item;
    }

    public function addItem(MenuItem $menuItem)
    {
        $this->items[] = $menuItem;
        return $this;
    }

    public function getNumItems()
    {
        return count($this->items);
    }

    protected function itemSortCmp($a, $b)
    {
        if ($a->getSort() == $b->getSort()) {
            return 0;
        }
        return ($a->getSort() > $b->getSort()) ? +1 : -1;
    }

    public function getItems()
    {
        $items = $this->items;
        usort($items, [$this, "itemSortCmp"]);
        return $items;
    }
}
