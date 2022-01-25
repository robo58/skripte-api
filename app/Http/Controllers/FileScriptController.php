<?php

namespace App\Http\Controllers;

use App\Models\File;
use Illuminate\Http\Request;
use Orion\Http\Controllers\RelationController;

class FileScriptController extends RelationController
{
    /**
     * Fully-qualified model class name
     */
    protected $model = File::class; // or "App\Models\Post"

    /**
     * Name of the relationship as it is defined on the Post model
     */
    protected $relation = 'script';
}
