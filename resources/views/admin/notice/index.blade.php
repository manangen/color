@extends('admin.layout.index')

@section('content')
   
      <style>
               .title{   
    width:150px;   
    overflow : hidden;   
    text-overflow: ellipsis;   
    display: -webkit-box;   
    -webkit-line-clamp: 2;   
    -webkit-box-orient: vertical;   
}  
td
{
    text-align:center;
}
    </style>
<div class="mws-panel grid_8">

	<div class="mws-panel-header">
    	<span><i class="icon-table"></i>公告列表</span>
    </div>
    <div class="mws-panel-body no-padding">
        <table class="mws-table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>公告类型</th>
                    <th>公告标题</th>
                    <th>公告内容</th>
                    <th>公告时间</th>
                    <th>操作</th>
                </tr>
            </thead>

            @foreach($notices as $k=>$v)
                <tr>
                    <td>{{ $v->id }}</td>
                    <td>{{ $v->name }}</td>
                    <td>{{ $v->cartname }}</td>
                    <td >
                    <p style="width:100px; overflow: hidden;text-overflow:ellipsis;white-space:nowrap;">
                    {{ $v->left }}
                    </p>
                    </td>
                    <td>{{ $v->created_at }}</td>
                    <td> 
                    <form action="/admin/notice/{{ $v->id }}" method="post" style="display:inline-block;">
                  	   {{ csrf_field() }}
                  	   {{ method_field('DELETE')}}
                    	<input type="submit" value="删除" class="btn btn-danger">
					</form>
					<a href="/admin/notice/{{$v->id}}/edit" class="btn btn-warning">修改</a>
                    </td>
                </tr>
            @endforeach
            </tbody>

        </table>

                         {{-- 分页样式 --}}
                  <div class="dataTables_paginate " id="page_page" style="padding-bottom:0px;"> 				
					{{ $notices->links()}}
				  </div>
          
    </div>
</div>
@endsection