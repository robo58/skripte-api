<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Orion\Concerns\DisableAuthorization;
use Orion\Concerns\DisablePagination;
use Orion\Http\Controllers\Controller;

class CategoryController extends Controller
{
    use DisableAuthorization,DisablePagination;
    protected $model=Category::class;

    public function includes(): array
    {
        return ['scripts'];
    }
}
