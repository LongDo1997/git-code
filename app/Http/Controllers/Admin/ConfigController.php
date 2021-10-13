<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Config;
use App\Models\Scope;
use Illuminate\Http\Request;

class ConfigController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Config::paginate(9);
        $pages = Scope::data($data);
        isset(request()->page) ? (int)$currentPage = request()->page : $currentPage = 1;
        return view('admin.config.index', compact('data', 'pages', 'currentPage'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.config.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if(Config::create($request->all())){
            return redirect()->route('config.index')->with('yes', 'Thêm mới thành công!');
        }
        return redirect()->back()->with('no', 'Thêm mới thất bại!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Config  $config
     * @return \Illuminate\Http\Response
     */
    public function show(Config $config)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Config  $config
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $item = Config::find($id);
        return view('admin.config.edit', compact('item'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Config  $config
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Config $config)
    {
        if($config->update($request->all())){
            return redirect()->route('config.index')->with('yes', 'Thay đổi thông tin thành công!');
        }
        return redirect()->back()->with('no', 'Thay đổi thông tin thất bại!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Config  $config
     * @return \Illuminate\Http\Response
     */
    public function destroy(Config $config)
    {
        if($config->delete()){
            return redirect()->back()->with('yes', 'Xóa thông tin thành công!');
        }
        return redirect()->back()->with('no', 'Xóa thông tin thất bại!');
    }
}
