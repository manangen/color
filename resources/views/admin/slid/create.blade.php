@extends('admin.layout.index')

@section('title','网站信息')

@section('content')
	<button class="btn btn-warning" onclick="history.go(-1)" style="border-radius:20px">返回</button>

	
	<div class="result_title">
            @if (count($errors) > 0)
                <div class="mark" style="background:#ED5F6F;border-radius:10px">
                    <ul>
                        @if(is_object($errors))
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        @else
                            <li>{{ session('msg') }}</li>
                        @endif
                    </ul>
                </div>
            @endif
        </div>

	<div class="container">
		<div class="col-md-offset-1">
		 	<div class="col-md-10">
				<form action="{{url('/admin/slid')}}" method="post" enctype="multipart/form-data">
	                {{csrf_field()}}
				  <div class="form-group">
				    <label for="exampleInputEmail1">名称: </label>
				    <input type="text" class="form-control" name="stitle" id="exampleInputEmail1" style="height=45px" value="">
				  </div>
				  <div class="form-group">
				    <label for="exampleInputEmail1">目标地址: </label>
				    <input type="text" class="form-control" name="surl" id="exampleInputEmail1" style="height=45px" value="">
				  </div>
				  <div class="form-group" style="margin-top:30px">
				    <label for="exampleInputFile">图片 :</label>
				    <input type="file" name="simg" value="" />
				  </div>
				  <div class="form-group row" style="margin-left:-27px;margin-top:20px">
		                <label class="col-sm-1 form-control-label text-xs-right">
		                    状态:
		                </label>
	                    <label>
	                        <input class="radio" name="status" type="radio" checked value="1">
	                        <span>显示</span>
	                    </label>
	                    <label>
	                        <input class="radio" name="status" type="radio" value="2">
	                        <span>不显示</span>
	                    </label>
		            </div>{{csrf_field()}}
				  
				  		
				<input class="btn btn-primary" type="submit" value="确认添加" style="border-radius:20px">
				</form>
			</div>
		</div>
	</div>
	

@endsection