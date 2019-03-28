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
        <span>用户修改</span>
    </div>
    <div class="mws-panel-body no-padding">
        <form class="mws-form" action="/admin/users/{{$user->id}}" method="post">
            {{ csrf_field() }}
            {{ method_field('PUT')}}
            <div class="mws-form-inline">
                <div class="mws-form-row">
                    <label class="mws-form-label">用户名</label>
                    <div class="mws-form-item">
                        <input type="text" name="uname"  readonly value="{{ $user->uname }}" class="small">
                    </div>
                </div>
                <div class="mws-form-row">
                    <label class="mws-form-label">邮箱</label>
                    <div class="mws-form-item">
                        <input type="text" name="email" value="{{ $user->email }}" class="small">
                    </div>
                </div>
                <div class="mws-form-row">
                    <label class="mws-form-label">手机号</label>
                    <div class="mws-form-item">
                        <input type="text" name="phone" value="{{ $user->phone }}" class="small">
                    </div>
                </div>
                <div class="mws-form-row">
                    <label class="mws-form-label">个性签名</label>
                    <div class="mws-form-item">
                        <textarea name="description" class="small">{{ $user->userinfo->description}}</textarea>
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
