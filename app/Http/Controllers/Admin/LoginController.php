<?php

namespace App\Http\Controllers\Admin;
use App\Http\Requests\AdminloginStoreRequest;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Models\Users;
use Hash;
class LoginController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
      
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    // 登陆页面
    public function admin_login()
    {
        //
        return view('admin.login');
    }
    // 登陆验证
    public function dologin(AdminloginStoreRequest $request)
    {
    	$name = $request->input('uname','');
    	$pass = $request->input('upass','');
    	$user = Users::where('uname',$name)->first();
    	if(!$user){
    		return back()->with('error','用户名不存在');
    	}
    	$password = $user->upass;
    	if(!Hash::check($pass,$password)){
    		$request->flash();
    		return back()->with('error','密码错误');
    	}
    	session(['users' => $user->users,'upass' => $user->upass]);
    	return redirect('/admin');
	}
	// 退出登陆
	public function login_out(Request $request)
    {
        //
        if(!$request->session()->forget('users')) {
        	return redirect('/admin_login');
        }else{

        }
    }
}
