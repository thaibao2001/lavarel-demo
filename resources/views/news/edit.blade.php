@extends('_layout_admin')
@section('content')
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Chỉnh sửa tin tức</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                <li class="breadcrumb-item active">Tables</li>
            </ol>
            <div class="card mb-4">
                <div class="card-header">
                    <i class="fas fa-table me-1"></i>
                    Tin tức
                </div>
                <div class="card-body">
                    <form method="post" action='/admin/news/update' enctype="multipart/form-data">
                        @csrf
                        <input type="hidden"
                               id="sid" value="{{$news->id_new}}"
                               name="sid">
                        <div class="form-group">
                            <label for="name">Tiêu đề</label>
                            <input type="text" class="form-control"
                                   id="name"
                                   name="name" value="{{$news->title}}">
                        </div>
                        <div class="form-group">
                            <label for="img">Ảnh</label>
                            <input type="file" id="img" name="img" accept="image/*" onchange="loadFile(event)">
                            <img id="output" width="200" src="/admin1/upload/sanpham/{{$news-> image}}"/>
                        </div>


                        <div class="form-group">
                            <label for="ncontent">Nội dung</label>
                            <script src="https://cdn.ckeditor.com/4.18.0/standard/ckeditor.js"></script>
                            <textarea id="ncontent" name="ncontent">
                            	{{$news->content}}

                            </textarea>
                            <script>
                                CKEDITOR.replace( 'ncontent' );
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
    <script>
        var loadFile = function(event) {
            var image = document.getElementById('output');
            image.src = URL.createObjectURL(event.target.files[0]);
        };
    </script>

@stop
