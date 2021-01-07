@extends('layout.layout')

@section('content')
    <section>
        <div class="container">
            <div class="col-md-12 border border-danger" style="margin-top: 50px">
                <div class="text-center">
                    <h3>Info student : <b style="color: red">#{{$students->id}}</b></h3>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item"><b>Name : </b>{{$students->name}}</li>
                    <li class="list-group-item"><b>Age : </b>{{$students->age}}</li>
                    <li class="list-group-item"><b>Gender : </b>{{$students->gender}}</li>
                    <li class="list-group-item"><b>Date Of Birth : </b>{{$students->birth}}</li>
                    <li class="list-group-item"><b>Address : </b>{{$students->country}}</li>
                    <li class="list-group-item">
                        <a href="{{url("student/edit",['id'=>$students->id])}}">
                            <button class="btn btn-warning">Edit Info</button>
                            <a href="{{url("student/index")}}">Cancel</a>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </section>
@endsection
