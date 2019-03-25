{{-- 分类列表页面 --}}
@extends('admin.layout.index')

@section('content')
<style>
    td
{
    text-align:center;
}
</style>
<div class="mws-panel grid_8">
                	<div class="mws-panel-header">
                    	<span><i class="icon-table"></i>分类列表</span>
                    </div>
                    <div class="mws-panel-body no-padding">
                        <table class="mws-table">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>父级名称</th>
                                    <th>父级ID</th>
                                    <th>分类路径</th>
                                    <th>分类状态</th>
                                    <th>操作</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($cates_data as $k=>$v)
                                <tr>
                                    <td>{{ $v->id }}</td>
                                    <td>{{ $v->cname }}</td>
                                    <td>{{ $v->pid }}</td>
                                    <td>{{ $v->path }}</td>
                                    <td>{{ $v->status == 1? '激活':'未激活' }}</td>
                                    <td>  
                                            <div style="text-align:center;"> 
                                           <a href="/admin/cates/create?id={{ $v->id }}" class="btn btn-info">添加子分类</a>
                                          <form action="/admin/cates/{{ $v->id }}" method="post" style="display:inline-block;">

                                    <td> 

                                          	   {{ csrf_field() }}
                                          	   {{ method_field('DELETE')}}
                                          	<input type="submit" value="删除" class="btn btn-warning">
                                           </form>
                                        </div>
                                    	
                                          	<input type="submit" value="删除" class="btn btn-warning" onclick="return confirm('数据无价小心操作')">
                                          </form>
                                        

                                    	<!-- <a href="" class="btn btn-success">编辑<a> -->
                                    </td>
                                </tr>
                               @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
@endsection