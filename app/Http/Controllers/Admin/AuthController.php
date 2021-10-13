<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\AuthRequest;
use App\Models\Scope;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = User::paginate(9);
        $pages = Scope::data($data);
        isset(request()->page) ? (int)$currentPage = request()->page : $currentPage = 1;
        return view('admin.auth.index', compact('data', 'pages', 'currentPage'));
    }

    public function login()
    {
        return view('admin.auth.login');
    }
    public function check_login(Request $request)
    {
        $request->validate(
            [
            'email' => 'required',
            'password' => 'required',
            ],
            [
            'email.required' => 'Email không được để trống',
            'password.required' => 'Mật khẩu không được để trống',
            ]
        );        
        $check = Auth::attempt($request->only('email', 'password'), $request->has('remember'));
        if($check){
            return view('admin.index');
        }
        return redirect()->back()->with('no', 'Tài khoản hoặc mật khẩu không chính xác');
    }
    public function logout()
    {
        Auth::logout();
        return view('admin.auth.login');
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.auth.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AuthRequest $request)
    {
        if($request->agree == 'on'){
            $password = bcrypt($request->myPassword);
            $request->merge(['password' => $password]);
            if(User::create($request->all())){
                return redirect()->back()->with('yes', 'Tạo tài khoản thành công!');
            }
            return redirect()->back()->with('no', 'Tạo tài khoản thất bại!');
        }
        return redirect()->back()->with('no', 'Bạn chưa chọn đồng ý với các điều khoản!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    { 
        $user = User::find($id);
        if($user->delete()){
            return redirect()->back()->with('yes', 'Xóa thành công!');
        }
        return redirect()->back()->with('no', 'Lỗi! Mời bạn thử lại!');
    }
}
