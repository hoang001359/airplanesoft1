@extends('layouts.app')
@section('content')


<div class="container">
    <h1 class="text-center">Quản lý chuyến bay</h1>
    <a id='addLink' href="{{ route('flights.addFlight') }}" class="btn btn-success">Thêm chuyến bay</a>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Số hiệu chuyến bay</th>
                <th scope="col">Sân bay khởi hành</th>
                <th scope="col">Sân bay đến</th>
                <th scope="col">Chức năng</th>
            </tr>
        </thead>
        <tbody>
            @foreach($flights as $flight)
            <tr>
                <th scope="row">{{$flight->Flight_ID}}</th>
                <td>{{$flight->Departure_Airport}}</td>
                <td>{{$flight->Arrival_Airport}}</td>
                <td>
                    <a href="{{route('flights.editFlight',['id' => $flight->Flight_ID])}}" class = "btn btn-primary ">Sửa</a>
                    <form action="{{ route('flights.deleteFlight',['id' => $flight->Flight_ID]) }}" class="d-inline">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger"
                            onclick="return confirm('Bạn có chắc chắn muốn xóa bản ghi này?')">Xóa</button>
                    </form>
                    <a href="{{route('flights.showFlight',['id' => $flight->Flight_ID])}}" class = "btn btn-info" >Chi tiết</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <p>Trang hiện tại: {{$flights ->currentPage() }} trong {{ $flights->lastPage()}}</p>
    @for($i=1; $i<=$flights->lastPage(); $i++)
    <a id = "pageNumber"href="{{ $flights->url($i) }}">{{ $i  }}</a>
    @endfor
</div>
@endsection