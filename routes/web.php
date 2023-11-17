<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\MailboxController;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\ProfilController;
use App\Http\Controllers\SkillController;
use Illuminate\Support\Facades\Route;

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

Route::get('/',[FrontController::class,"home"])->name("home");

Route::get('/portfolio',[FrontController::class,'portfolio'])->name("portfolio");

Route::get('/admin/dashboard',[FrontController::class,'admin'])->name("admin");

// back admin Profil controller

Route::get('/admin/profils',[ProfilController::class,"index"])->name("profils.index");

Route::get('/admin/profils/create',[ProfilController::class,"create"])->name("profils.create");

Route::post('/admin/profils/store',[ProfilController::class,"store"])->name("profils.store");

Route::delete('/admin/profils/{id}/destroy',[ProfilController::class,"destroy"])->name("profils.destroy");

Route::get('/admin/profils/{id}/show',[ProfilController::class,"show"])->name("profils.show");

Route::get('/admin/profils/{id}/edit',[ProfilController::class,"edit"])->name("profils.edit");

Route::put('/admin/profils/{id}/update',[ProfilController::class,"update"])->name("profils.update");


// back admin skills controller

Route::get('/admin/skills',[SkillController::class,"index"])->name("skills.index");

Route::get('/admin/skills/create',[SkillController::class,"create"])->name("skills.create");

Route::post('/admin/skills/store',[SkillController::class,"store"])->name("skills.store");

Route::delete('/admin/skills/{id}/destroy',[SkillController::class,"destroy"])->name("skills.destroy");

Route::get('/admin/skills/{id}/show',[SkillController::class,"show"])->name("skills.show");

Route::get('/admin/skills/{id}/edit',[SkillController::class,"edit"])->name("skills.edit");

Route::put('/admin/skills/{id}/update',[SkillController::class,"update"])->name("skills.update");


// back admin Portfolios


Route::get('/admin/portfolios',[PortfolioController::class,"index"])->name("portfolios.index");

Route::get('/admin/portfolios/create',[PortfolioController::class,"create"])->name("portfolios.create");

Route::post('/admin/portfolios/store',[PortfolioController::class,"store"])->name("portfolios.store");

Route::delete('/admin/portfolios/{id}/destroy',[PortfolioController::class,"destroy"])->name("portfolios.destroy");

Route::get('/admin/portfolios/{id}/show',[PortfolioController::class,"show"])->name("portfolios.show");

Route::get('/admin/portfolios/{id}/edit',[PortfolioController::class,"edit"])->name("portfolios.edit");

Route::put('/admin/portfolios/{id}/update',[PortfolioController::class,"update"])->name("portfolios.update");

// back admin contacts

Route::get('/admin/contacts',[ContactController::class,"index"])->name("contacts.index");

Route::get('/admin/contacts/create',[ContactController::class,"create"])->name("contacts.create");

Route::post('/admin/contacts/store',[ContactController::class,"store"])->name("contacts.store");

Route::delete('/admin/contacts/{id}/destroy',[ContactController::class,"destroy"])->name("contacts.destroy");

Route::get('/admin/contacts/{id}/show',[ContactController::class,"show"])->name("contacts.show");

Route::get('/admin/contacts/{id}/edit',[ContactController::class,"edit"])->name("contacts.edit");

Route::put('/admin/contacts/{id}/update',[ContactController::class,"update"])->name("contacts.update");

// mailbox

Route::resource("admin/mailbox", MailboxController::class);
