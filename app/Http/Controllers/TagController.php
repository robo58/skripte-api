<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use Illuminate\Http\Request;
use Orion\Concerns\DisableAuthorization;
use Orion\Concerns\DisablePagination;
use Orion\Http\Controllers\Controller;

class TagController extends Controller
{
    use DisableAuthorization,DisablePagination;
    protected $model=Tag::class;
}
