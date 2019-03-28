@extends('admin.layout.index')
@section('content')
<!-- 显示错误 信息 开始 -->
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
                    	<span>商品编辑</span>
                    </div>
                    <div class="mws-panel-body no-padding">
                    	<form class="mws-form" action="/admin/goods/{{$goods->id}}" method="post" enctype="multipart/form-data">
                              {{ csrf_field() }}
                               {{ method_field('PUT')}}
                    		<div class="mws-form-inline">
                    			<div class="mws-form-row">
                    				<label class="mws-form-label">商品名称</label>
                    				<div class="mws-form-item">
                    					<input type="text" class="small" name="name" value="{{ $goods->name}}">
                    				</div>
                    			</div>
                    			<div class="mws-form-row">
                    				<label class="mws-form-label">商品库存</label>
                    				<div class="mws-form-item">
                    					<input type="text" class="small" name="store" value="{{ $goods->store}}">
                    				</div>
                    			</div>
                    			
                                  
                                   <div class="mws-form-row">
                                        <label class="mws-form-label">生产厂家</label>
                                        <div class="mws-form-item">
                                             <input type="text" class="small" name="company" value="{{ $goods->company}}">
                                        </div>
                                   </div>
                                 

                                    
                    			<div class="mws-form-row">
                                        <label class="mws-form-label">商品价格</label>
                                        <div class="mws-form-item">
                                             <input type="text" class="small" name="price" value="{{ $goods->price}}">
                                        </div>
                                   </div>
                    			  <div class="mws-form-row">
                    			    <label class="mws-form-label">商品旧图片</label>
                                        <img src="/admin_public/{{ $goods->pic}}" alt="" width="150">
                    			   </div>
                                   <div class="mws-form-row">
                                        <label class="mws-form-label">商品图片上传</label>
                     
                                        <div class="mws-form-item" style="width:47%;">
                                             <input type="file" class="small"  name="pic" src="{{ $goods->pic}}">
                                        </div>
                                   </div>
                    			<div class="mws-form-row">
                    				<label class="mws-form-label">商品状态</label>
                    				<div class="mws-form-item clearfix">
                    				<ul class="mws-form-list inline">
                    					       <input type="radio" name="status" value="0" class="text-word" {{ $goods->status == 0 ?"checked":''}}>上架
                                               <input type="radio" name="status" value="1" class="text-word" {{ $goods->status == 1 ?"checked":''}}>下架
                    				</ul>
                    				</div>
                    			</div>
                    			<div class="mws-form-row">
                                        <label class="mws-form-label">商品说明</label>
                                        <div class="mws-form-item">
                                            <textarea rows="" cols="" class="small" style="overflow: hidden; word-wrap: break-word; resize: none; height: 130px;" name="descr" value="{{ $goods->descr}}">{{ $goods->descr}}</textarea>
                                        </div>
                                    </div>
                    		<div class="mws-button-row">
                    			<input type="submit" value="提交" class="btn btn-danger">
                    			
                    		</div>
                    	</form>
                    </div>    	
                </div>
@endsection