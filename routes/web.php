use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InscriptionController;

// The Main Shell
Route::get('/', [InscriptionController::class, 'index'])->name('home');

// Modular AJAX Routes (The 6 Divs)
Route::prefix('api')->group(function () {
    Route::get('/dashboard', [InscriptionController::class, 'getDashboard']);
    Route::get('/locations', [InscriptionController::class, 'getLocations']);
    Route::get('/search', [InscriptionController::class, 'getSearch']);
    Route::get('/books', [InscriptionController::class, 'getBooks']);
    Route::get('/publications', [InscriptionController::class, 'getPublications']);
    Route::get('/map', [InscriptionController::class, 'getMap']);
});
