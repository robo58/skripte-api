<?php

namespace App\Http\Controllers;

use App\Models\File;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Orion\Concerns\DisableAuthorization;
use Orion\Concerns\DisablePagination;
use Orion\Http\Controllers\Controller;

class FileController extends Controller
{
    use DisablePagination, DisableAuthorization;
    protected $model=File::class;

    public function alwaysIncludes(): array
    {
        return ['script'];
    }
    public function afterShow(\Orion\Http\Requests\Request $request, Model $entity)
    {
        // download file in scripts directory with name $entity->name
        return response()->download(storage_path('app/scripts/'.$entity->name));
    }
}
