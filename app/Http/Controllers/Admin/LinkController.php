<?php
namespace App\Http\Controllers\Admin;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\LinksStoreRequest;
use App\Models\Link;
use DB;

class LinkController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $link = Link::all();
        // dump($link);
        // 加载页面模板
        return view('admin.link.index',['link'=>$link]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // 添加友情链接
        return view('admin.link.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(LinksStoreRequest $request)
    {
        DB::beginTransaction();
        // dump($request->all());
        $link = new Link;
        $link->lname = $request->input('lname','');
        $link->lurl = $request->input('lurl','');
        $link->description = $request->input('description','');
        if($link->save()){
            return redirect('admin/link/')->with('success','添加成功');
        }else{
            return back('admin/link/create')->with('error','添加失败');
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
        $link = Link::find($id);
        // dump($link);
        // 显示数据
        return view('admin.link.edit',['link'=>$link]);
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
        // 修改
        // dump($request->all());
        // 开始事务
        DB::beginTransaction();

        // 直接数据库
        $link = Link::find($id);
        $link->lname = $request->input('lname','');
        $link->description = $request->input('description',''); 
        $res = $link->save();  
        if($res){
        	DB::commit();
            return redirect('admin/link')->with('success','修改成功');
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
        // 删除
    	DB::beginTransaction();
    	$res = Link::destroy($id);
    	if($res){
        	DB::commit();
            return redirect('admin/link')->with('success','删除成功');
        }else{
        	DB::rollBack();
            return back()->with('error','删除失败');
        }   
    }
}
