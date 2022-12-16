@extends('templates.layout')

@section('title', 'Sửa bài viết')

@section('content-title', 'Sửa bài viết')

@section('content')
    {{-- @if ($errors->any())
        <ul class='danger'>
            @foreach ($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
        @endif --}}
    <form action="{{ route('route_BackEnd_New_update', ['id'=>request()->route('id')]) }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class='form-group'>
                <label for="">Tiêu đề</label>
                <input type="text" name='title' class='form-control'
                value="{{ $objItem->title }}">
            </div>
            <div class='form-group'>
                <label for="">Ảnh</label>
                <input type="file" name="cmt_mat_truoc"
                    class="form-control @error('cmt_mat_truoc') is-invalid @enderror" id="cmt_truoc">
            </div>
            <div class="form-group">
                <label for="">Nội dung</label>
                <input type="text" name="description" class="form-control" value="{{ $objItem->description }}">
            </div>
        <div class='form-group'>
            <label for="">Trạng thái</label>
            <input type="radio" name='status' value="1" {{(isset($objItem) && $objItem->status === 1) ? 'checked' : ''}}>Kích hoạt
            <input type="radio" name='status' value="0" {{(isset($objItem) && $objItem->status === 0) ? 'checked' : ''}}>K kích hoạt
        </div>
        <div>
            <button type="submit" class='btn btn-primary'>Cập nhật</button>
            <a class="btn btn-warning" href="{{ route('route_BackEnd_New_index') }}">Quay lại</a>
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