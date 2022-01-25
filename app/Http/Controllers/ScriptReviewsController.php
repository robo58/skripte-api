<?php

namespace App\Http\Controllers;

use App\Models\Script;
use Illuminate\Http\Request;
use Orion\Http\Controllers\RelationController;

class ScriptReviewsController extends RelationController
{
    /**
     * Fully-qualified model class name
     */
    protected $model = Script::class; // or "App\Models\Post"

    /**
     * Name of the relationship as it is defined on the Post model
     */
    protected $relation = 'reviews';
}
