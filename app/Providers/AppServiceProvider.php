namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\URL;

class AppServiceProvider extends ServiceProvider
{
    public function boot(): void
    {
        // Force the root URL to your new domain
        URL::forceRootUrl(config('app.url'));
    }
}
