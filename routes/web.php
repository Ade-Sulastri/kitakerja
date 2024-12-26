    <?php

    use Illuminate\Support\Facades\Route;
    use App\Models\categories;
    use App\Http\Controllers\HomeController;

    Route::get('/', [HomeController::class, 'index']);

    Route::get('/test-category' , function(){
        return categories::all();
    });
