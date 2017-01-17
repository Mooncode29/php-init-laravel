<?php

use App\Twoot;

Route::get('/', function () {
    // Récupérer tous les "twoots" et les ajouter à la vue
    return view('app')->with([
        'twoots' => Twoot::all() //Twoot::___()
    ]);
});

//Ici, décommenter et créer la route '/about'
Route::get('/about', function(){
   return '/about'; //Renvoyer la vue 'about' !
});

Route::post('twoots', function(){
//    Twoot::______([
//        'text' => request()->____
//    ]);
//
//    return redirect()->to('_');
});

Route::delete('twoots/{id}', function($id){
//    Trouver le twoot, puis le supprimer
//    Twoot::____($id)->______();

    return redirect()->to('/');
});
