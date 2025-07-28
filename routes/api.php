<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\BranchControllerApi;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


Route::prefix('branch')->group(function () {
    Route::get('/', [BranchControllerApi::class, 'index']);
    Route::post('/', [BranchControllerApi::class, 'store']);
    Route::get('/{id}', [BranchControllerApi::class, 'show']);
    Route::put('/{id}', [BranchControllerApi::class, 'update']);
    Route::delete('/{id}', [BranchControllerApi::class, 'destroy']);
}); 