<!DOCTYPE html>
<html>
@extends('dashboard')
@section('content')
<style>
  
  table,tr,td,th
    {
      /*border:2px solid;*/
      border-collapse: collapse;
      padding: 10px;
      margin: 80px;
      margin-right: 100px;
      background-color: rgb(51, 102, 255);
      color: white;

    }

</style>
<body>

<h1>Flight Details</h1>
 <table class="text-center">
      <tr>
        <th rowspan="2">Airline Name</th>
        <th rowspan="2">Departure</th>
        <th rowspan="2">Destination</th>
        <th rowspan="2">Date</th>
        <th rowspan="2">Depart Time</th>
        <th rowspan="2">Arrive Time</th>
        <th>Class Seats</th></tr>
        <tr><th>Business</th>
        <th>Economy</th>
        <th>First</th>
        </tr>


     
       @foreach($flights as $item)
      <tr>
        <td>{{$item->airlinename}}</td>
        <td>{{$item->departure}}</td>
        <td>{{$item->arrival}}</td>
        <td>{{$item->date}}</td>
        <td>{{$item->dtime}}</td>
        <td>{{$item->atime}}</td>
        <td>{{$item->seatcapacity}}</td>
        <td>{{$item->business}}</td>
        <td>{{$item->economy}}</td>
        <td>{{$item->first}}</td>



      
        <td><a href="" class="text-decoration-none text-white ">Book</a></td>
      </tr>
     
      @endforeach
 
    </table>
</body>
</html>
@endsection
            
    
