@extends('admin.layout.index')
@section('content')

<div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">DANH SÁCH BÁNH</h1>
                    </div>

                      @if(session('thongbao'))
                            <div class="alert alert-success">
                            {{session('thongbao')}}

                        </div>
                    @endif
                    <!-- /.col-lg-12 -->
                    <table class="table table-striped table-bordered table-hover" ">
                        <thead>
                            <tr align="center">
                                <th>idBánh</th>
                                <th>Tên Bánh</th>
                                <th>Mã loại</th>
                                <th>Số lượng</th>
                                <th>Mô tả</th>
                                <th>Gía</th>
                                <th>Delete</th>
                                <th>Edit</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($dsbanh as $items)
                                <tr class="odd gradeX" align="center">
                                    <td>{{$items->idbanh}}</td>
                                    <td>
									<p>{{$items->tenbanh}}</p>
										<img width="100px" src="{{$items->hinhanh}}" />
									</td>
                                    <td>{{$items->maloai}}</td>
                                    <td>{{$items->soluong}}</td>
                                    <td>{{$items->mota}}</td>
                                    <td>{{$items->gia}}</td>
                                    <td class="center"><a href="Admin/banh/Xoa-{{$items->idbanh}}"> Delete</a></td>
                                    <td class="center"> <a href="Admin/banh/Sua-{{$items->idbanh}}">Edit</a></td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <!-- /.row -->
            </div>
     @endsection()   