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
    public function index(Request $request)
    {
        $count = $request->input('count','5');
        $search = $request->input('search','');
        $users = Users::where('uname','like','%'.$search.'%')->paginate($count);
        // dump($users);
        // 加载列表页面
        return view('admin.users.index',['users'=>$users,'request'=>$request->all()]);
        
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
        $user =  Users::find($id);
        //显示数据
        return view('admin/users/edit',['user'=>$user]);
        
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
        // dump($request->abs(number)ll());
        /*
            开启事务   DB::beginTransaction();
            提交事务   DB::commit()
            回滚事务   DB::rollBack()
         */
         DB::beginTransaction();
        //直接连接数据库
        $user = Users::find($id);
        $user->email = $request->input('email','');
        $user->phone = $request->input('phone','');
        $res1 = $user->save();
        $userinfo = usersinfos::where('uid',$id)->first();
        $userinfo->description = $request->input('description','');
        $res2 = $userinfo->save();
        if($res1 && $res2){
            DB::commit();
            return redirect('admin/users')->with('success','修改成功');
        }else{
             DB::rollBack();
            return back()->with('error','修改失败');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::beginTransaction();
        $res1 = Users::destroy($id);
        $res2 = Usersinfos::where('uid',$id)->delete();
        if($res1 && $res2){
            DB::commit();
            return redirect('admin/users')->with('success','删除成功');
        }else{
             DB::rollBack();
            return back()->with('error','删除失败');
        }
    }
}
