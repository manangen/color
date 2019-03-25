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
        <span>用户添加</span>
    </div>
    <div class="mws-panel-body no-padding">
        <form class="mws-form" action="/admin/users" method="post">
            {{ csrf_field() }}
            <div class="mws-form-inline">
                <div class="mws-form-row">
                    <label class="mws-form-label">用户名</label>
                    <div class="mws-form-item">
                        <input type="text" name="uname" value="{{ old('uname') }}" class="small">
                    </div>
                </div>
                <div class="mws-form-row">
                    <label class="mws-form-label">密码</label>
                    <div class="mws-form-item">
                        <input type="password" name="upass" value="" class="small">
                    </div>
                </div>
                <div class="mws-form-row">
                    <label class="mws-form-label">确认密码</label>
                    <div class="mws-form-item">
                        <input type="password" name="repass" value="" class="small">
                    </div>
                </div>
                <div class="mws-form-row">
                    <label class="mws-form-label">邮箱</label>
                    <div class="mws-form-item">
                        <input type="text" name="email" value="{{ old('email') }}" class="small">
                    </div>
                </div>

<<<<<<< HEAD
                <div class="mws-form-row">
                    <label class="mws-form-label">手机号</label>
                    <div class="mws-form-item">
                        <input type="text" name="phone" value="{{ old('phone') }}" class="small">
                    </div>
                </div>
                <div class="mws-form-row">
                    <label class="mws-form-label">个性签名</label>
                    <div class="mws-form-item">
                        <textarea name="description" class="small">{{ old('description') }}</textarea>
                    </div>
                </div>  
            </div>
            <div class="mws-button-row">
                <input type="submit" value="提交" class="btn btn-success">
                <!-- <input type="reset" value="重置" class="btn"> -->
            </div>
=======
    			<div class="mws-form-row">
    				<label class="mws-form-label">手机号</label>
    				<div class="mws-form-item">
    					<input type="text" name="phone" value="{{ old('phone') }}" class="small">
    				</div>
    			</div>
    			<div class="mws-form-row">
    				<label class="mws-form-label">个性签名</label>
    				<div class="mws-form-item">
    					<textarea name="description" class="small">{{ old('description') }}</textarea>
    				</div>
    			</div>	
    		</div>
    		<div class="mws-button-row">
    			<input type="submit" value="提交" class="btn btn-success">
    			<input type="reset" value="重置" class="btn">
    		</div>
    	</form>
    </div>    	
>>>>>>> origin/laowan
        </form>
    </div>      
</div>

@endsection