<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Goods;
use Illuminate\Http\File;   //上传文件必须加的
use DB;
use App\Models\Cates;
class GoodsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    //商品管理列表
    public function index()
    {
      
          $goods = goods::paginate(3);
        return view('admin.goods.index',['goods'=>$goods]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
     //添加页面   +   和分类表关联
    public function create()
    {    
           //分类和商品关联    
        $data = Cates::select('*',DB::raw('concat(path,",",id) as paths'))
        ->orderBy('paths','asc')
        ->get();
        foreach($data as $key => $value){
            $mun = substr_count($value->path,',');

            $data[$key]->cname = str_repeat('|----',$mun).$value->cname;
        }

      

        return view('admin.goods.goods',['data'=>$data]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
         // 处理添加逻辑
    public function store(Request $request)
    {     

              $this->validate($request, [
            'name' => 'required',
            'price' => 'required|regex:/^[0-9]*$/',
            'store' => 'required|regex:/^[0-9]*$/',
            'pic' => 'required',
            'company' => 'required',
             'descr' => 'required',
              
           ],
           [
            'name.required' => '商品名称为空',
            
            'price.required' => '商品价格为空',
            'price.regex' => '商品价格,格式错误',

            'store.required' => '商品库存为空',
            'store.regex' => '商品库存格式错误',

            'pic.required' => '商品图片未上传',
             'company.required' => '生产厂家为空',
             'descr.required' => '商品说明为空',


           ]);
           // 1创建文件上传对象
          $file = $request->file('pic');
          //2执行上传到那个文件 goods
          $file_name = $file->store('goods');
        
         $goods = new goods;
         $goods->name = $request->input('name','');//商品名字
         $goods->typeid = $request->input('typeid','');//分类名称
         $goods->price = $request->input('price','');//商品价格
         $goods->store = $request->input('store','');//商品库存
         $goods->status = $request->input('status','');//商品状态
         $goods->pic = $file_name;  //3上传图片
         $goods->company = $request->input('company','');//生产厂家
         $goods->descr = $request->input('descr','');//商品说明
           

       
             //判断是否添加成功
      if($goods->save()){
        return  redirect('admin/goods')->with('success','添加成功');
      }else{
        return back()->with('error','添加失败');
      }
         // dump($car->save());
        // dump($request->all());
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
        //打印传过来的ID
         // dump($id);

      // $goods = DB::table('goods')->where('id',$id)->get();
     
      //   dd($id);
         $data = Cates::select('*',DB::raw('concat(path,",",id) as paths'))
        ->orderBy('paths','asc')
        ->get();
        foreach($data as $key => $value){
            $mun = substr_count($value->path,',');
       
            $data[$key]->cname = str_repeat('|----',$mun).$value->cname;
             }



             
         $goods = Goods::find($id);
         // dump($goods);
        return view('admin.goods.edit',['goods'=>$goods,'data'=>$data]);

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



             $this->validate($request, [
            'name' => 'required',
            'price' => 'required|regex:/^([0-9][0-9]*)+(.[0-9]{1,2})?$/',
            'store' => 'required|regex:/^[0-9]*$/',
            'pic' => 'required',
            'company' => 'required',
             'descr' => 'required',
              
           ],
           [
            'name.required' => '商品名称为空',
            
            'price.required' => '商品价格为空',
            'price.regex' => '商品价格,格式错误',

            'store.required' => '商品库存为空',
            'store.regex' => '商品库存格式错误',

            'pic.required' => '商品图片未上传',
             'company.required' => '生产厂家为空',
             'descr.required' => '商品说明为空',


           ]);
   
           // 1创建文件上传对象
          $file = $request->file('pic');
          //2执行上传到那个文件 goods
          $file_name = $file->store('goods');
          //查询出来一条数据
          $goods = goods::find($id);
               // dump($goods);
          // $goods->name = $request->input('name','');
         $goods->name = $request->input('name','');//商品名字
         // $goods->typeid = $request->input('typeid','');//分类名称
         $goods->price = $request->input('price','');//商品价格
         $goods->store = $request->input('store','');//商品库存
         $goods->status = $request->input('status','');//商品状态
         $goods->pic = $file_name;  //3上传图片
         $goods->company = $request->input('company','');//生产厂家
         $goods->descr = $request->input('descr','');//商品说明
          $res1 = $goods->save();

          if($res1){
              return redirect('admin/goods')->with('success','修改成功');
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
    public function destroy($id)
    {
        // dump($id);
        // $res = DB::table('goods')->where('id',$id)->delete();
        // dd($res);
       if( $res = DB::table('goods')->where('id',$id)->delete()){
               return redirect('admin/goods')->with('success','删除成功');
           }else{
            return back()->with('error','删除失败');
           }

        // $blog = goods::find($id);
        // if($blog->delete()){
        //       echo '删除成功';
        // }else{
        //     echo '删除失败';
        // }
    }
}
