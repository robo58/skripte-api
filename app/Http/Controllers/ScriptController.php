<?php

namespace App\Http\Controllers;

use App\Models\File;
use App\Models\Script;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Orion\Concerns\DisableAuthorization;
use Orion\Concerns\DisablePagination;
use Orion\Http\Controllers\Controller;
use Orion\Http\Requests\Request;

class ScriptController extends Controller
{
    use DisablePagination, DisableAuthorization;
    protected $model=Script::class;

    /**
     * The relations that are loaded by default together with a resource.
     *
     * @return array
     */
    public function alwaysIncludes() : array
    {
        return ['creator', 'category'];
    }

    protected function afterSave(Request $request, Model $entity)
    {
        // get the file script from the request, and save it
        $file = $request->file('script');
        if ($file) {
            $file = File::make([
                'name' => $file->getClientOriginalName(),
                'mime_type' => $file->getMimeType(),
                'size' => $file->getSize(),
                'path' => $file->store('scripts'),
            ]);
            $entity->files()->save($file);
        }
    }
}
