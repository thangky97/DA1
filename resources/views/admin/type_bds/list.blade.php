@extends('templates.layout')

@section('title', 'Danh sách loại bất động sản')

@section('content-title', 'Danh sách loại BDS')

@section('content')
    <div class='my-3'>
        <a href="{{ route('route_BackEnd_Type_Bds_add') }}">
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
                <th class="text-center">Tên loại bất động sản</th>
                <th class="text-center">Status</th>
                <th class="text-center">Hành động</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($type_bds as $list)
                <tr>
                    <td class="text-center">{{ $list->id }}</td>
                    <td class="text-center">{{ $list->name }}</td>
                    <td class="text-center">
                        <button class="toggle-class" class="btn btn-info"><input data-id="{{$list->id}}" class="toggle-class" type="checkbox" data-onstyle="success" data-offstyle="danger" data-toggle="toggle" data-on="Active" data-off="InActive" {{ $list->status ? 'checked' : '' }}> 
                            @if ($list->status === 1)
                                Hiện
                            @else
                                Ẩn
                            @endif
                        </button>
                    </td>
                    <td class="text-center">
                        <a href="{{ route('route_BackEnd_Type_Bds_edit', ['id' => $list->id]) }}">
                            <button class='btn btn-primary btn-sm'>Chỉnh sửa</button>
                        </a>
                        <a href="{{ route('route_BackEnd_Type_Bds_delete', ['id' => $list->id]) }}">
                        <button class='btn btn-danger btn-sm' onclick="return confirm('bạn có chắc muốn xóa không?')">Xoá</button>
                        </a>
                    </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <div class="text-center">
        {{ $type_bds->appends($extParams)->links() }}
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
