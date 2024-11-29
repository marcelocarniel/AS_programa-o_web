<?php

use App\Http\Controllers\ArtifactController;
use App\Http\Controllers\CollectionController;
use App\Http\Controllers\CuratorController;
use App\Models\Artifact;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('colletions', [CollectionController::class, 'index']);
Route::get('colletions/create', [CollectionController::class, 'create']);
Route::post('colletions', [CollectionController::class, 'store']);
Route::get('colletions/{id}/edit', [CollectionController::class, 'edit']);
Route::put('colletions/{id}', [CollectionController::class, 'update']);
Route::delete('colletions/{id}', [CollectionController::class, 'destroy']);

Route::get('artifacts', [ArtifactController::class, 'index']);
Route::get('artifacts/create', [ArtifactController::class, 'create']);
Route::post('artifacts', [ArtifactController::class, 'store']);
Route::get('artifacts/{id}/edit', [ArtifactController::class, 'edit']);
Route::put('artifacts/{id}', [ArtifactController::class, 'update']);
Route::delete('artifacts/{id}', [ArtifactController::class, 'destroy']);


Route::get('corators', [CuratorController::class, 'index']);
Route::get('corators/create', [CuratorController::class, 'create']);
Route::post('corators', [CuratorController::class, 'store']);
Route::get('corators/{id}/edit', [CuratorController::class, 'edit']);
Route::put('corators/{id}', [CuratorController::class, 'update']);
Route::delete('corators/{id}', [CuratorController::class, 'destroy']);