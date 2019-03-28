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
    	<span>修改链接</span>
    </div>
    <div class="mws-panel-body no-padding">
    	<form class="mws-form" action="/admin/link/{{ $link->id }}" method="post">
    		{{ csrf_field() }}
            {{ method_field('PUT') }}
    		<div class="mws-form-inline">
    			<div class="mws-form-row">
    				<label class="mws-form-label">链接名称</label>
    				<div class="mws-form-item">
    					<input type="text" name="lname" value="{{ $link->lname }}" class="small">
    				</div>
    			</div>
    			<div class="mws-form-row">
    				<label class="mws-form-label">链接网址</label>
    				<div class="mws-form-item">
    					<input type="text" name="lurl" readonly value="{{ $link->lurl }}"  class="small">
    				</div>
    			</div>
    			<div class="mws-form-row">
    				<label class="mws-form-label">链接说明</label>
    				<div class="mws-form-item">
    					<textarea name="description" class="small">{{ $link->description }}</textarea>
    				</div>
    			</div>	
    		</div>
    		<div class="mws-button-row">
    			<input type="submit" value="提交" class="btn btn-success">
    			<input type="reset" value="重置" class="btn">
    		</div>
    	</form>
    </div>    	
</div>

@endsection