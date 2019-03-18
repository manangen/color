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
                         <span>公告添加</span>
                    </div>
                    <div class="mws-panel-body no-padding">
                         <form class="mws-form" action="/admin/notice" method="post">
                              {{ csrf_field() }}
                              <div class="mws-form-inline">
                                   <div class="mws-form-row">
                                        <label class="mws-form-label">公告类型</label>
                                        <div class="mws-form-item">
                                           <select class="small" name="name">
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

                                             <input type="text" class="small" name="cartname">
                                        </div>
                                   </div>
                                   
                                   
                                   <div class="mws-form-row">
                                        <label class="mws-form-label">公告内容</label>
                                        <div class="mws-form-item">
                                            <!-- 加载编辑器的容器 -->
                             <script id="container" name="left" type="text/plain" style="width:700px;height:500px">
                              
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