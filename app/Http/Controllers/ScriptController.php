<?php

namespace App\Http\Controllers;

use App\Models\Script;
use Orion\Concerns\DisableAuthorization;
use Orion\Concerns\DisablePagination;
use Orion\Http\Controllers\Controller;

class ScriptController extends Controller
{
    use DisablePagination, DisableAuthorization;
    protected $model=Script::class;
}
