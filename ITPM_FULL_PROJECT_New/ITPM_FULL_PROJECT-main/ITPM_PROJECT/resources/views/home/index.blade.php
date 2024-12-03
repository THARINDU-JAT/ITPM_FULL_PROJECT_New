@extends('layout.app')

@section('content')

<section class="section">
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Order Id genaration</title>
    <link rel="stylesheet" href="{{asset('bootstrap-5/css/bootstrap.min.css')}}">

    <style>
        .alert-hidden {
    display: none;
}


    </style>
</head>
<body>

<div class="container">
    <div class="row" style="margin-top:45px">
       <div class="col-md-6 offset-md-3">
       <h4>Genarate Order Id</h4><hr>
          <form action="{{ route('save') }}" method="post">
          @csrf
            @if(Session::get('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert" >
                        {{ Session::get('success') }}
                    </div>

                   
            @endif
            @if(Session::get('fail'))
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    {{ Session::get('fail') }}
                </div>
            @endif

             <div class="form-group">
                  <label for="name"></label>
                  <input type="text" id="name" class="form-control" name="name" placeholder="Enterrequirment">
                  <span class="text-danger">@error('name'){{ $message }}@enderror</span>
             </div>

             <div class="form-group">
             <br>
               <button type="submit" class="btn btn-primary">Save</button>
             </div>
          </form>
       </div>
    </div>
    <div class="row" style="margin-top:25px">
    <div class="col-md-6 offset-md-3">
       <h4>Add new Order ID</h4><hr>
       <div class="table-responsive">
       @if ( count($students ?? '') > 0 )
       @php
           $i=1;
       @endphp
       <table class="table table-sm m-0">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Order ID</th>
                        <th>Name</th>

                    </tr>
                </thead>
                <tbody>

                @foreach ($students ?? '' as $student )
                    <tr>
                        <th>{{ $i++}}</th>
                        <td>{{$student->student_id}}</td>
                        <td>{{$student->name}}</td>

                    </tr>
                    @endforeach
                </tbody>
            </table>

       @else
           <code>No student found!</code>
       @endif


         </div>
       </div>
    </div>
</div>
</body>
</html>
</section>
@endSection
