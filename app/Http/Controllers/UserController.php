<?php

namespace App\Http\Controllers;

use App\Models\User;
use Orion\Concerns\DisableAuthorization;
use Orion\Concerns\DisablePagination;
use Orion\Http\Controllers\Controller;

class UserController extends Controller
{
    use DisableAuthorization,DisablePagination;
    protected $model=User::class;

    public function alwaysIncludes(): array
    {
        return ['roles'];
    }

    public function includes(): array
    {
        return ['roles','rolesShort', 'scripts'];
    }

}
