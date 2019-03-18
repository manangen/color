<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\SlidStoreRequest;
use App\Models\Slid;
use DB;


class SlidController extends Controller
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
        $slid = Slid::where('sname','like','%'.$search.'%')->paginate($count);
        // dump($users);
        // 加载列表页面
        return view('admin.slid.index',['slid'=>$slid,'request'=>$request->all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // 加载模板
        return view('admin.slid.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         /*
            开启事务   DB::beginTransaction();
            提交事务   DB::commit()
            回滚事务   DB::rollBack()
         */
        DB::beginTransaction();
        // 把数据 压入到 数据库
        
        $slid = new Slid;
        $slid->sname = $request->input('sname','');
        $slid->surl = $request->input('surl','');
        $slid->description=$request->input('description','');
        $res = $slid->save();
     

        if($res){
            DB::commit();
            return redirect('admin/slid')->with('success','添加成功');
        }else{
            DB::rollBack();
            return redirect('admin/slid')->with('error','添加失败');
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
        $slid =  Slid::find($id);
        //显示数据
        return view('admin/slid/edit',['slid'=>$slid]);
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
        //   DB::beginTransaction();
        //直接连接数据库
        $slid = Slid::find($id);
        $slid->sname = $request->input('sname','');
        $slid->surl = $request->input('surl','');
        $slid->description = $request->input('description','');
        $res = $slid->save();
        if($res){
            DB::commit();
            return redirect('admin/slid')->with('success','修改成功');
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
        $res = slid::destroy($id);
        if($res){
            DB::commit();
            return redirect('admin/slid')->with('success','删除成功');
        }else{
             DB::rollBack();
            return back()->with('error','删除失败');
        }
    }
}
