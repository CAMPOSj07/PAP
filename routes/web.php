<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\TreinadorDashboardController;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ConvocatoriaController;
use App\Http\Controllers\ConvocacaoController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('Welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile/edit', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile/update', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);

Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [RegisterController::class, 'register']);

// Rotas para o dashboard de treinadores
Route::get('/treinador/dashboard/{escalao}', [TreinadorDashboardController::class, 'index'])
    ->middleware('auth') // Apenas treinadores autenticados podem acessar
    ->name('treinador.dashboard');

Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
// Remova esta rota redundante, pois você já tem a rota acima para o logout
// Route::post('/logout', [WelcomeController::class, 'logout'])->name('logout');

Route::get('/', [WelcomeController::class, 'index'])->name('welcome.index');

Route::get('/convocatoria', [ConvocatoriaController::class, 'index'])->name('convocatoria');
Route::get('/dashboard/convocatoria', [DashboardController::class, 'convocatoria'])->name('dashboard.convocatoria');

Route::get('/menujogo', [DashboardController::class, 'menujogo'])->name('menujogo');

Route::get('/convocacao', 'ConvocatoriaController@index')->name('convocacao');

require __DIR__.'/auth.php';
