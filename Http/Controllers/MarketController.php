<?php

namespace Modules\Market\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Config;
use Modules\Admin\Http\Controllers\AdminController;

class MarketController extends \App\Http\Controllers\Controller
{
    use StaticTrait, ViewTrait;
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
        return view('market::index');
    }

    /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    public function create()
    {
        return view('market::create');
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Renderable
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function show($id)
    {
        return view('market::show');
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function edit($id)
    {
        return view('market::edit');
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Renderable
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Renderable
     */
    public function destroy($id)
    {
        //
    }
}
trait StaticTrait
{
    public static function admin_view($view = null, $data = [], $mergeData = [])
    {
        return AdminController::view($view, $data, $mergeData);
    }
}
trait ViewTrait
{
    function view_index(Request $request)
    {
        return self::admin_view('market::index');
    }
    function view_admin_modules(Request $request)
    {
        return self::admin_view('market::admin.modules');
    }
    function view_admin_modules_intro(Request $request, $module)
    {
        return self::admin_view('market::module.intro', ['module' => $module]);
    }
    function view_admin_modules_install(Request $request, $module)
    {
        return self::admin_view('market::module.install', ['module' => $module]);
    }
}

trait InstallProgressTrait
{
    function install_progress(Request $request)
    {
    }
    function install_progress_of_intro(Request $request)
    {
    }
    function install_progress_of_config(Request $request)
    {
    }
    function install_progress_of_table(Request $request)
    {
    }
    function install_progress_of_data(Request $request)
    {
    }
    function install_progress_of_result(Request $request)
    {
    }
}