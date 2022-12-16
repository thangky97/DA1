@extends('templates.layout')

@section('title', 'Sửa user')

@section('content-title', 'Sửa user')

@section('content')
    {{-- @if ($errors->any())
        <ul class='danger'>
            @foreach ($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
        @endif --}}
    <form action="{{ route('route_BackEnd_User_update', ['id'=>request()->route('id')]) }}" method="post" enctype="multipart/form-data">
            @csrf
        <div class='form-group'>
            <label for="">Tên</label>
            <input type="text" name='name' class='form-control'
            value="{{ $objItem->name }}">
        </div>
        <div class='form-group'>
            <label for="">Email</label>
            <input type="text" name='email' class='form-control'
                value="{{ $objItem->email }}">
        </div>
        <div class='form-group'>
            <label for="">Password</label>
            <input type="text" name='password' class='form-control'
                value="{{ $objItem->password }}">
        </div>
        <div class='form-group'>
            <label for="">Ảnh</label>
            <input type="file" name="cmt_mat_truoc" class="form-control @error('cmt_mat_truoc') is-invalid @enderror"
                id="cmt_truoc">
                <img src="{{ $objItem->avatar ? '' . Storage::url($objItem->avatar) : 'http://placehold.it/100x100' }}"
                alt="your image" style="max-width: 200px; height:100px; margin-bottom: 10px;" class="img-responsive" />
        </div>
        <div class='form-group'>
            <label for="">Ngày sinh</label>
            <input type="date" name='birthday' class='form-control'
                value="{{ $objItem->birthday }}">
        </div>
        <div class='form-group'>
            <label for="">Địa chỉ</label>
            <input type="text" name='address' class='form-control'
                value="{{ $objItem->address }}">
        </div>
        <div class='form-group'>
            <label for="">Số điện thoại</label>
            <input type="number" name='phone' class='form-control'
                value="{{ $objItem->phone }}">
        </div>
        <div class='form-group'>
            <label for="">Quyền</label>
            <input type="radio" name='role' value="1" {{(isset($objItem) && $objItem->role === 1) ? 'checked' : ''}}>Admin
            <input type="radio" name='role' value="0" {{(isset($objItem) && $objItem->role === 0) ? 'checked' : ''}}>User
        </div>
        <div class='form-group'>
            <label for="">Trạng thái</label>
            <input type="radio" name='status' value="1" {{(isset($objItem) && $objItem->status === 1) ? 'checked' : ''}}>Kích hoạt
            <input type="radio" name='status' value="0" {{(isset($objItem) && $objItem->status === 0) ? 'checked' : ''}}>K kích hoạt
        </div>

        <div>
            <button type="submit" class='btn btn-primary'>Cập nhật</button>
            <a class="btn btn-warning" href="{{ route('route_BackEnd_User_index') }}">Quay lại</a>
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