<?php

namespace App\Http\Controllers;

use App\Models\Role;
use Illuminate\Http\Request;
use Orion\Concerns\DisableAuthorization;
use Orion\Concerns\DisablePagination;
use Orion\Http\Controllers\Controller;

class RoleController extends Controller
{
    use DisablePagination,DisableAuthorization;
    protected $model=Role::class;
}
