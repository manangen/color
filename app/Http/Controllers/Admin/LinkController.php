<?php
namespace App\Http\Controllers\Admin;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use \Http\Requests\LinkStoreRequest;
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
        // 加载页面模板
        return view('admin.link.index');
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
    public function store(LinkStoreRequest $request)
    {
        dump($request);
        // 开启事务
        DB::beginTransaction();
        // 把数据 压入到 数据库
        $link = new link;
        $link->lname = $request->input('lname','');
        $link->lurl = $request->input('lurl','');
        $link->lpic = $request->input('lpic','');
        $link->description = $request->input('description','');
        if($res1 && $res2){
            DB::commit();
            return redirect('admin/link')->with('success','添加成功');
        }else{
            DB::rollBack();
            return redirect('admin/link')->with('error','添加失败');
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
