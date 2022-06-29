<?php

namespace App\Http\Controllers;

use App\Models\File;
use App\Models\Review;
use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Orion\Concerns\DisableAuthorization;
use Orion\Concerns\DisablePagination;
use Orion\Http\Controllers\RelationController;

class UserScriptsController extends RelationController
{
    use DisablePagination, DisableAuthorization;
    /**
     * Fully-qualified model class name
     */
    protected $model = User::class; // or "App\Models\Post"

    /**
     * Name of the relationship as it is defined on the Post model
     */
    protected $relation = 'scripts';

    /**
     * The relations that are loaded by default together with a resource.
     *
     * @return array
     */
    public function alwaysIncludes() : array
    {
        return ['creator', 'category'];
    }



    protected function afterSave(\Orion\Http\Requests\Request $request, Model $parentEntity, Model $entity)
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
