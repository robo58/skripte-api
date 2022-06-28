<?php

namespace App\Http\Controllers;

use App\Models\Review;
use Illuminate\Http\Request;
use Orion\Concerns\DisableAuthorization;
use Orion\Concerns\DisablePagination;
use Orion\Http\Controllers\RelationController;

class ReviewReviewerController extends RelationController
{
    use DisablePagination, DisableAuthorization;

    /**
     * Fully-qualified model class name
     */
    protected $model = Review::class; // or "App\Models\Post"

    /**
     * Name of the relationship as it is defined on the Post model
     */
    protected $relation = 'reviewer';

    public function includes(): array
    {
        return ['roles','rolesShort', 'scripts'];
    }
}
