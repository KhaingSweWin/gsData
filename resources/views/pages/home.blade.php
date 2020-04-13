@extends('layouts.master')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
           <h2>Google Sheet Data</h2> 
          
            <table class="table table-bordered">
                <thead>
                    <tr>    
                        <td>   Name </td>
                        <td>   Age </td>
                        <td>   Address </td>
                        <td>   MobilePhone </td>
                    </tr>
                </thead>
                @foreach($data as $item)
                <tr>    
                    <td> {{$item->name}}</td>
                    <td> {{$item->age}}</td>
                    <td> {{$item->address}}</td>
                    <td> {{$item->mobilephone}}</td>
                </tr>

                @endforeach
            </table>

          
        </div>
    </div>
</div>
@endsection