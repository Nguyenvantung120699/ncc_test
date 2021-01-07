@extends('layout.layout')

@section('content')
    <section>
        <div class="container">
            <div class="col-md-12">
                <div class="col-md-12 border border-info" style="margin-top: 50px">
                    <div class="text-center">
                        <h3>Form Create Student</h3>
                    </div>
                    <form action="{{url("student/store")}}" method="post" style="margin: 20px 20px 20px 20px">
                        @csrf
                        <div class="form-row">
                            <div class="form-group col-md-8">
                                <label for="inputEmail4">Name</label>
                                <input type="text" name="name" value="{{old("name")}}" class="form-control" id="inputEmail4" placeholder="Name" required>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="inputPassword4">Age</label>
                                <input type="number" name="age" value="{{old("age")}}" class="form-control" id="inputPassword4" placeholder="Age" required>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="inputGender">Gender</label>
                                <select id="inputGender" name="gender" class="form-control">
                                    <option selected></option>
                                    <option value="male">Male</option>
                                    <option value="female">Female</option>
                                    <option value="other">Other</option>
                                </select>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="birth">Birth</label>
                                <input type="date" name="birth" class="form-control" value="{{old("birth")}}" id="birth" value="01/01/2020" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="country">Country</label>
                            <input type="text" name="country" value="{{old("country")}}" class="form-control" id="country" placeholder="Country" required>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                        <a href="{{url('student/index')}}">Cancel</a>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
