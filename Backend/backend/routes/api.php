use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/test', function () {
    return ['message' => 'Hello from Laravel!'];
});
