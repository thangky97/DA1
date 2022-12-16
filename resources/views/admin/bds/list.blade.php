@extends('templates.layout')

@section('title', 'Danh sách bất động sản')

@section('content-title', 'Danh sách BDS')

@section('content')
    <div class='my-3'>
        <a href="{{ route('route_BackEnd_Bds_add') }}">
            <button class='btn btn-success btn-sm'>Tạo mới</button>
        </a>
    </div>
    <caption>
        <form action="{{ route('route_BackEnd_Bds_index') }}" method="get">
            @csrf
            <input type="search" name="name" placeholder="search" value="" class="form-control">
        </form>
    </caption>
    <table class='table'>
        <thead>
            <tr>
                <th class="text-center">ID</th>
                <th class="text-center">Tên dự án</th>
                <th class="text-center">Ảnh</th>
                <th class="text-center">Giá</th>
                <th class="text-center">Số tầng</th>
                <th class="text-center">Số phòng</th>
                <th class="text-center">Số tollet</th>
                <th class="text-center">Tình trạng</th>
                <th class="text-center">Hướng nhà</th>
                <th class="text-center">Diện tích</th>
                <th class="text-center">Loại BDS</th>
                <th class="text-center">Status</th>
                <th class="text-center">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($bds as $list)
                <tr>
                    <td class="text-center">{{ $list->id }}</td>
                    <td class="text-center">{{ $list->name }}</td>
                    <td class="text-center"><img
                        src="{{ $list->images ? '' . Storage::url($list->images) : 'http://placehold.it/100x100' }}"
                        alt="your image" style="max-width: 200px; height:100px; margin-bottom: 10px;"
                        class="img-responsive" /> </td>
                    <td class="text-center">{{ number_format($list->price) }} VND</td>
                    <td class="text-center">{{ $list->so_tang }}</td>
                    <td class="text-center">{{ $list->so_phong }}</td>
                    <td class="text-center">{{ $list->so_tollet }}</td>
                    <td class="text-center">{{ $list->tinh_trang_bds }}</td>
                    <td class="text-center">{{ $list->huong_nha }}</td>
                    <td class="text-center">{{ $list->spread }} m²</td>
                    <td class="text-center">{{ $list->cateName }}</td>
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
                        <a href="{{ route('route_BackEnd_Bds_edit', ['id' => $list->id]) }}">
                            <button class='btn btn-primary btn-sm'>Chỉnh sửa</button>
                        </a>
                        <a href="{{ route('route_BackEnd_Bds_delete', ['id' => $list->id]) }}">
                        <button class='btn btn-danger btn-sm' onclick="return confirm('bạn có chắc muốn xóa không?')">Xoá</button>
                        </a>
                    </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <div>
        {{ $bds->appends($extParams)->links() }}
    </div>
@endsection
@section('script')
    <script>
        $(function() {
            $('.toggle-class').change(function() {
                var status = $(this).prop('checked') == true ? 1 : 0;
                var id = $(this).data('id');
                $.ajax({
                    type: "GET",
                    dataType: "json",
                    url: '/admin/bds/changeStatus',
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
