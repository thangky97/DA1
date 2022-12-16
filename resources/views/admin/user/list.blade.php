@extends('templates.layout')

@section('title', 'Danh sách users')

@section('content-title', 'Danh sách users')

@section('content')
    <div class='my-3'>
        <a href="{{ route('route_BackEnd_User_add') }}">
            <button class='btn btn-success btn-sm'>Tạo mới</button>
        </a>
    </div>
    <caption>
        <form action="" method="get">
            @csrf
            <input type="search" name="name" placeholder="search" value="" class="form-control">
        </form>
    </caption>
    <table class='table'>
        <thead>
            <tr>
                <th class="text-center">ID</th>
                <th class="text-center">Tên </th>
                <th class="text-center">email </th>
                <th class="text-center">Ảnh </th>
                <th class="text-center">Ngày sinh </th>
                <th class="text-center">Phone </th>
                <th class="text-center">Quyền </th>
                <th class="text-center">Status</th>
                <th class="text-center">Hành động</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
                <tr>
                    <td class="text-center">{{ $user->id }}</td>
                    <td class="text-center">{{ $user->name }}</td>
                    <td class="text-center">{{ $user->email }}</td>
                    <td class="text-center"><img
                        src="{{ $user->avatar ? '' . Storage::url($user->avatar) : 'http://placehold.it/100x100' }}"
                        alt="your image" style="max-width: 200px; height:100px; margin-bottom: 10px;"
                        class="img-responsive" /> </td>
                    <td class="text-center">{{ $user->birthday }}</td>
                    <td class="text-center">{{ $user->phone }}</td>
                    <td class="text-center">
                        @if ($user->role === 1)
                                Admin
                            @else
                                User
                            @endif
                    </td>
                    <td class="text-center">
                        <button class="toggle-class" class="btn btn-info"><input data-id="{{$user->id}}" class="toggle-class" type="checkbox" data-onstyle="success" data-offstyle="danger" data-toggle="toggle" data-on="Active" data-off="InActive" {{ $user->status ? 'checked' : '' }}> 
                            @if ($user->status === 1)
                                Hiện
                            @else
                                Ẩn
                            @endif
                        </button>
                    </td>
                    <td class="text-center">
                        <a href="{{ route('route_BackEnd_User_edit', ['id' => $user->id]) }}">
                            <button class='btn btn-primary btn-sm'>Chỉnh sửa</button>
                        </a>
                        <a href="{{ route('route_BackEnd_User_delete', ['id' => $user->id]) }}">
                        <button class='btn btn-danger btn-sm' onclick="return confirm('bạn có chắc muốn xóa không?')">Xoá</button>
                        </a>
                    </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <div class="text-center">
        {{ $users->appends($extParams)->links() }}
    </div>
    <script>
        $(function() {
            $('.toggle-class').change(function() {
                var status = $(this).prop('checked') == true ? 1 : 0;
                var id = $(this).data('id');
                $.ajax({
                    type: "GET",
                    dataType: "json",
                    url: '/admin/products/changeStatus',
                    data: {
                        'status': status,
                        'id': id
                    },
                    success: function(data) {
                        console.log(data.success)
                    }
                });
            })
        })
    </script>
@endsection
