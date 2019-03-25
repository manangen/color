@extends('admin.layout.index')

@section('content')
	<div class="mws-panel grid_8">
    	<div class="mws-panel-header">
        	<span><i class="icon-table"></i> 链接列表</span>
        </div>
        <div class="mws-panel-body no-padding">
            <table class="mws-table">
                <thead>
                    <tr>
                        <th>链接名称</th>
                        <th>链接名称</th>
                        <th>链接地址</th>
                        <th>链接说明</th>
                        <th>操作</th>
                    </tr>
                </thead>
                <tbody>
                	@foreach($link as $k => $v)
                    <tr>
                        <td>{{ $v->id }}</td>
                        <td>{{ $v->lname }}</td>
                        <td>{{ $v->lurl }}</td>
                        <td>{{ $v->description }}</td> 
						<td>
                            <div style="text-align:center;">                               
                                <form style="display: inline-block;" action="/admin/link/{{ $v->id }}" method="post">
                                    {{ csrf_field() }}
                                    {{ method_field('DELETE') }}                                 
                                    <input type="submit" value="删除" class="btn btn-danger">                                   
                                </form>
                                <a href="/admin/link/{{ $v->id }}/edit" class="btn btn-warning">修改</a>
							</div>
						</td>
                        @endforeach                  	
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
@endsection