@extends('Admin.layout.index')
@section('content')
 @foreach($suaBanh as $items)

 <div id="page-wrapper">
	<div class="container-fluid">
		
			<div class="col-lg-12">
				<h1 class="page-header">Cập nhật Bánh </h1>
				
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
			<form action="Admin/banh/Sua-{{$items->idbanh}}" method="POST" enctype="multipart/form-data" >
				<input  type="hidden" name="_token" value="{{csrf_token()}}" />

				<div class="form-group">
					<label>Tên Bánh</label>
					<input class="form-control" name="tenBanh" value="{{$items->tenbanh}}" placeholder="Hãy nhập tên bánh" />
				</div>
				
				<div class="form-group">
					<label>Mã loại</label>
					<select name="maLoai"  value="{{$items->maloai}}" class="form-control">
						 
                                @foreach($loai as $value)
                                     <option 
                                        @if($items->idbanh == $value->idloaibanh)
                                            {{"selected"}}
                                        @endif

                                        value="{{$items->idbanh}}">{{$value->idloaibanh}} </option>
                                @endforeach()
                               
					</select>
				</div>
				<div class="form-group">
					<label>Số lượng</label>
					<input class="form-control" type="number" name="soLuong" value="{{$items->soluong}}"  placeholder="Hãy nhập số lượng bánh" />
				</div>
				
				<div class="form-group">
					<label>Mô tả</label>
					<textarea id="Mota" class=" form-control ckeditor" name="moTa" >{{$items->mota}}</textarea>
					
				</div>
					<div class="form-group">
						<label>Hình ảnh</label>
						<input type="file" name="HinhAnh" >
                     </div>
				
				<div class="form-group">
					<label>Giá</label>
					<input class="form-control" type="number" value="{{$items->gia}}" name="Gia" step="" placeholder="Hãy nhập giá bánh" />
				 </div>
				 @endforeach()
				
				<button type="submit" class="btn btn-default">Thêm</button>
				
			<form>
		</div>
	</div>
	<!-- /.row -->
</div>
@endsection()