@extends('_layout_admin')
@section('content')
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">sua thong tin san pham</h1>
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
                    <form method="post" action='/admin/news/update'>
                        @csrf
                        <input type="hidden"
                               id="sid" value="{{$news->id_name}}"
                               name="sid">
                        <div class="form-group">
                            <label for="sname">Ten SP</label>
                            <input type="text" class="form-control"
                                   id="sname"
                                   name="sname" value="{{$news->title}}">
                        </div>
                        <div class="form-group">
                            <label for="name">Loai SP</label>
                            <select name="loaisp" id="loaisp" >
                                @foreach($loaisp as $a)
                                    <option value="{{$a->id}}">
                                        {{$a->tenloai}}
                                    </option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="description">Mo ta</label>
                            <script src="https://cdn.ckeditor.com/4.18.0/standard/ckeditor.js"></script>
                            <textarea id="description" name="description">
                            	{{$news->mota_sp}}

                            </textarea>
                            <script>
                                CKEDITOR.replace( 'description' );
                            </script>

                        </div>



                        <button type="submit" value="cmd" name="cmd" class="btn bg-success">
                            Save
                        </button>

                    </form>
                </div>
            </div>
        </div>
    </main>

@stop
