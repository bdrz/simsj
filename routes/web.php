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

Route::group(['middleware' => ['get.menu']], function () {
    Route::group(['middleware' => ['auth']], function () {
        Route::get('/', 'DashboardControler@index')->name('dashboard.index');
        Route::prefix('user')->group(function () {
           /*  Route::get('/', function(){         return view('dashboard.user.index'); }); */
            Route::get('/tambah', 'MemberControler@tambah')->name('user.tambah');
            Route::get('/profile/{id}', 'MemberControler@profile')->name('user.profile.id');
            Route::get('/edit/{id}', 'MemberControler@edit')->name('user.edit.id');
            Route::post('/delete', 'MemberControler@delete')->name('user.delete');
            Route::post('/edit', 'MemberControler@edit_proses')->name('user.edit');
            Route::post('/add', 'MemberControler@add')->name('user.add');
            Route::get('/list', 'MemberControler@list')->name('user.list');
        });
        Route::prefix('leader')->group(function () {
            Route::get('/tambah', 'LeaderControler@tambah')->name('leader.tambah');
            Route::get('/profile/{id}', 'LeaderControler@profile')->name('leader.profile.id');
            Route::get('/edit/{id}', 'LeaderControler@edit')->name('leader.edit.id');
            Route::post('/delete', 'LeaderControler@delete')->name('leader.delete');
            Route::post('/edit', 'LeaderControler@edit_proses')->name('leader.edit');
            Route::post('/add', 'LeaderControler@add')->name('leader.add');
            Route::get('/list', 'LeaderControler@list')->name('leader.list');
        });
        Route::prefix('marketing')->group(function () {
            Route::get('/tambah', 'MarketingController@tambah')->name('marketing.tambah');
            Route::get('/profile/{id}', 'MarketingController@profile')->name('marketing.profile.id');
            Route::get('/edit/{id}', 'MarketingController@edit')->name('marketing.edit.id');
            Route::post('/delete', 'MarketingController@delete')->name('marketing.delete');
            Route::post('/edit', 'MarketingController@edit_proses')->name('marketing.edit');
            Route::post('/add', 'MarketingController@add')->name('marketing.add');
            Route::get('/list', 'MarketingController@list')->name('marketing.list');
        });
        Route::prefix('lokasi')->group(function () {
            Route::get('/', 'LokasiController@index')->name('lokasi.index');
            Route::post('/add', 'LokasiController@add')->name('lokasi.add');
            Route::post('/edit', 'LokasiController@edit')->name('lokasi.edit');
            Route::post('/delete', 'LokasiController@delete')->name('lokasi.delete'); 
        });
        Route::prefix('unit')->group(function () {
            Route::get('/', 'UnitController@index')->name('unit.index');
            Route::post('/add', 'UnitController@add')->name('unit.add');
            Route::post('/edit', 'UnitController@edit')->name('unit.edit');
            Route::post('/delete', 'UnitController@delete')->name('unit.delete');
        });
        Route::prefix('penjualan')->group(function () {
            Route::get('/tambah', 'PenjualanController@tambah')->name('penjualan.tambah');
            Route::get('/getunit', 'PenjualanController@getunit')->name('penjualan.getunit');
            Route::get('/getmember', 'PenjualanController@getmember')->name('penjualan.getmember');
            Route::post('/proses', 'PenjualanController@proses')->name('penjualan.proses');
        });
        Route::prefix('log')->group(function () {
            Route::get('/', 'LogController@index')->name('log.index');
        });
        Route::prefix('staff')->group(function () {
            Route::get('/', 'StaffController@index')->name('staff.index');
            Route::post('/add', 'StaffController@add')->name('staff.add');
            Route::post('/delete', 'StaffController@delete')->name('staff.delete');
        });
        Route::prefix('logout')->group(function () {
            Route::get('/', 'StaffController@index')->name('staff.index');
        });


        Route::get('/colors', function () {     return view('dashboard.colors'); });
        Route::get('/typography', function () { return view('dashboard.typography'); });
        Route::get('/charts', function () {     return view('dashboard.charts'); });
        Route::get('/widgets', function () {    return view('dashboard.widgets'); });
        Route::get('/404', function () {        return view('dashboard.404'); });
        Route::get('/500', function () {        return view('dashboard.500'); });
        Route::prefix('base')->group(function () {  
            Route::get('/breadcrumb', function(){   return view('dashboard.base.breadcrumb'); });
            Route::get('/cards', function(){        return view('dashboard.base.cards'); });
            Route::get('/carousel', function(){     return view('dashboard.base.carousel'); });
            Route::get('/collapse', function(){     return view('dashboard.base.collapse'); });

            Route::get('/forms', function(){        return view('dashboard.base.forms'); });
            Route::get('/jumbotron', function(){    return view('dashboard.base.jumbotron'); });
            Route::get('/list-group', function(){   return view('dashboard.base.list-group'); });
            Route::get('/navs', function(){         return view('dashboard.base.navs'); });

            Route::get('/pagination', function(){   return view('dashboard.base.pagination'); });
            Route::get('/popovers', function(){     return view('dashboard.base.popovers'); });
            Route::get('/progress', function(){     return view('dashboard.base.progress'); });
            Route::get('/scrollspy', function(){    return view('dashboard.base.scrollspy'); });

            Route::get('/switches', function(){     return view('dashboard.base.switches'); });
            Route::get('/tables', function () {     return view('dashboard.base.tables'); });
            Route::get('/tabs', function () {       return view('dashboard.base.tabs'); });
            Route::get('/tooltips', function () {   return view('dashboard.base.tooltips'); });
        });
        Route::prefix('buttons')->group(function () {  
            Route::get('/buttons', function(){          return view('dashboard.buttons.buttons'); });
            Route::get('/button-group', function(){     return view('dashboard.buttons.button-group'); });
            Route::get('/dropdowns', function(){        return view('dashboard.buttons.dropdowns'); });
            Route::get('/brand-buttons', function(){    return view('dashboard.buttons.brand-buttons'); });
        });
        Route::prefix('icon')->group(function () {  // word: "icons" - not working as part of adress
            Route::get('/coreui-icons', function(){         return view('dashboard.icons.coreui-icons'); });
            Route::get('/flags', function(){                return view('dashboard.icons.flags'); });
            Route::get('/brands', function(){               return view('dashboard.icons.brands'); });
        });
        Route::prefix('notifications')->group(function () {  
            Route::get('/alerts', function(){   return view('dashboard.notifications.alerts'); });
            Route::get('/badge', function(){    return view('dashboard.notifications.badge'); });
            Route::get('/modals', function(){   return view('dashboard.notifications.modals'); });
        });
        Route::resource('notes', 'NotesController');
    });
    Auth::routes();

    Route::resource('resource/{table}/resource', 'ResourceController')->names([
        'index'     => 'resource.index',
        'create'    => 'resource.create',
        'store'     => 'resource.store',
        'show'      => 'resource.show',
        'edit'      => 'resource.edit',
        'update'    => 'resource.update',
        'destroy'   => 'resource.destroy'
    ]);

    Route::group(['middleware' => ['role:admin']], function () {
        Route::resource('bread',  'BreadController');   //create BREAD (resource)
        Route::resource('users',        'UsersController')->except( ['create', 'store'] );
        Route::resource('roles',        'RolesController');
        Route::resource('mail',        'MailController');
        Route::get('prepareSend/{id}',        'MailController@prepareSend')->name('prepareSend');
        Route::post('mailSend/{id}',        'MailController@send')->name('mailSend');
        Route::get('/roles/move/move-up',      'RolesController@moveUp')->name('roles.up');
        Route::get('/roles/move/move-down',    'RolesController@moveDown')->name('roles.down');
        Route::prefix('menu/element')->group(function () { 
            Route::get('/',             'MenuElementController@index')->name('menu.index');
            Route::get('/move-up',      'MenuElementController@moveUp')->name('menu.up');
            Route::get('/move-down',    'MenuElementController@moveDown')->name('menu.down');
            Route::get('/create',       'MenuElementController@create')->name('menu.create');
            Route::post('/store',       'MenuElementController@store')->name('menu.store');
            Route::get('/get-parents',  'MenuElementController@getParents');
            Route::get('/edit',         'MenuElementController@edit')->name('menu.edit');
            Route::post('/update',      'MenuElementController@update')->name('menu.update');
            Route::get('/show',         'MenuElementController@show')->name('menu.show');
            Route::get('/delete',       'MenuElementController@delete')->name('menu.delete');
        });
        Route::prefix('menu/menu')->group(function () { 
            Route::get('/',         'MenuController@index')->name('menu.menu.index');
            Route::get('/create',   'MenuController@create')->name('menu.menu.create');
            Route::post('/store',   'MenuController@store')->name('menu.menu.store');
            Route::get('/edit',     'MenuController@edit')->name('menu.menu.edit');
            Route::post('/update',  'MenuController@update')->name('menu.menu.update');
            Route::get('/delete',   'MenuController@delete')->name('menu.menu.delete');
        });
        Route::prefix('media')->group(function () {
            Route::get('/',                 'MediaController@index')->name('media.folder.index');
            Route::get('/folder/store',     'MediaController@folderAdd')->name('media.folder.add');
            Route::post('/folder/update',   'MediaController@folderUpdate')->name('media.folder.update');
            Route::get('/folder',           'MediaController@folder')->name('media.folder');
            Route::post('/folder/move',     'MediaController@folderMove')->name('media.folder.move');
            Route::post('/folder/delete',   'MediaController@folderDelete')->name('media.folder.delete');;

            Route::post('/file/store',      'MediaController@fileAdd')->name('media.file.add');
            Route::get('/file',             'MediaController@file');
            Route::post('/file/delete',     'MediaController@fileDelete')->name('media.file.delete');
            Route::post('/file/update',     'MediaController@fileUpdate')->name('media.file.update');
            Route::post('/file/move',       'MediaController@fileMove')->name('media.file.move');
            Route::post('/file/cropp',      'MediaController@cropp');
            Route::get('/file/copy',        'MediaController@fileCopy')->name('media.file.copy');
        });
    });
});
