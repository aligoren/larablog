<?php


// Blog pages

/*
get('admin', function () {
    return redirect('/admin/post');
});
*/

get('/', 'BlogController@index');
get('iletisim', 'ContactController@showForm');
get('hakkimda', 'HakkimdaController@showAbout');
get('rss', 'BlogController@rss');
get('sitemap.xml', 'BlogController@siteMap');
get('{slug}', 'BlogController@showPost');

// Admin area

$router->group([
    'namespace' => 'Admin',
    'middleware' => 'auth',
], function () {
    resource('admin/post', 'PostController', ['except' => 'show']);
    resource('admin/tag', 'TagController', ['except' => 'show']);
    get('admin/upload', 'UploadController@index');
    post('admin/upload/file', 'UploadController@uploadFile');
    delete('admin/upload/file', 'UploadController@deleteFile');
    post('admin/upload/folder', 'UploadController@createFolder');
    delete('admin/upload/folder', 'UploadController@deleteFolder');
});

// Logging in and out
get('/hesap/gir', 'Auth\AuthController@getLogin');
post('/hesap/gir', 'Auth\AuthController@postLogin');
get('/hesap/cikis', 'Auth\AuthController@getLogout');
