<?php

namespace App\Http\Controllers;

use App\Models\Review;
use Illuminate\Http\Request;
use Orion\Concerns\DisableAuthorization;
use Orion\Concerns\DisablePagination;
use Orion\Http\Controllers\Controller;

class ReviewController extends Controller
{
    use DisablePagination, DisableAuthorization;
    protected $model=Review::class;
}
