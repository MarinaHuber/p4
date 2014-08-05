<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

//display the sign up form
Route::get('/signup',
    array(
        'before' => 'guest',
        function() {
            return View::make('signup');
        }
    )
);

Route::post( '/signup', array( 'before' => 'csrf', function(){
    $user = new User;
    $user->email = Input::get('email');
    $user->password = Hash::make(Input::get('password'));
    $user->username = Input::get('username');

    try {
        $user->save();
    }
    catch ( Exception $e ) {
        return Redirect::to('/signup')
                            ->with('flash_message',"Sounds I did not got all of that. would you mind repeating yourself?")
                            ->withInput();
    }

    Auth::login($user);
    return Redirect::to('/home')->with('flash', 'Welcome to GoodSounds! sorry about all the mess');
}));


# Home page
Route::get('/', array('before' => 'guest', function() {

    require(app_path() . '/views/Soundcloud.php');
    $sc = new Services_Soundcloud('23e299b5e8ba4224cdd81b13119acfa2', '57c1f8ac7834af14e64d236dcc6576b8', 'https://soundcloud.com/selina-huber-1');
    $authorizeUrl = $sc->getAuthorizeUrl();
    // echo 'click <a href="'.$authorizeUrl.'" >Here</a>';

     return View::make('index')->with(array('auth_url'=>$authorizeUrl,'track1'=>"track name"));

}));

Route::get('/home', function() {
    return View::make('home');
});

/*
|--------------------------------------------------------------------------
| Tokin Routes
|--------------------------------------------------------------------------


 Route::get('/login', function() {

    require('../app/views/Soundcloud.php');
    $sc = new Services_Soundcloud('23e299b5e8ba4224cdd81b13119acfa2', '57c1f8ac7834af14e64d236dcc6576b8', 'https://soundcloud.com/selina-huber-1');
    try {
      $accessToken = $sc->accessToken($_GET['code']);
    } catch (Services_Soundcloud_Invalid_Http_Response_Code_Exception $e) {
      exit($e->getMessage());
    }
});
*/


# Auth Soundcloud
/*
Route::get('soundcloud', array('before' => 'auth', function()
{
    return View::make('soundcloud');

}));


Route::get('/soundcloud', function() {

    return __construct::('23e299b5e8ba4224cdd81b13119acfa2', '57c1f8ac7834af14e64d236dcc6576b8')


});


*/



/* Route::get('users', function()
   
{
     $user = User::find(1)

     return $user->email;

});



/*
|--------------------------------------------------------------------------
| Debug Routes
|--------------------------------------------------------------------------
*/

# /app/routes.php
Route::get('/debug', function() {

    echo '<pre>';

    echo '<h1>environment.php</h1>';
    $path   = base_path().'/environment.php';

    try {
        $contents = 'Contents: '.File::getRequire($path);
        $exists = 'Yes';
    }
    catch (Exception $e) {
        $exists = 'No. Defaulting to `production`';
        $contents = '';
    }

    echo "Checking for: ".$path.'<br>';
    echo 'Exists: '.$exists.'<br>';
    echo $contents;
    echo '<br>';

    echo '<h1>Environment</h1>';
    echo App::environment().'</h1>';

    echo '<h1>Debugging?</h1>';
    if(Config::get('app.debug')) echo "Yes"; else echo "No";

    echo '<h1>Database Config</h1>';
    print_r(Config::get('database.connections.mysql'));

    echo '<h1>Test Database Connection</h1>';
    try {
        $results = DB::select('SHOW DATABASES;');
        echo '<strong style="background-color:green; padding:5px;">Connection confirmed</strong>';
        echo "<br><br>Your Databases:<br><br>";
        print_r($results);
    } 
    catch (Exception $e) {
        echo '<strong style="background-color:crimson; padding:5px;">Caught exception: ', $e->getMessage(), "</strong>\n";
    }

    echo '</pre>';

});
