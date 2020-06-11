<?php


namespace Molitor\Menu\Libs;

class MenuItem extends Menu
{
    private $label;
    private $href;
    private $sort = 0;

    public function __construct($href, $label)
    {
        $this->href = $href;
        $this->label = $label;
    }

    public function getLabel()
    {
        return $this->label;
    }

    public function getHref()
    {
        return $this->href;
    }

    public function setSort(int $sort)
    {
        $this->sort = (int)$sort;
        return $this;
    }

    public function getSort()
    {
        return $this->sort;
    }
}
