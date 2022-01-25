<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Orion\Facades\Orion;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::group(['as' => 'api.'], function() {
    Orion::resource('scripts', ScriptController::class);
    Orion::resource('categories', CategoryController::class);
    Orion::resource('users', UserController::class);
    Orion::resource('tags', TagController::class);
    Orion::resource('files', FileController::class);
    Orion::resource('roles', RoleController::class);
    Orion::resource('reviews', ReviewController::class);

    Orion::belongsToResource('scripts', 'creator', ScriptCreatorController::class);
    Orion::belongsToResource('scripts', 'category', ScriptCategoryController::class);
    Orion::hasManyResource('scripts', 'files', ScriptFilesController::class);
    Orion::hasManyResource('scripts', 'reviews', ScriptReviewsController::class);
    Orion::belongsToManyResource('scripts', 'tags', ScriptTagsController::class);

    Orion::belongsToManyResource('users', 'roles', UserRolesController::class);
    Orion::hasManyResource('users', 'scripts', UserScriptsController::class);

    Orion::belongsToResource('reviews', 'reviewer', ReviewReviewerController::class);
    Orion::belongsToResource('reviews', 'script', ReviewScriptController::class);

    Orion::hasManyResource('categories', 'scripts', CategoryScriptsController::class);

    Orion::hasManyResource('tags', 'scripts', TagScriptsController::class);

    Orion::belongsToManyResource('role', 'users', RoleUsersController::class);

    Orion::belongsToResource('files', 'script', FileScriptController::class);
});
