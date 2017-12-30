<?php

namespace Piwko\GenerateMenu;

class Tree
{
    public function generate()
    {
        $categories = \App\Categories::where('parent_id', 0)->all();
        return $categories;
    }
}