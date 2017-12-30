<?php

namespace Piwko\GenerateMenu;

class Tree
{
    private $parent;

    private $parent_id;

    private $child;


    public function setParent(string $parent)
    {
        $parent = \App\Categories::where('name', $parent)->first();
        $this->parent_id = $parent->id;
    }

    public function setChild(string $child)
    {
        $this->child = $child;
    }

    public function create()
    {
        $categories = new \App\Categories();
        $categories->name = $this->child;
        $categories->parent_id = $this->parent_id;
        $categories->save();
    }

    public function generate()
    {
        return \App\Categories::where('parent_id', 0)->get();
    }
}