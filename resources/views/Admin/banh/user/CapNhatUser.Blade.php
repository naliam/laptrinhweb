        @extends('Admin.layout.index')
        @section('content')
        @foreach($SuaUser as $items)
        @endforeach()
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">CẬP NHẬT USER</h1>
                           
                        
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

                        <form action="Admin/banh/user/Sua-{{$items->id}}" method="POST" >
                            <input  type="hidden" name="_token" value="{{csrf_token()}}" />

                            <div class="form-group">
                                <label>Tên</label>
                                <input class="form-control" name="Ten" value="{{$items->name}}" />
                            </div>
                             <div class="form-group">
                                <label>Email</label>
                                <input class="form-control" name="email" value="{{$items->email}}" readonly="true" />
                            </div>
                            <div class="form-group">
                                <label>User Level</label>
                                <div>
                                <label class="radio-inline">
                                    <input name="quyen" value="1" type="radio">Admin
                                </label>
                                <label class="radio-inline">
                                    <input name="quyen" value="0" type="radio">Người dùng
                                </label>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-default">Sửa</button>
                           
                        <form>
                    </div>
                </div>
                <!-- /.row -->
            </div>
@endsection()