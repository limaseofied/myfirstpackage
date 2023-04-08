<?php

Route::get('calculator',function(){
   echo 'hello from calculator package';
});


Route::get('add/{a}/{b}',[LP\Calculator\CalculatorController::class,'add']);
Route::get('subtract/{a}/{b}',[LP\Calculator\CalculatorController::class,'subtract']);