@extends('templates.layout')

@section('title', 'Danh sách tư vấn')

@section('content-title', 'Danh sách tư vấn')

@section('content')
    <div class='my-3'>
        <a href="">
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
                <th class="text-center">Thời gian </th>
                <th class="text-center">SĐT </th>
                <th class="text-center">Bất động sản </th>
                <th class="text-center">Nhân viên tư vấn </th>
                <th class="text-center">Status</th>
                <th class="text-center">Hành động</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($tu_van as $tv)
                <tr>
                    <td class="text-center">{{ $tv->id }}</td>
                    <td class="text-center">{{ $tv->name }}</td>
                    <td class="text-center">{{ $tv->time }}</td>
                    <td class="text-center">{{ $tv->phone }}</td>
                    <td class="text-center">{{ $tv->bds_id }}</td>
                    <td class="text-center">{{ $tv->nv_id }}</td>
                    <td class="text-center">
                            @if ($tv->status === 1)
                                Đã tư vấn
                            @else 
                                Chưa tư vấn
                            @endif
                    </td>
                    <td class="text-center">
                        <a href="">
                            <button class='btn btn-primary btn-sm'>Chỉnh sửa</button>
                        </a>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <div class="text-center">
        {{ $tu_van->appends($extParams)->links() }}
    </div>
@endsection
