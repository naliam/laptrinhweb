@extends('Admin.layout.index')
@section('content')
 <div id="page-wrapper">
	<div class="container-fluid">
		
			<div class="col-lg-12">
				<h1 class="page-header">Thêm Bánh </h1>
				
		</div>
		<!-- /.col-lg-12 -->
		<div class="col-lg-7" style="padding-bottom:120px">
		@if(count($errors)>0)
			<div class="alert alert-danger">

					@foreach($errors->all() as $err)
						{{$err}} <br>
					@endforeach
			</div>
		@endif

		@if(session('thongbao'))
				<div class="alert alert-success">
				{{session('thongbao')}}

			</div>
		@endif
			<form action="Admin/banh/thembanh" method="POST" enctype="multipart/form-data" >
				<input  type="hidden" name="_token" value="{{csrf_token()}}" />

				<div class="form-group">
					<label>Tên Bánh</label>
					<input class="form-control" name="tenBanh" placeholder="Hãy nhập tên bánh" />
				</div>
				<div class="form-group">
				<div class="form-group">
					<label>Mã loại</label>
					<select name="maLoai" class="form-control">
						@foreach($loaibanh as $items)
							<option  value="{{$items->idloaibanh}}">{{$items->tenloai}}</option>
						@endforeach
					</select>
				</div>
					<label>Số lượng</label>
					<input class="form-control" type="number" name="soLuong" placeholder="Hãy nhập số lượng bánh" />
				</div>
				
					<div class="form-group">
						<label>Hình ảnh</label>
						<input type="file" name="HinhAnh">
                     </div>
				
				<div class="form-group">
					<label>Giá</label>
					<input class="form-control" type="number" name="Gia" step="" placeholder="Hãy nhập giá bánh" />
				 </div>
				
				<div class="form-group">
					<label>Mô tả</label>
					<textarea id="Mota" class=" form-control ckeditor" name="moTa"></textarea>
					
				</div>
				
				<button type="submit" class="btn btn-default">Thêm</button>
				
			<form>
		</div>
	</div>
	<!-- /.row -->
</div>
@endsection()