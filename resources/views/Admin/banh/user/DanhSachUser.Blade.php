@extends('Admin.layout.index')
@section('content')

<div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">DANH SÁCH USER</h1>
                            
                       
                    </div>

                      @if(session('thongbao'))
                            <div class="alert alert-success">
                            {{session('thongbao')}}

                        </div>
                    @endif
                    <!-- /.col-lg-12 -->
                    <table class="table table-striped table-bordered table-hover" >
                        <thead>
                            <tr align="center">
                                <th>ID</th>
                                <th>Tên</th>
                                <th>Email</th>
                                <th>Quyền</th>
                                <th>Cập nhật</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($ds as $items)
                                <tr class="odd gradeX" align="center">
                                    <td>{{$items->id}}</td>

                                    <td>{{$items->name}}</td>
                                     <td>{{$items->email}}</td>
                                    @if($items->Level==1)
                                         <td>Admin</td>
                                    @else

                                        <td>Người dùng</td>
                                    @endif
                                  
                                    <td class="center"><a href="Admin/banh/user/Sua-{{$items->id}}">Cập nhật</a></td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <!-- /.row -->
            </div>
     @endsection()   