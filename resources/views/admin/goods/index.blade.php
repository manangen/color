@extends('admin.layout.index')
@section('content')
<style>
    td
{
    text-align:center;
}
 .title{   
    width:150px;   
    overflow : hidden;   
    text-overflow: ellipsis;   
    display: -webkit-box;   
    -webkit-line-clamp: 2;   
    -webkit-box-orient: vertical;   
}  
</style>
<div class="mws-panel grid_8">
                	<div class="mws-panel-header">
                    	<span><i class="icon-table"></i>商品列表</span>
                    </div>
                    <div class="mws-panel-body no-padding">
                        <table class="mws-table">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>商品名称</th>
                                    <th>商品库存</th>
                                    <th>商品分类ID</th>
                                    <th>生产厂家</th>
                                    <th>商品价格</th>
                                    <th>商品图片</th>
                                    <th>商品状态</th>
                                    <th>商品说明</th>
                                    <th>编辑</th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach($goods as $k=>$v)
                                <tr>
                                 
                                    <td>{{ $v->id }}</td>
                                    <td>{{ $v->name }}</td>
                                    <td>{{ $v->store }}</td>
                                    <td>{{ $v->cates->cname }}</td>
                                    <td>{{ $v->company }}</td>
                                    <td>{{ $v->price }}</td>
                                    <td><img src="/admin_public/{{ $v->pic }}" alt="" width="50px"></td>
                                    <td>{{ $v->status == 0? '上架':'下架' }}</td>
                                    <td>
                                    <p style="width:100px; overflow: hidden;text-overflow:ellipsis;white-space:nowrap;">
                                    {{ $v->descr }}
                                    </p>
                                    </td>

                                    <td>
                                         <form action="/admin/goods/{{ $v->id }}" method="post" style="display:inline-block;">
                                               {{ csrf_field() }}
                                               {{ method_field('DELETE')}}
                                            <input type="submit" value="删除" class="btn btn-warning" onclick="return confirm('数据无价小心操作')">
                                          </form>
                                            <a href="/admin/goods/{{$v->id}}/edit" class="btn btn-success">修改</a>
                                        
                                    </td>
                                    
                                </tr>
                                  @endforeach
                            </tbody>
                        </table>

                         {{-- 分页样式 --}}
                  <div class="dataTables_paginate " id="page_page" style="padding-bottom:0px;">                 
                    {{ $goods->links()}}
                  </div>
                    </div>
                </div>
  @endsection