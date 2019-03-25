@extends('admin.layout.index')

@section('content')
@if (count($errors) > 0)
    <div class="mws-form-message error">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<div class="mws-panel grid_8">
                    <div class="mws-panel-header">
                         <span>公告编辑</span>
                    </div>
                    <div class="mws-panel-body no-padding">
                         <form class="mws-form" action="/admin/notice/{{$notices->id}}" method="post">
                              {{ csrf_field() }}
                            {{ method_field('PUT')}}
                              <div class="mws-form-inline">
                                   <div class="mws-form-row">
                                        <label class="mws-form-label">公告类型</label>
                                        <div class="mws-form-item">
                                        <select class="small" name="name" value="{{ $notices->name }}">
                                           <option>【新闻】</option>
                                           <option>【活动】</option>
                                           <option>【资讯】</option>
                                           <option>【公告】</option>
                                          </select>
                                           
                                        </div>
                                   </div>
                                   <div class="mws-form-row">
                                        <label class="mws-form-label">公告标题</label>
                                        <div class="mws-form-item">
                                             <input type="text" class="small" name="cartname" value="{{ $notices->cartname }}">
                                        </div>
                                   </div>
                                   
                                   
                                   <div class="mws-form-row">
                                        <label class="mws-form-label">公告内容</label>
                                        <div class="mws-form-item">
                                        <script id="container" name="left" type="text/plain" style="width:700px;height:500px">
                                           {!! $notices->left !!}
                                       </script>
                                           
                                        </div>
                                   </div>
                                   
                                   
                              <div class="mws-button-row">
                                   <input type="submit" value="提交" class="btn btn-danger">
                    
                              </div>
                         </form>
                    </div>         
                </div>


                   <!-- 配置文件 -->
        <script type="text/javascript" src="/admin_public/utf8-php/ueditor.config.js"></script>
        <!-- 编辑器源码文件 -->
       <script type="text/javascript" src="/admin_public/utf8-php/ueditor.all.js"></script>

       <!-- 实例化编辑器 -->
        <script type="text/javascript">
        // var ue = UE.getEditor('container');
        var ue = UE.getEditor('container',{autoHeight: false});
       </script>
@endsection