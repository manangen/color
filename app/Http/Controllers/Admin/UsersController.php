<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\UsersStoreRequest;
use App\Models\Users;
use App\Models\Usersinfos;
use Hash;
use DB;
class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // 加载列表页面
        return view('admin.users.index');
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // 加载模板
        return view('admin.users.create');
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UsersStoreRequest $request)
    {
        
        /*
            开启事务   DB::beginTransaction();
            提交事务   DB::commit()
            回滚事务   DB::rollBack()
         */
        DB::beginTransaction();
        // 把数据 压入到 数据库
        
        $user = new Users;
        $user->uname = $request->input('uname','');
        $user->upass = Hash::make($request->input('upass',''));
        $user->email = $request->input('email','');
        $user->phone = $request->input('phone','');
        $res1 = $user->save();
        // 接收返回的uid
        $uid = $user->id;

        $userinfo = new Usersinfos;
        $userinfo->uid = $uid; //返回uid
        $userinfo->description = $request->input('description','');
        $res2 = $userinfo->save();

        if($res1 && $res2){
            DB::commit();
            return redirect('admin/users')->with('success','添加成功');
        }else{
            DB::rollBack();
            return redirect('admin/users')->with('error','添加失败');
        }
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
}
