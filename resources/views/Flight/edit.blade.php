@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="text-center">Chỉnh sửa chuyến bay</h1>
    <form action="{{route('flights.updateFlight',['id'=>$flight->Flight_ID])}}" method="post">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col-md-8 form-control " id="Flight_ID">
                <div class="labelTitle">
                    <label for="Flight_ID">Mã chuyến bay</label>
                </div>
                <div class="inputTitle " >
                    <input readonly class="form-control bg-secondary" type="text" name="Flight_ID" value="{{$flight->Flight_ID}}">
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-8 form-control" id="Aircraft_ID">
                <div class="labelTitle">
                    <label for="Aircraft_ID">Mã máy bay</label>
                </div>
                <div class="inputTitle">
                    <input class="form-control" type="text" name="Aircraft_ID" value="{{$flight->Aircraft_ID}}">

                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-8 form-control" id="Departure_Airport">
                <div class="labelAuthor">
                    <label for="txtAuthor">Sân bay khởi hành</label>
                </div>
                <div class="inputAuthor">
                    <input class="form-control" type="text" name="Departure_Airport" value="{{$flight->Departure_Airport}}">
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-8 form-control" id="Arrival_Airport">
                <div class="labelAuthor">
                    <label for="txtAuthor">Sân bay đến</label>
                </div>
                <div class="inputAuthor">
                    <input class="form-control" type="text" name="Arrival_Airport" value="{{$flight->Arrival_Airport}}">
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-8 form-control" id="Departute_Time">
                <div class="labelAuthor">
                    <label for="txtAuthor">Thời gian khởi hành</label>
                </div>
                <div class="inputAuthor">
                    <input class="form-control" type="date" name="Departute_Time" value="{{$flight->Departute_Time}}">
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-8 form-control" id="Arrival_Time">
                <div class="labelAuthor">
                    <label for="txtAuthor">Thời gian đến</label>
                </div>
                <div class="inputAuthor">
                    <input class="form-control" type="date" name="Arrival_Time" value="{{$flight->Arrival_Time}}">
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-8 form-control" id="Flight_Duration">
                <div class="labelAuthor">
                    <label for="txtAuthor">Thời gian dự kiến</label>
                </div>
                <div class="inputAuthor">
                    <input class="form-control" type="time" name="Flight_Duration" value="{{$flight->Flight_Duration}}">
                </div>
            </div>
        </div>

        <button type="submit" class="btn btn-success ">Submit</button>
    </form>
</div>




@endsection