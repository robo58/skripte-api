<?php

namespace App\Http\Controllers;

use App\Models\Review;
use Illuminate\Http\Request;
use Orion\Http\Controllers\RelationController;

class ReviewReviewerController extends RelationController
{
    /**
     * Fully-qualified model class name
     */
    protected $model = Review::class; // or "App\Models\Post"

    /**
     * Name of the relationship as it is defined on the Post model
     */
    protected $relation = 'reviewer';
}
