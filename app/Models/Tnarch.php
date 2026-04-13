namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Tnarch extends Model {
    protected $table = 'tnarchs01';
    protected $primaryKey = 's_no';
    
    public function location() {
        return $this->belongsTo(Location::class, 'village_no', 'village_no');
    }
}
