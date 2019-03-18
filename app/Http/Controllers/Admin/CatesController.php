<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Cates;   //引入模型
use DB;  //SQL语句需要添加这个
class CatesController extends Controller
{
             //封装   分类级别
       public static function getCates(){
               // $cates_data = DB::select("select *,concat(path,',',id) as paths from cates order by paths");
             $cates_data =   cates::select('*',DB::raw('concat(path,",",id) as paths'))->orderBy('paths','asc')->get();
         foreach($cates_data as $key => $value){
                 //统计，出现的次数  substr_count
            $n = substr_count($value->path,',');
            $cates_data[$key]->cname = str_repeat('|----',$n).$value->cname;
         }
            return $cates_data;
       }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    //分类列表    遍历内容
    public function index()
    {      
        //查看所有数据     遍历进列表内容操作
       // $cates_data = Cates::all();
       
        return View('admin.cates.index',['cates_data'=>self::getCates()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    //添加操作
    public function create(Request $request)
    {   

            // $cates_data = Cates::all();
             $id = $request->input('id','');
                // var_dump($id);
          //加载添加模板
             // return view('admin.cates.cates');
        return view('admin.cates.cates',['id'=>$id,'cates_data'=>self::getCates()]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {  
         
           //设置限制表单为空不能提交
           $this->validate($request, [
            'cname' => 'required',
        ],
        [
            'cname.required' => '分类名称不能为空',
        ]);
           
         //打印接受传来的值 $request->all()
      // dump($request->all());
      $cates = new Cates;
      $cates->cname = $request->input('cname','');
      $cates->pid = $request->input('pid','');

      if($request->input('pid') == 0){
        $cates->path = 0;
      }else{
        //获取父级分类的数据
        $parent_data = Cates::find($request->input('pid'));
        // 父级分类的 path,id
        $cates->path = $parent_data->path.','.$parent_data->id;

      }
      //判断是否添加成功
      if($cates->save()){
        return  redirect('admin/cates')->with('success','添加成功');
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
     
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
   
    //删除分类
    public function destroy($id)
    {
        // echo $id;
        //检测当前分类，是否有子分类
        $child_data = Cates::where('pid',$id)->first();
        if($child_data){
              return back()->with('error','当前分类有子分类,不允许删除');
              exit;
        }
                  // destroy(删除的ID)
            // 删除
           if(Cates::destroy($id)){
               return redirect('admin/cates')->with('success','删除成功');
           }else{
            return back()->with('error','删除失败');
           }
    }
}
