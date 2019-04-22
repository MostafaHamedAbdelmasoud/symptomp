<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::group( ['middleware' => 'auth' ], function()
{
   
    
    Route::get('/diagnosisanalysis','SymptomController@index');
    Route::get('/diagnosis/{diagnosisanalysis}','SymptomController@showDiagnosis');
    Route::get('/diagnosisdescription/{diagnosisanalysisName}','SymptomController@showDiagnosisDescription');
    
   
    Route::get('/diagnosisdescription2/{diagnosisanalysisNameEyes}','SymptomController@showDiagnosisDescriptionEyes');
    Route::get('/diagnosisdescription3/{diagnosisanalysisNameNose}','SymptomController@showDiagnosisDescriptionNose');
    Route::get('/diagnosisdescription4/{diagnosisanalysisNameChest}','SymptomController@showDiagnosisDescriptionChest');
    Route::get('/diagnosisdescription5/{diagnosisanalysisNameElbow}','SymptomController@showDiagnosisDescriptionElbow');
    Route::get('/diagnosisdescription6/{diagnosisanalysisNameLegs}','SymptomController@showDiagnosisDescriptionLegs');
    
    Route::get('/legs1','LegController@index');
    Route::get('/legs11','LegController@index2');
    Route::get('/legs111','LegController@index3');
    Route::get('/legs12','LegController@index4');
    Route::get('/legs121','LegController@index5');
    Route::get('/legs122','LegController@index6');
    Route::get('/legs2','LegController@index7');
    Route::get('/legs3','LegController@index8');
    Route::get('/legs31','LegController@index9');
    Route::get('/legs32','LegController@index10');
    Route::get('/legs321','LegController@index11');





    Route::get('/heads1','HeadController@index');
    Route::get('/heads11','HeadController@index2');


    







    Route::get('/hands1','HandController@index');
    Route::get('/hands11','HandController@index2');
    Route::get('/hands2','HandController@index3');
    Route::get('/hands21','HandController@index4');
    Route::get('/hands22','HandController@index5');
    Route::get('/hands3','HandController@index6');
    Route::get('/hands4','HandController@index7');
    Route::get('/hands41','HandController@index14');
    Route::get('/hands42','HandController@index15');
    Route::get('/hands411','HandController@index8');
    Route::get('/hands4111','HandController@index9');
    Route::get('/hands41111','HandController@index10');
    Route::get('/hands41112','HandController@index11');
    Route::get('/hands4121','HandController@index12');
    Route::get('/hands412','HandController@index13');
    Route::get('/hands5','HandController@index16');
    Route::get('/hands51','HandController@index17');
    Route::get('/hands52','HandController@index18');
    Route::get('/hands521','HandController@index19');
    Route::get('/hands5211','HandController@index20');
    Route::get('/hands5212','HandController@index21');
    Route::get('/hands522','HandController@index22');















    Route::get('/nose1','NoseController@index');
    Route::get('/nose2','NoseController@index2');
    Route::get('/nose3','NoseController@index3');
    Route::get('/nose11','NoseController@index4');
    Route::get('/nose12','NoseController@index5');
    Route::get('/nose21','NoseController@index6');
    Route::get('/nose22','NoseController@index7');
    Route::get('/nose31','NoseController@index8');
    Route::get('/nose32','NoseController@index9');
    Route::get('/nose111','NoseController@index10');
    Route::get('/nose121','NoseController@index11');
    Route::get('/nose211','NoseController@index12');
    Route::get('/nose221','NoseController@index13');
    Route::get('/nose321','NoseController@index14');
    Route::get('/nose2111','NoseController@index15');
    Route::get('/nose2211','NoseController@index16');













    Route::get('/chest1','ChestController@index');
    Route::get('/chest2','ChestController@index2');
    Route::get('/chest3','ChestController@index3');
    Route::get('/chest11','ChestController@index4');
    Route::get('/chest12','ChestController@index5');
    Route::get('/chest21','ChestController@index6');
    Route::get('/chest22','ChestController@index7');
    Route::get('/chest31','ChestController@index8');
    Route::get('/chest32','ChestController@index9');
    Route::get('/chest121','ChestController@index10');
    Route::get('/chest211','ChestController@index11');
    Route::get('/chest221','ChestController@index12');
    Route::get('/chest321','ChestController@index13');
    Route::get('/chest1211','ChestController@index14');
    Route::get('/chest3211','ChestController@index15');
    Route::get('/chest32111','ChestController@index16');






    Route::get('/eye1','EyeController@index');
    Route::get('/eye2','EyeController@index2');
    Route::get('/eye11','EyeController@index3');
    Route::get('/eye21','EyeController@index4');
    Route::get('/eye22','EyeController@index5');
    Route::get('/eye111','EyeController@index6');
    Route::get('/eye221','EyeController@index7');







    Route::get('/b1','AbdonController@index');
    Route::get('/b2','AbdonController@index2');
    Route::get('/b11','AbdonController@index3');
    Route::get('/b12','AbdonController@index4');
    Route::get('/b21','AbdonController@index5');
    Route::get('/b22','AbdonController@index6');
    Route::get('/b121','AbdonController@index7');
    Route::get('/b122','AbdonController@index8');
    Route::get('/b211','AbdonController@index9');
    Route::get('/b212','AbdonController@index10');
    Route::get('/b221','AbdonController@index11');
    Route::get('/b222','AbdonController@index12');



































    Route::get('/home', 'HomeController@index')->name('home');
    Route::get('/profile', 'HomeController@profile')->name('profile');


      
Route::get('/headAndNeck', function () {
    return view('layouts.headAndNeck');
});

});





Route::get('/posts','PostController@index');
Route::get('/post','PostController@index');

Route::get('/post/show/{id}','PostController@show');
Route::get('/post/show/*','PostController@showIndex');

Route::get('/post/edit/{id}','PostController@edit');
Route::get('/post/create','PostController@create');
Route::post('/post/storePost','PostController@store');
Route::post('/post/update/{id}','PostController@update');
Route::get('/post/destroy/{id}','PostController@destroy');
Route::get('/search','PostController@search');

Route::get('/',function(){

    return view('welcome');
});
Route::get('/welcome',function(){

    return view('welcome');
});

Route::get('/','SymptomController@index2');
Route::get('/welcome','SymptomController@index2')->name('welcome');

Route::get('/contact','ContactController@showForm')->name('layouts.show');
Route::post('/contact','ContactController@sendEmail')->name('layouts.send');






    Auth::routes();



  















/*
Route::get('/diagnosisanalysis', function () {
    return view('layouts.diagnosisanalysis');
});
*/
