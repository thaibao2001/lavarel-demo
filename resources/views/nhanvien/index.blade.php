@extends('_layout_admin')
@section('content')
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Danh mục các loại tin tức</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                <li class="breadcrumb-item active">Tables</li>
            </ol>

            <div class="card mb-4">
                <div class="card-header">
                    <i class="fas fa-table me-1"></i>
                    San pham
                </div>
                <div class="card-body">
                    <table id="datatablesSimple">
                        <thead>
                        <tr>
                            <th>TT</th>
                            <th>Họ và tên</th>
                            <th>Giới tính</th>
                            <th>Ngày sinh</th>
                            <th>Quê quán</th>
                            <th>Số điện thoại</th>
                            <th>Email</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </tr>
                        </thead>
                        <tfoot>
                        <tr>
                            <th>TT</th>
                            <th>Tiêu đề</th>
                            <th>Mô tả</th>
                            <th>Ngày sinh</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </tr>
                        </tfoot>
                        <tbody>
                        @php
                            $tt=1;
                        @endphp
                        @foreach($nhanvien as $n)
                            <tr>
                                <td>{{$tt++}}</td>


                                <td>{{$n->ten_nhanvien}}</td>
                                <td>{{$n->gioitinh}}</td>
                                <td>{{date_format(date_create($n->ngaysinh),'d-m-Y')}}</td>
                                {{--<td><img src="/admin1/upload/sanpham/{{$n-> image}}" style='width:100px'></td>
                                <td><a href="/admin/news/{{$n->id_new}}/show" class="btn btn-info">Edit</a></td>--}}
                                <td><a onclick="return confirm('Ban co muon xoa that khong?');" href="/admin/news/{{$n->id_new}}/delete" class="btn btn-danger">Delete</a></td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </main>

@stop
