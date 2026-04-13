namespace App\Http\Controllers;
use App\Models\Tnarch;
use Illuminate\Support\Facades\DB;

class InscriptionController extends Controller {
    public function index() {
        return view('index'); // Points to resources/views/index.blade.php
    }

    public function dashboard() {
        $stats = [
            'total' => Tnarch::count(),
            'dynasties' => Tnarch::select('dynasty_ta', DB::raw('count(*) as total'))
                            ->groupBy('dynasty_ta')->get()
        ];
        return response()->json($stats);
    }
}
