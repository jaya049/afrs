@extends('dashboard')
@section('content')
<form class="modal-content animate form-group" action="searchflight" method="get">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id02').style.display='none'" class="close" title="Close Modal">&times;</span>
    </div>
            <h1 class="text-center ">Search Flight Details</h1>
            <div id="form">
                <h3 class="">Book a Flight</h3>
                <div id="input3">
                    <span id="input-group" class="text-primary">Select Your Fare</span>
                    <input type="radio" id="group" name="r">
                    <label class="" for="group">One Way</label>
                    <input type="radio" id="group" name="r">
                    <label class="" for="group">Round Trip</label>
                </div>
                <div id="input">
                    <input type="text" placeholder="From" name="departure">  
                                
                    <!-- <select name="departure">
                    <option>--From--</option>
                    <option>Kochi</option>
                    <option>Kannur</option>
                    </select> -->
                    <select name="arrival">
                    <option>--To--</option>
                    <option>Kochi</option>
                    <option>Kannur</option>
                    </select>

                
                    
                    <input type="date" id="group" name="date" placeholder="Departure Date">
                    <!-- <input type="text" id="group" placeholder="Departure Time"> -->
                
                
                </div>
                <!-- <div id="input2">
                    <input type="number" id="group" placeholder="Passengers">
                   
                </div> -->
               <!--  <div id="input3">
                   
                    <input type="radio" id="group" name="r">
                    <label class="text-white" for="group">Armed Force</label>
                    <input type="radio" id="group" name="r">
                    <label class="text-white" for="group">Senior Citizen</label>
                     <input type="radio" id="group" name="r">
                    <label class="text-white" for="group">Family and Friends</label>
                   
                </div>
                -->
                <!-- <a href="searchflight">Search Flight</button> -->
                <!-- <button type="reset" class="btn btn-primary">Clear Form</button> -->
            </div>
            <input type="submit" value="Search" name="submit">

        </form>
    </div>
<!--search form ends-->
@endsection