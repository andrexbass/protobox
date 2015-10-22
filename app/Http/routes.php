<?php
    Route::get('/', function()
    {
        return 'primeira logica';
    });

    Route::get('/produtos', 'ProdutoController@lista');