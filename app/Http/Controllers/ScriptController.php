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

    protected function afterSave(Request $request, Model $entity)
    {
        $file=$request->script;
        $filename = md5($file) . now()->timestamp;

        $filename .= '.' . $file->getClientOriginalExtension();
        $path = basename(Storage::disk('local')->putFileAs('scripts', $file, $filename));
        File::create([
            'name'=>$path,
            'script_id'=>$entity->id
        ]);
    }
}
