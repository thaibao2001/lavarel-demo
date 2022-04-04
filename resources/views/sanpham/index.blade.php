@extends('_layout_admin')
@section('content')
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Danh sach san pham</h1>
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
                            <th>Anh</th>
                            <th>Loại sản phẩm</th>
                            <th>Ten</th>
                            <th>Gia</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </tr>
                        </thead>
                        <tfoot>
                        <tr>
                            <th>TT</th>
                            <th>Anh</th>
                            <th>Loại sản phẩm</th>
                            <th>Ten</th>
                            <th>Gia</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </tr>
                        </tfoot>
                        <tbody>
                        @php
                            $tt=1;
                        @endphp
                        @foreach($sanpham as $sp)
                            <tr>
                                <td>{{$tt++}}</td>
                                <td><img src="/admin1/upload/sanpham/{{$sp->image}}" style='width:100px'></td>
                                <td>{{$sp->loaisp->tenloai??'None'}}</td>
                                <td>{{$sp->name}}</td>
                                <td align="right">{{number_format($sp->unit_price)}}</td>
                                <td><a href="/admin/sanpham/{{$sp->id}}/show" class="btn btn-info">Edit</a></td>
                                <td><a onclick="return confirm('Ban co muon xoa that khong?');" href="/admin/sanpham/{{$sp->id}}/delete" class="btn btn-danger">Delete</a></td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </main>

@stop
