<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class InscriptionController extends Controller {
    public function index() {
        return view('index');
    }

    public function getDashboard() {
        $stats = [
            'total_inscriptions' => DB::table('tnarchs01')->count(),
            'total_villages' => DB::table('locations')->distinct('village_ta')->count()
        ];
        return response()->json($stats);
    }
}
