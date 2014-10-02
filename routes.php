<?php
View::share('companyName', 'Usjr Library');
Route::get('/', ['as'=>'home', function(){
	if(Auth::check()) {
		if(Auth::user()->previlage == 0)
			return View::make('admin.index');
		else
			return View::make('users.search');
	} else {
		return View::make('users.search');
	}
	
	// User::create([
	// 	'username'=>'admin',
	// 	'password'=>Hash::make('123'),
	// 	'previlage'=>0
	// ]);

	// Book::create([
	// 	'ISBN'=>'ABC005',
	// 	'title'=>'Fucktard',
	// 	'author'=>'JC Mamits',
	// 	'description'=>'Fuck',
	// 	'category'=>'Indie',
	// 	'quantity'=>10
	// ]);
	// Book::create([
	// 	'ISBN'=>'ABC006',
	// 	'title'=>'What the fuck',
	// 	'author'=>'Kevin Tabada',
	// 	'description'=>'Tuara',
	// 	'category'=>'Action',
	// 	'quantity'=>10
	// ]);
	// return "Done";
}]);
//NORMAL
Route::get('login', ['as'=>'login', 'uses'=>'UsersController@showLogin'])->before('guest');
Route::post('login', 'UsersController@doLogin');
Route::get('logout', ['as'=>'logout', 'uses'=>'UsersController@logout'])->before('auth');
Route::get('profile', ['as'=>'profile', 'uses'=>'UsersController@profile'])->before('auth');
Route::get('register', ['as'=>'register', 'uses'=>'UsersController@create'])->before('guest');
Route::post('register', 'UsersController@store');

//ADMIN
Route::get('books', ['as'=>'books', 'uses'=>'AdminController@books']);
Route::get('books/add', ['as'=>'books/add', 'uses'=>'AdminController@addBooks']);
Route::post('books/create',['as'=>'books/create', 'uses'=>'AdminController@createBooks']);
Route::get('books/edit/{id}', ['as'=>'books/edit', 'uses'=>'AdminController@editBooks']);
Route::put('books/update', ['uses'=>'AdminController@updateBooks']);
Route::get('books/delete/{id}', ['as'=>'books/delete', 'uses'=>'AdminController@deleteBooks']);
Route::get('books/issueBooks', ['as'=>'books/issueBooks', 'uses'=>'AdminController@issueBooks']);
Route::get('books/transactions', ['as'=>'books/transactions', 'uses'=>'AdminController@transactions']);
Route::get('books/transactionDetails/{id}', ['as'=>'books/transactionDetails', 'uses'=>'AdminController@transactionDetails']);
Route::post('books/issueBooks/searchName', ['as'=>'books/issueBooks/searchName', 'uses'=>'AdminController@bookIssueSearchName']);

//BORROWER
Route::post('result-search-data', 'UsersController@resultSearchData');