@extends('templates.layout')

@section('title', 'Thêm bất user')

@section('content-title', 'Thêm user')

@section('content')
    <form action="" method="post" enctype="multipart/form-data">
        @csrf
        <div class='form-group'>
            <label for="">Tên</label>
            <input type="text" name='name' class='form-control'
                value="@isset($request['name']){{ $request['name'] }}@endisset">
        </div>
        <div class='form-group'>
            <label for="">Email</label>
            <input type="text" name='email' class='form-control'
                value="@isset($request['email']){{ $request['email'] }}@endisset">
        </div>
        <div class='form-group'>
            <label for="">Password</label>
            <input type="text" name='password' class='form-control'
                value="@isset($request['password']){{ $request['password'] }}@endisset">
        </div>
        <div class='form-group'>
            <label for="">Ảnh</label>
            <input type="file" name="cmt_mat_truoc" class="form-control @error('cmt_mat_truoc') is-invalid @enderror"
                id="cmt_truoc">
        </div>
        <div class='form-group'>
            <label for="">Ngày sinh</label>
            <input type="number" name='birthday' class='form-control'
                value="@isset($request['birthday']){{ $request['birthday'] }}@endisset">
        </div>
        <div class='form-group'>
            <label for="">Địa chỉ</label>
            <input type="number" name='address' class='form-control'
                value="@isset($request['address']){{ $request['address'] }}@endisset">
        </div>
        <div class='form-group'>
            <label for="">Số điện thoại</label>
            <input type="number" name='phone' class='form-control'
                value="@isset($request['phone']){{ $request['phone'] }}@endisset">
        </div>
        <div class="form-group">
            <label>Quyền</label>
            <select class="form-control" name="role">
                <option value="1">Admin</option>
                <option value="0">Khách hàng</option>
            </select>
        </div>
        <div class='form-group'>
            <label for="">Trạng thái</label>
            <input type="radio" name='status' value="1"
                {{ isset($modelTes) && $modelTes->status === 1 ? 'checked' : '' }}>Kích hoạt
            <input type="radio" name='status' value="0"
                {{ isset($modelTes) && $modelTes->status === 0 ? 'checked' : '' }}>Không kích hoạt
        </div>

        <div>
            <button type="submit" class='btn btn-primary'>Thêm mới</button>
            <a class="btn btn-warning" href="{{ route('route_BackEnd_User_index') }}">Quay lại</a>
        </div>
    </form>
@endsection
@section('script')
    <script src="{{ asset('default/plugins/input-mask/jquery.inputmask.js') }}"></script>
    <script src="{{ asset('default/plugins/input-mask/jquery.inputmask.date.extensions.js') }}"></script>
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
