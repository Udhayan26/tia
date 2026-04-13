use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InscriptionController;

Route::get('/', [InscriptionController::class, 'index']);
Route::get('/dashboard', [InscriptionController::class, 'dashboard']);
Route::get('/locations', [InscriptionController::class, 'getLocations']);
