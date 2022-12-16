@extends('templates.layout')

@section('title', 'Thêm bất động sản')

@section('content-title', 'Thêm BDS')

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
            <label for="">Tên</label>
            <input type="text" name='name' class='form-control'
                value="@isset($request['name']){{ $request['name'] }}@endisset">
        </div>
        <div class='form-group'>
            <label for="">Giá</label>
            <input type="text" name='price' class='form-control'
                value="@isset($request['price']){{ $request['price'] }}@endisset">
        </div>
        <div class='form-group'>
            <label for="">Địa chỉ</label>
            <input type="text" name='address' class='form-control'
                value="@isset($request['address']){{ $request['address'] }}@endisset">
        </div>
        <div class='form-group'>
            <label for="">Ảnh</label>
            <input type="file" name="cmt_mat_truoc"
                class="form-control @error('cmt_mat_truoc') is-invalid @enderror" id="cmt_truoc">
        </div>
        <div class='form-group'>
            <label for="">Số tầng</label>
            <input type="number" name='so_tang' class='form-control'
                value="@isset($request['so_tang']){{ $request['so_tang'] }}@endisset">
        </div>
        <div class='form-group'>
            <label for="">Số phòng</label>
            <input type="number" name='so_phong' class='form-control'
                value="@isset($request['so_phong']){{ $request['so_phong'] }}@endisset">
        </div>
        <div class='form-group'>
            <label for="">Số tollet</label>
            <input type="number" name='so_tollet' class='form-control'
                value="@isset($request['so_tollet']){{ $request['so_tollet'] }}@endisset">
        </div>
        <div class='form-group'>
            <label for="">Tình trạng bất động sản</label>
            <input type="text" name='tinh_trang_bds' class='form-control'
                value="@isset($request['tinh_trang_bds']){{ $request['tinh_trang_bds'] }}@endisset">
        </div>
        <div class='form-group'>
            <label for="">Hướng nhà</label>
            <input type="text" name='huong_nha' class='form-control'
                value="@isset($request['huong_nha']){{ $request['huong_nha'] }}@endisset">
        </div>
        <div class='form-group'>
            <label for="">Diện tích</label>
            <input type="number" name='spread' class='form-control'
                value="@isset($request['spread']){{ $request['spread'] }}@endisset">
        </div>
        <div class='form-group'>
            <label for="">Tiêu đề</label>
            <input type="text" name='title' class='form-control'
                value="@isset($request['title']){{ $request['title'] }}@endisset">
        </div>
        <div class="form-group">
            <label for="">Nội dung</label>
            <textarea name="content" id="" cols="30" rows="5" class="form-control" value="@isset($request['content']){{ $request['content'] }}@endisset"></textarea>
            
        </div>
        <div class="form-group">
            <label>Loại BDS</label>
            <select class="form-control" name="type_bds_id">
                @foreach ($list_type_bds as $list)
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
            <a class="btn btn-warning" href="{{ route('route_BackEnd_Bds_index') }}">Quay lại</a>
        </div>
    </form>
@endsection
@section('script')
<script src="{{ asset('default/plugins/input-mask/jquery.inputmask.js') }}"></script>
    <script src="{{ asset('default/plugins/input-mask/jquery.inputmask.date.extensions.js') }}"></script>
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