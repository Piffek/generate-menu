<?php

namespace Piwko\GenerateMenu;

class Tree
{
    public function generate()
    {
        return \App\Categories::where('parent_id', 0)->get();
    }
}