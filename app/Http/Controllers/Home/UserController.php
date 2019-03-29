<?php

namespace App\Http\Controllers\home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\HomeStoreRequest;
use App\Models\Users_home;
use Illuminate\Support\Facades\Auth;
use App\Models\Users;
use DB;
use Hash;
use Mail;

class UserController extends Controller
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
    //手机号码注册
    public function create()
    {
         return view('home/register/register');
    }

     public function insert(Request $request)
    {

         $this->validate($request, [
        'uname' => 'required|unique:users_home',
        'phone' => 'required|regex:/^1{1}[3-9]{1}[\d]{9}$/',
        'smscode' => 'required',
        'password' => 'required|regex:/^[\w]{6,}$/',
     ],[
        'uphone.regex'=>'手机号格式不正确',
        'smscode.required' => '验证码不能为空',
        'password.required'=>'确认密码不能为空',
        'password.regex'=>'密码不能少于6位',
        ]);

        if(session('rand_phone_code') != $request->smscode){
           echo '<script>alert("验证码错误");location.href="/homes/register";</script>';

        }
        // 开启事务   DB::beginTransaction();
        // 提交事务   DB::commit()

        // 回滚事务   DB::rollBack()      
        $users_home = new users_home;
        $users_home->uname = $request->input('uname','');
        $users_home->phone = $request->input('phone','');
        $users_home->password = Hash::make($request->input('password',''));
        // dump($user_homes);
        $res = $users_home->save();     

        if($res){
            DB::commit();
            echo '<script>alert("注册成功");location.href="/homes/register";</script>';
            // return redirect('/homes/register')->with("<script>alert('添加成功')</script>");
        }else{
            DB::rollBack();
            echo '<script>alert("注册失败");location.href="/homes/register";</script>';
        }
      
        // if(session('rand_phone_code') != $request->phone){
        //    return back()->with('error','验证码错误');

        // }
        // 开启事务   DB::beginTransaction();
        // 提交事务   DB::commit()
        // 回滚事务   DB::rollBack()
        
        DB::beginTransaction();

        $users = new Users;
        $users->uname = $request->input('uname','');
        $users->phone = $request->input('phone','');
        $users->upass = Hash::make($request->input('upass',''));
        dump($users);
        $res = $users->save();     
        if($res){
            DB::commit();
            return redirect('homes/register')->with('success','注册成功');
        }else{
            DB::rollBack();
            return redirect('home/register')->with('error','注册失败');
        }


       
           
      
        //验证密码不能为空
        // if($request->password != $request->Null){

        // }   
         
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    //登录
    public function store(HomeStoreRequest $request)
    {
        $name = $request->input('uname','');
        $password = $request->input('password','');
        // dump($name);
        // dd($password);
        $users_home = users_home::where('uname',$name)->first();
    
        if(!$users_home){
          echo  '<script>alert("用户名错误");location.href="/homes/register";</script>';
        }
        $password = $users_home->password;
        if(!Hash::check($password,$password)){
        $request->flash();
        // return back()->with('error','密码错误');
        echo '<script>alert("密码错误");location.href="/homes/register";</script>';
        }
        session(['password' => $users_home->password,'uname' => $users_home->uname]);
        return redirect('/home');

        // if (Auth::attempt(['uname' => $uname, 'uphone' => $uphone, 'password' => $password ])) {
        //  echo '<script>alert("登录成功");location.href="/home";</script>';
        // }else{
        // return '<script>alert("登录失败");location.href="/homes/register";</script>';
        // }                          
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
      public function sendMobileCode(Request $request)
    {
        $phone = $request->phone;
        //随机字符
        $rand_phone_code = rand(1234,5678);

        session(['rand_phone_code'=>$rand_phone_code]);

        $url = "http://v.juhe.cn/sms/send";
        $params = array(
        'key'   => '91dddd7d274ef0c62aa553098870446a', //您申请的APPKEY
        'mobile'    => $phone, //接受短信的用户手机号码
        'tpl_id'    => '146242', //您申请的短信模板ID，根据实际情况修改

        'tpl_value' =>'#code#='.$rand_phone_code //您设置的模板变量，根据实际情况修改
    );

    $paramstring = http_build_query($params);
    $content = self::juheCurl($url, $paramstring);
    // $result = json_decode($content, true);
    if ($content) {
        echo $content;
    } else {
        echo $content;
        }
    }
                /**
         * 请求接口返回内容
         * @param  string $url [请求的URL地址]
         * @param  string $params [请求的参数]
         * @param  int $ipost [是否采用POST形式]
         * @return  string
         */
        public static function juheCurl($url, $params = false, $ispost = 0)
        {
            $httpInfo = array();
            $ch = curl_init();

            curl_setopt($ch, CURLOPT_HTTP_VERSION, CURL_HTTP_VERSION_1_1);
            curl_setopt($ch, CURLOPT_USERAGENT, 'JuheData');
            curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 60);
            curl_setopt($ch, CURLOPT_TIMEOUT, 60);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
            if ($ispost) {
                curl_setopt($ch, CURLOPT_POST, true);
                curl_setopt($ch, CURLOPT_POSTFIELDS, $params);
                curl_setopt($ch, CURLOPT_URL, $url);
            } else {
                if ($params) {
                    curl_setopt($ch, CURLOPT_URL, $url.'?'.$params);
                } else {
                    curl_setopt($ch, CURLOPT_URL, $url);
                }
            }
            $response = curl_exec($ch);
            if ($response === FALSE) {
                //echo "cURL Error: " . curl_error($ch);
                return false;
            }
            $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
            $httpInfo = array_merge($httpInfo, curl_getinfo($ch));
            curl_close($ch);
            return $response;
        } 
    }
