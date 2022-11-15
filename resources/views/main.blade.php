@extends('layout.temp')

@section('title', 'SKINARIA')

@section('content')
    @include('layout.navbar')

    <style>
        body{
            background-color: slateblue;
        }
    </style>
    <div class="d-flex justify-content-around" style="margin-top: 210px" >
    @for($i = 0; $i < count($skinname); $i++)
    <div class="card" style="width: 25rem;" >
        <img class="card-img-top" src={{$image[$i]}} alt="Card image cap">

        <div class="card-body" style="background: lavender">
            <h4 class="card-text">{{$skinname[$i]}}</h4>
            <p>Price: {{$price[$i]}}</p>
            @if($price[$i] == "Rp 175.000")
            <div class="alert alert-success d-inline-bock" style="text-align:center">
                Available now!
            </div>
            @elseif($price[$i] == "Rp 125.000")
            <div class="alert alert-success d-inline-bock" style="text-align:center">
                Discount 20%
            </div>
            @else
            <div class="alert alert-danger d-inline-bock" style="text-align: center">
                Almost run out!
            </div>

            @endif
        </div>
    </div>
    @endfor
    </div>

<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

@endsection
