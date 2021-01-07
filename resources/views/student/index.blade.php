@extends('layout.layout')

@section('content')
    <section>
        <div class="container">
            <div class="col-md-12">
               <div class="col-md-12 row">
                   <div class="col-md-5" style="margin-top: 10px">
                       <a href="{{url("student/create")}}">
                           <button type="button" class="btn btn-success">Add Student</button>
                       </a>
                   </div>
                   <div class="col-md-7">
                       <h1>List Student</h1>
                   </div>
               </div>
            </div>
            <div class="col-md-12">
                <table class="table">
                    <thead>
                    <tr>
                        <th scope="col">id</th>
                        <th scope="col">Name</th>
                        <th scope="col">Age</th>
                        <th scope="col">Gender</th>
                        <th scope="col">Birth</th>
                        <th scope="col">Country</th>
                        <th scope="col"></th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($students as $s)
                        <tr>
                            <th scope="row">{{$s->id}}</th>
                            <td>{{$s->name}}</td>
                            <td>{{$s->age}}</td>
                            <td>{{$s->gender}}</td>
                            <td>{{$s->birth}}</td>
                            <td>{{$s->country}}</td>
                            <td>
                                <a href="{{url("student/detail",['id'=>$s->id])}}">
                                    <button class="btn btn-sm btn-info">detail</button>
                                </a>
                                <a href="{{url("student/delete",['id'=>$s->id])}}">
                                    <button class="btn btn-sm btn-danger">delete</button>
                                </a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
                {{ $students->links() }}
            </div>
        </div>
    </section>

@endsection
