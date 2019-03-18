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
<!-- 显示错误 信息 结束 -->

<div class="mws-panel grid_8">
    <div class="mws-panel-header">
        <span>轮播图添加</span>
    </div>
    <div class="mws-panel-body no-padding">
        <form class="mws-form" action="/admin/slid" method="post">
            {{ csrf_field() }}
            <div class="mws-form-inline">
                <div class="mws-form-row">
                    <label class="mws-form-label">轮播图名称</label>
                    <div class="mws-form-item">
                        <input type="text" name="sname" value="{{ old('sname') }}" class="small">
                    </div>
                </div>
                <div class="mws-form-row">
                    <label class="mws-form-label">轮播图路径</label>
                    <div class="mws-form-item">
                        <input type="text" name="surl" value="{{ old('surl') }}" class="small">
                    </div>
                </div>
                
                <div class="mws-form-row">
                    <label class="mws-form-label">轮播图描述</label>
                    <div class="mws-form-item">
                        <textarea name="description" class="small">{{ old('description') }}</textarea>
                    </div>
                </div>
            </div>
            <div class="mws-button-row">
                <input type="submit" value="提交" class="btn btn-success">
                <!-- <input type="reset" value="重置" class="btn"> -->
            </div>
        </form>
    </div>      
</div>

@endsection