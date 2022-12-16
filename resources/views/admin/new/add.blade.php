@extends('templates.layout')

@section('title', 'Thêm bài viết')

@section('content-title', 'Thêm bài viết')

@section('content')
    {{-- @if ($errors->any())
        <ul class='danger'>
            @foreach ($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
        @endif --}}
    <form action="" method="post" enctype="multipart/form-data">
        @csrf
        <div class='form-group'>
            <label for="">Tiêu đề</label>
            <input type="text" name='title' class='form-control'
                value="@isset($request['title']){{ $request['title'] }}@endisset">
        </div>
        <div class='form-group'>
            <label for="">Ảnh</label>
            <input type="file" name="cmt_mat_truoc"
                class="form-control @error('cmt_mat_truoc') is-invalid @enderror" id="cmt_truoc">
        </div>
        <div class="form-group">
            <label for="">Nội dung</label>
            <textarea name="description" id="" class="form-control" placeholder="Mô tả" cols="30" rows="5" value="@isset($request['description']){{ $request['description'] }}@endisset"></textarea>
        </div>
        <div class="form-group">
            <label>Danh mục bài viết</label>
            <select class="form-control" name="cate_new_id">
                @foreach ($list_cate_new as $list)
                    <option value="{{$list->id}}">
                    {{$list->name}}
                    </option>
                @endforeach
            </select>
        </div>
        <div class='form-group'>
            <label for="">Trạng thái</label>
            <input type="radio" name='status' value="1" {{ isset($modelTes) && $modelTes->status === 1 ? 'checked' : '' }}>Kích hoạt
            <input type="radio" name='status' value="0" {{ isset($modelTes) && $modelTes->status === 0 ? 'checked' : '' }}>Không kích hoạt
        </div>

        <div>
            <button type="submit" class='btn btn-primary'>Thêm mới</button>
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