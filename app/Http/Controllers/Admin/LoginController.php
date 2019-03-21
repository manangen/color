<?php

namespace App\Http\Controllers\Admin;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Crypt;
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

    public function admin_login()
    {
        //
        return view('admin.login');
    }

    public function dologin(Request $request)
    {
        // dump($request->all());
        // 接收登陆信息
        $name = $request->uname;
        $password = $request->upass;
        $list = Users::where('uname','like',$name)->get();
        if(count($list)) {
            foreach($list as $key => $value){
                $id = ($value->id);
                $pass = ($value->upass);
                $status = ($value->status);
            }
            $arr = [
                'id'=>$id,
                'uname'=>$name,
                'status'=>$status,
            ];
            // 判断密码
            if (Hash::check($password,$pass)) {
                if($arr['status'] == 1)  {
                    // 密码错误
                    return '<script>alert("当前用户已禁用");location.href="/admin/login"</script>';
                }
                // 密码正确
                session(['users' => $arr]);
                // 用户名和密码正确
                return redirect('/admin/index');
            }else{
                // 密码不正确
                return '<script>alert("密码错误");location.href="/admin_login/"</script>';
            }
        }else{
            // 用户不存在
            return '<script>alert("当前用户不存在");location.href="/admin_login/"<script>';
        }
    }
}
