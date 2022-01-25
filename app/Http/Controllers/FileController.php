<?php

namespace App\Http\Controllers;

use App\Models\File;
use Illuminate\Http\Request;
use Orion\Concerns\DisableAuthorization;
use Orion\Concerns\DisablePagination;
use Orion\Http\Controllers\Controller;

class FileController extends Controller
{
    use DisablePagination, DisableAuthorization;
    protected $model=File::class;
}
