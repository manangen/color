<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\notices;
class NoticeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    //列表页面
    public function index()
    {
        //$notices = notices::all();
       $all = notices::paginate(3);
        // dump($all);

        return view('admin.notice.index',['notices'=>$all]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    //添加页面
    public function create()
    {   

        return view('admin.notice.notice');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */  
      //添加操作逻辑
    public function store(Request $request)
    {
        // dump($request->all());
         $this->validate($request, [
            'name' => 'required',
            'cartname' => 'required',
            'left' => 'required',
           
        ],
        [
            'name.required' => '公告类型不能为空',
            'cartname.required' => '公告标题不能为空',
            'left.required' => '公告标题不能为空',
        ]);
         //1插入一条数据
        $notices = new notices;
        $notices->name = $request->input('name','');
        $notices->cartname = $request->input('cartname','');
        $notices->left = $request->input('left','');

         $cate = $notices;
         // dump($cate->save());
         //2判断是否添加成功
         if($cate->save()){
        return  redirect('admin/notice')->with('success','添加成功');
      }else{
        return back()->with('error','添加失败');
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
     //修改页面
    public function edit($id)
    {
       $notices = notices::find($id);
       return view('admin.notice.edit',['notices'=>$notices]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
      //修改操作逻辑
    public function update(Request $request, $id)
    {
        // dump($id);
         $this->validate($request, [
            'name' => 'required',
            'cartname' => 'required',
            'left' => 'required',
           
        ],
        [
            'name.required' => '公告类型不能为空',
            'cartname.required' => '公告标题不能为空',
            'left.required' => '公告标题不能为空',
        ]);
          $notices = notices::find($id);
          $notices->name = $request->input('name','');
          $notices->cartname = $request->input('cartname','');
           $notices->left = $request->input('left','');
          $res1 = $notices->save();
          // dump($res1);
            if($res1){
          
            return redirect('admin/notice')->with('success','修改成功');
           }else{
           
            return back()->with('error','修改失败');
            }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    //删除操作
    public function destroy($id)
    {
           if(notices::destroy($id)){
               return redirect('admin/notice')->with('success','删除成功');
           }else{
            return back()->with('error','删除失败');
           }
    }
}
