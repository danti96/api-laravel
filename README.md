1. php artisan make:model Product -m
2. php artisan make:controller Api/ProductController --api
    
    php artisan make:mode Prueba --all 

3. php artisan migrate

4.  Route::controller(ProductController::class)->group(function(){

    Route::get('/products','index');
    Route::post('/product','store');
    Route::get('/product/{id}','show');
    Route::put('/product/{id}','update');
    Route::delete('/products/{id}','delete');

});