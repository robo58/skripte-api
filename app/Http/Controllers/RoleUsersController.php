<?php

namespace App\Http\Controllers;

use App\Models\Role;
use Illuminate\Http\Request;
use Orion\Concerns\DisableAuthorization;
use Orion\Concerns\DisablePagination;
use Orion\Http\Controllers\RelationController;

class RoleUsersController extends RelationController
{
    use DisablePagination, DisableAuthorization;

    /**
     * Fully-qualified model class name
     */
    protected $model = Role::class; // or "App\Models\Post"

    /**
     * Name of the relationship as it is defined on the Post model
     */
    protected $relation = 'users';
}
