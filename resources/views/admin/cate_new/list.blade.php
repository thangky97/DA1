@extends('templates.layout')

@section('title', 'Danh sách tin tức')

@section('content-title', 'Danh mục tin tức')

@section('content')
    <div class='my-3'>
        <a href="{{ route('route_BackEnd_Cate_New_add') }}">
            <button class='btn btn-success btn-sm'>Tạo mới</button>
        </a>
    </div>
    {{-- <caption>
        <form action="" method="get">
            @csrf
            <input type="search" name="name" placeholder="search" value="" class="form-control">
        </form>
    </caption> --}}
    <table class='table'>
        <thead>
            <tr>
                <th class="text-center">ID</th>
                <th class="text-center">Tiêu đề</th>
                <th class="text-center">Status</th>
                <th class="text-center">Hành động</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($cate_new as $cate)
                <tr>
                    <td class="text-center">{{ $cate->id }}</td>
                    <td class="text-center">{{ $cate->name }}</td>
                    <td class="text-center">
                        <button class="toggle-class" class="btn btn-info"><input data-id="{{$cate->id}}" class="toggle-class" type="checkbox" data-onstyle="success" data-offstyle="danger" data-toggle="toggle" data-on="Active" data-off="InActive" {{ $cate->status ? 'checked' : '' }}> 
                            @if ($cate->status === 1)
                                Hiện
                            @else
                                Ẩn
                            @endif
                        </button>
                    </td>
                    <td class="text-center">
                        <a href="{{ route('route_BackEnd_Cate_New_edit', ['id' => $cate->id]) }}">
                            <button class='btn btn-primary btn-sm'>Chỉnh sửa</button>
                        </a>
                        <a href="{{ route('route_BackEnd_Cate_New_delete', ['id' => $cate->id]) }}">
                        <button class='btn btn-danger btn-sm' onclick="return confirm('bạn có chắc muốn xóa không?')">Xoá</button>
                        </a>
                    </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <div class="text-center">
        {{ $cate_new->appends($extParams)->links() }}
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
