@extends('templates.layout')

@section('title', 'Sửa bất động sản')

@section('content-title', 'Sửa BDS')

@section('content')
    {{-- @if ($errors->any())
        <ul class='danger'>
            @foreach ($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
        @endif --}}
    <form action="{{ route('route_BackEnd_Bds_update', ['id' => request()->route('id')]) }}" method="post"
        enctype="multipart/form-data">
        @csrf
        <div class='form-group'>
            <label for="">Tên</label>
            <input type="text" name='name' class='form-control' value="{{ $objItem->name }}">
        </div>
        <div class='form-group'>
            <label for="">Giá</label>
            <input type="text" name='price' class='form-control' value="{{ $objItem->price }}">
        </div>
        <div class='form-group'>
            <label for="">Địa chỉ</label>
            <input type="text" name='address' class='form-control' value="{{ $objItem->address }}">
        </div>
        <div class='form-group'>
            <label for="">Ảnh</label>
            <input type="file" name="cmt_mat_truoc" class="form-control @error('cmt_mat_truoc') is-invalid @enderror"
                id="cmt_truoc">
            <img src="{{ $objItem->images ? '' . Storage::url($objItem->images) : 'http://placehold.it/100x100' }}"
                alt="your image" style="max-width: 200px; height:100px; margin-bottom: 10px;" class="img-responsive" />
        </div>
        <div class='form-group'>
            <label for="">Số tầng</label>
            <input type="number" name='so_tang' class='form-control' value="{{ $objItem->so_tang }}">
        </div>
        <div class='form-group'>
            <label for="">Số phòng</label>
            <input type="number" name='so_phong' class='form-control' value="{{ $objItem->so_phong }}">
        </div>
        <div class='form-group'>
            <label for="">Số tollet</label>
            <input type="number" name='so_tollet' class='form-control' value="{{ $objItem->so_tollet }}">
        </div>
        <div class='form-group'>
            <label for="">Tình trạng bất động sản</label>
            <input type="text" name='tinh_trang_bds' class='form-control' value="{{ $objItem->tinh_trang_bds }}">
        </div>
        <div class='form-group'>
            <label for="">Hướng nhà</label>
            <input type="text" name='huong_nha' class='form-control' value="{{ $objItem->huong_nha }}">
        </div>
        <div class='form-group'>
            <label for="">Diện tích</label>
            <input type="number" name='spread' class='form-control' value="{{ $objItem->spread }}">
        </div>
        <div class='form-group'>
            <label for="">Tiêu đề</label>
            <input type="text" name='title' class='form-control' value="{{ $objItem->title }}">
        </div>
        <div class="form-group">
            <label for="">Nội dung</label>
            <input type="text" name="content" class="form-control" placeholder="Mô tả ngắn"
                value="{{ $objItem->content }}">
        </div>
        <div class='form-group'>
            <label for="">Trạng thái</label>
            <input type="radio" name='status' value="1"
                {{ isset($objItem) && $objItem->status === 1 ? 'checked' : '' }}>Kích hoạt
            <input type="radio" name='status' value="0"
                {{ isset($objItem) && $objItem->status === 0 ? 'checked' : '' }}>K kích hoạt
        </div>

        <div>
            <button type="submit" class='btn btn-primary'>Cập nhật</button>
            <a class="btn btn-warning" href="{{ route('route_BackEnd_Bds_index') }}">Quay lại</a>
        </div>
    </form>
@endsection
@section('script')
    <script>
        $(function() {
            function readURL(input, selector) {
                if (input.files && input.files[0]) {
                    let reader = new FileReader();

                    reader.onload = function(e) {
                        $(selector).attr('src', e.target.result);
                    };

                    reader.readAsDataURL(input.files[0]);
                }
            }
            $("#cmt_truoc").change(function() {
                readURL(this, '#mat_truoc_preview');
            });

        });
    </script>
@endsection
