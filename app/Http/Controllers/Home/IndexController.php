<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Link;
use App\Models\Cates;
use DB;
use App\Models\Goods; 
class IndexController extends Controller
{
    public static function getPidCates($pid = 0)
    {
        $data = [];
        // 获取一级分类
        $yiji_data = Cates::where('pid',$pid)->get();
        // 通过一级分类获取二级分类
         foreach ($yiji_data as $key => $value) {
            $temp = self::getPidCates($value->id);
            $value['sub'] = $temp;
            $data[] = $value;
        } 
        return $data;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      
         
            
                    //公告遍历
        $notices = DB::select('select * from notices');
            // dump($notices);
              $link = DB::select('select * from link');
            
        return view('home/index/index',['cates_data'=> self::getPidCates(),'notices'=>$notices,'link'=>$link] );
           
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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

         $cates = Goods::where('typeid','=',$id)->get();
          // dump($cates);

             
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
          
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
    public function destroy($id)
    {
        //
    }
}
