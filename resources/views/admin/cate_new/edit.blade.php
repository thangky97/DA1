@extends('templates.layout')

@section('title', 'Sửa danh mục bài viết')

@section('content-title', 'Sửa danh mục bài viết')

@section('content')
    <form action="{{ route('route_BackEnd_Cate_New_update', ['id'=>request()->route('id')]) }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class='form-group'>
            <label for="">Tên loại bất động sản</label>
            <input type="text" name='name' class='form-control'
            value="{{ $objItem->name }}">
        </div>
        <div class='form-group'>
            <label for="">Trạng thái</label>
            <input type="radio" name='status' value="1" {{(isset($objItem) && $objItem->status === 1) ? 'checked' : ''}}>Kích hoạt
            <input type="radio" name='status' value="0" {{(isset($objItem) && $objItem->status === 0) ? 'checked' : ''}}>K kích hoạt
        </div>

        <div>
            <button type="submit" class='btn btn-primary'>Thêm mới</button>
            <a class="btn btn-warning" href="{{ route('route_BackEnd_Cate_New_index') }}">Quay lại</a>
        </div>
    </form>
@endsection
@section('script')
    <script>
        $(function(){
            function readURL(input, selector) {
                if (input.files && input.files[0]) {
                    let reader = new FileReader();

                    reader.onload = function (e) {
                        $(selector).attr('src', e.target.result);
                    };

                    reader.readAsDataURL(input.files[0]);
                }
            }
            $("#cmt_truoc").change(function () {
                readURL(this, '#mat_truoc_preview');
            });

        });
    </script>
@endsection