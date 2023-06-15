@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="text-center">Chi tiết chuyến bay</h1>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Số hiệu chuyến bay</th>
                <th scope="col">Mã máy bay</th>
                <th scope="col">Sân bay khởi hành</th>
                <th scope="col">Sân bay đến</th>
                <th scope="col">Thời gian khởi hành</th>
                <th scope="col">Thời gian đến</th>
                <th scope="col">Thời gian dự kiến</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">{{$flight->Flight_ID }}</th>
                <td>{{$flight->Aircraft_ID}}</td>
                <td>{{$flight->Departure_Airport}}</td>
                <td>{{$flight->Arrival_Airport}}</td>
                <td>{{$flight->Departute_Time}}</td>
                <td>{{$flight->Arrival_Time}}</td>
                <td>{{$flight->Flight_Duration}}</td>
            </tr>
        </tbody>
    </table>
    <a href="/flights" class="btn btn-success">Trang chủ</a>
</div>
@endsection