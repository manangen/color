@extends('admin.layout.index')


@section('content')
<div class="mws-panel grid_8">
				<div class="mws-panel-header">
				<span><i class="icon-table"></i>轮播图列表</span>
				</div>
				<div class="mws-panel-body no-padding">
				<div id="DataTables_Table_0_wrapper" class="dataTables_wrapper" role="grid">
					<!-- <form action="/admin/slid" method="get">
					<div id="DataTables_Table_0_length" class="dataTables_length">
						<label>显示 <select size="1" name="count">
							<option value="5" @if(isset($request['count']) &&  $request['count'] == 5) selected @endif>5</option>
							<option value="10" @if(isset($request['count']) && $request['count'] == 10) selected @endif>10</option>
							<option value="15" @if(isset($request['count']) && $request['count'] == 15) selected @endif>15</option>
							<option value="30" @if(isset($request['count']) && $request['count'] == 30) selected @endif>30</option>
							</select>条</label>
							</div>
					<div class="dataTables_filter" id="DataTables_Table_0_filter">
						<label>关键字:<input type="text" name="search" value="{{$request['search'] or ''}}" aria-controls="DataTables_Table_0">
						<input type="submit"  class="btn btn-info btn-xs"value="搜索">
					</label>
					</div>
				</form> -->
					 <div style="text-align:center;">
					<table class="mws-datatable mws-table dataTable" id="DataTables_Table_0" aria-describedby="DataTables_Table_0_info">
				<thead>
					<tr role="row">
						<th>ID</th> 
						<th>轮播图名</th>
						<th>图片</th>
						<th>轮播图状态</th>
						<!-- <th>轮播图路径</th> -->
						<th>轮播图描述</th>
						<th>操作</th>
					</tr>
				</thead>

				<tbody role="alert" aria-live="polite" aria-relevant="all"><tr class="odd">
				  @foreach($slid as $k=>$v)
				<tr class="even">
					<td>{{$v->id}}</td>
					<td>{{$v->sname}}</td>
					<td >
					<img style="width：100px;height:100px;" src="{{$v->spic}}">
					</td>
					<td>{{$v->status}}</td>
					<td>{{$v->description}}</td>
					<td>
						<form style="display:inline-block" action="/admin/slid/{{$v->id}}" method="post">
						{{csrf_field()}}
						{{method_field('DELETE')}}
						<input type="submit" value="删除" class="btn btn-danger">
						</form>
						<a href="/admin/slid/{{$v->id}}/edit" class="btn btn-warning">修改</a>
					</td>
				</tr>
				@endforeach
			</tbody>
		</table>
				<div class="dataTables_info" id="DataTables_Table_0_info">
				Showing 1 to 10 of 57 entries</div>
				<!-- <div class="dataTables_paginate " id="page_page" style="padding-bottom:0px;"> 				 -->
					<!-- {{$slid->appends($request)->links()}} -->
				</div>
			</div>
		</div>
	 </div>
@endsection