<?php

use LaravelEnso\Migrator\App\Database\Migration;

class CreateStructureForSourcesParent extends Migration
{
    protected $menu = [
        'name' => 'Sources', 'icon' => 'book', 'route' => null, 'order_index' => 792, 'has_children' => true,
    ];
}