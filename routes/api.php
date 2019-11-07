<?php



Route::post('login', 'API\ApiAuthController@login');
Route::get('pasien/{norm}', 'API\ApiMainController@getPasien');
Route::middleware('auth:api')->group(function() {

});

Route::get('/tes/{norm}', function($norm) {
    $data = App\Registrasi::where('norm', $norm)->with('cara_bayar')->first();
    return $data;
});
