<?php

namespace App\Http\Controllers;

use App\Models\Review;
use App\Models\Tag;
use Illuminate\Http\Request;
use Orion\Http\Controllers\RelationController;

class TagScriptsController extends RelationController
{
    /**
     * Fully-qualified model class name
     */
    protected $model = Tag::class; // or "App\Models\Post"

    /**
     * Name of the relationship as it is defined on the Post model
     */
    protected $relation = 'scripts';
}
