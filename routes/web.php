<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\WorkUsController;
use App\Http\Controllers\Admin\NewsController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\BannerController;
use App\Http\Controllers\Admin\BudgetController;
use App\Http\Controllers\Admin\ManualController;
use App\Http\Controllers\Admin\ProductController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Auth::routes();

Route::get('fileup',   function ()
{
    return view('admin.upload');
});
Route::get('/admin/list-clients', function() {
    return view('admin.clients.list');
});

Route::get('/admin/edit-clients', function() {
    return view('admin.clients.edit');
});

Route::as('site.')->group(function () {
    Route::get('/' , \App\Http\Livewire\Site\Home::class)->name('index');
    Route::get('/event' , \App\Http\Livewire\Site\Event::class)->name('event');
    Route::get('/events' , \App\Http\Livewire\Site\Events::class)->name('events');
    Route::get('/product' , \App\Http\Livewire\Site\Product::class)->name('product');
    Route::get('/products' , \App\Http\Livewire\Site\Products::class)->name('products');
    Route::get('/budget/{id}' , \App\Http\Livewire\Site\Budget::class)->name('budget');
    Route::get('/catalog' , \App\Http\Livewire\Site\Catalog::class)->name('catalog');
    Route::get('/catalogs' , \App\Http\Livewire\Site\Catalogs::class)->name('catalogs');
    Route::get('/work-with-us' , \App\Http\Livewire\Site\WorkWithUs::class)->name('work-with-us');
    Route::get('/budget-form' , \App\Http\Livewire\Site\BudgetForm::class)->name('budget-form');
    Route::get('/budget' , \App\Http\Livewire\Site\Budget::class)->name('budget');
    Route::get('/categories' , \App\Http\Livewire\Site\Categories::class)->name('categories');
    Route::get('/catalog-form' , \App\Http\Livewire\Site\CatalogForm::class)->name('catalog-form');
    Route::any('/catalog-login' , \App\Http\Livewire\Site\CatalogLogin::class)->name('catalog-login');
});

Route::as('user.')->middleware('auth')->group(function () {
    Route::get('/user', \App\Http\Livewire\Site\Home::class)->name('index');
});

Route::as('admin.')->middleware(['is_admin', 'auth'])->group(function () {
    Route::get('/admin', [\App\Http\Controllers\Admin\HomeController::class, 'index'])->name('index');
    Route::get('/admin/work-us/', [WorkUsController::class, 'index'])->name('workus');
    Route::get('/admin/roles', [RoleController::class, 'index']);
    Route::get('/admin/create-roles', [RoleController::class, 'store']);

    Route::get('/admin/list-budgets', [BudgetController::class, 'index'])->name('list.budgets');
    Route::get('/admin/budget/{id}', [BudgetController::class, 'show'])->name('budget');
    Route::post('/admin/budget-change-status', [BudgetController::class, 'change_status'])->name('change.status.budget');

    Route::resource('/admin/events', NewsController::class);

    Route::get('/admin/list-categories', [CategoryController::class, 'index'])->name('list.categories');
    Route::get('/admin/create-category', [CategoryController::class, 'create'])->name('new.category');
    Route::post('/admin/create-category', [CategoryController::class, 'save'])->name('create.category');
    Route::get('/admin/edit-category/{id}', [CategoryController::class, 'edit'])->name('edit.category');
    Route::get('/admin/delete-category/{id}', [CategoryController::class, 'delete'])->name('delete.category');
    Route::post('/admin/edit-status-category', [CategoryController::class, 'editStatus'])->name('edit.status.category');

    Route::get('/admin/list-banners', [BannerController::class, 'index'])->name('banners');
    Route::get('/admin/list-template-banners', [BannerController::class, 'list_templates'])->name('tempaltes.banners');
    Route::get('/admin/create-banner/{model}', [BannerController::class, 'create'])->name('new.banner');
    Route::get('/admin/edit-banner/{model}/{banner}', [BannerController::class, 'edit'])->name('edit.banner');
    Route::post('/admin/create-banner', [BannerController::class, 'save'])->name('create.banner');
    Route::get('/admin/delete-banner/{id}', [BannerController::class, 'delete'])->name('delete.banner');
    
    Route::get('/admin/list-manuals', [ManualController::class, 'index'])->name('manuals');
    Route::get('/admin/create-manuals', [ManualController::class, 'create'])->name('new.manuals');
    Route::post('/admin/create-manuals', [ManualController::class, 'save'])->name('create.manuals');
    Route::get('/admin/donwload-manuals/{name}', [ManualController::class, 'download'])->name('download.manuals');
    Route::get('/admin/edit-manuals/{id}', [ManualController::class, 'edit'])->name('edit.manuals');
    Route::get('/admin/delete-manuals/{id}', [ManualController::class, 'destroy'])->name('delete.manuals');

    Route::resource('/admin/products', ProductController::class);

});
