@extends('frontend.template.app')

@section('content')
    <div style="background-image:url('img/bg.jpg'); height:85vh; width:100%;" >
        <div class="pt-md-5 pt-0">
            <h1 class="text-center font-weight-bold" style="font-family:Roboto; color:white;">Want to Find a Donor Near You?</h1>
            <p class="text-center text-white" style="font-size:20px;">Search By Blood Type</p>
            <form class="text-center" >
                <select name="" id="" class="form-control w-50 mx-auto mt-md-3 mt-0 " placeholder="Search Blood Group">
                    <option value="1">A+ve</option>
                    <option value="2">A-ve</option>
                    <option value="3">B+ve</option>
                    <option value="4">B-ve</option>
                    <option value="4">AB+ve</option>
                    <option value="4">AB-ve</option>
                    <option value="4">O+ve</option>
                    <option value="4">O-ve</option>
                </select>
                <button class="btn btn-success mt-md-2 mt-0 text-center mt-md-3 mt-0" type="submit">Search</button>
            </form>
        </div>
    </div>
@endsection