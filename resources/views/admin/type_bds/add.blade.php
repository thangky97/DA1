@extends('templates.layout')

@section('title', 'Thêm loại bất động sản')

@section('content-title', 'Thêm loại BDS')

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
            <label for="">Tên loại bất động sản</label>
            <input type="text" name='name' class='form-control'
                value="@isset($request['name']){{ $request['name'] }}@endisset">
        </div>
        <div class='form-group'>
            <label for="">Trạng thái</label>
            <input type="radio" name='status' value="1" {{ isset($modelTes) && $modelTes->status === 1 ? 'checked' : '' }}>Kích hoạt
            <input type="radio" name='status' value="0" {{ isset($modelTes) && $modelTes->status === 0 ? 'checked' : '' }}>Không kích hoạt
        </div>

        <div>
            <button type="submit" class='btn btn-primary'>Thêm mới</button>
            <a class="btn btn-warning" href="{{ route('route_BackEnd_Type_Bds_index') }}">Quay lại</a>
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