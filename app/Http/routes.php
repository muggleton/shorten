<?php
// Use the base encoding class
use Shorty\Library\Base;
use Shorty\Link;


Route::get('/', function () {
	return view('index');
});

Route::group(['prefix' => 'api'], function () {
	Route::resource('links', 'LinksController');
});


// For directing shortened urls
// feeling quite dirty putting it here
// but does it need it's own controller?
Route::get('/{short}', function($short)
{
	$id = Base::decode($short);
	$link = Link::findOrFail($id);

	if($link)
	{
		return Redirect::to($link->long);
	}
});

/**

          _ _,---._ 
       ,-','       `-.___ 
      /-;'               `._ 
     /\/          ._   _,'o \ 
    ( /\       _,--'\,','"`. ) 
     |\      ,'o     \'    //\ 
     |      \        /   ,--'""`-. 
     :       \_    _/ ,-'         `-._ 
      \        `--'  /                ) 
       `.  \`._    ,'     ________,',' 
         .--`     ,'  ,--` __\___,;' 
          \`.,-- ,' ,`_)--'  /`.,' 
           \( ;  | | )      (`-/ 
             `--'| |)       |-/ 
               | | |        | | 
               | | |,.,-.   | |_ 
               | `./ /   )---`  ) 
              _|  /    ,',   ,-' 
     -hrr-   ,'|_(    /-<._,' |--, 
             |    `--'---.     \/ \ 
             |          / \    /\  \ 
           ,-^---._     |  \  /  \  \ 
        ,-'        \----'   \/    \--`. 
       /            \              \   \ 

**/