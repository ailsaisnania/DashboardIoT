
@extends('main')

@section('content')
<div class="chartContainer container-fluid">

<div style="max-height:500px" class="container-fluid overflow-auto my-4 mx-0">
    <!-- Dropdowns Row -->
    <div class="row justify-content-center mb-4 gap-3 overflow-auto">
        <!-- Chart Dropdown -->
        <div class="col-auto">
            <div class="dropdown-container">
                <select id="chartType" class="styled-dropdown">
                <option value="bar">Bar Chart</option>
                <option value="line">Line Chart</option>
                <option value="scatter">Scatter Plot</option>
                </select>
            </div>
        </div>

        <!-- Dimension Dropdown -->
        <div class="col-auto">
            <div class="dropdown-container">
                <select id="xFeature" class="styled-dropdown">
                    <option value="time">Time</option>
                    <option value="temperature">Temperature</option>
                    <option value="humidity">Humidity</option>
                </select>
            </div>
        </div>

        <!-- Metric Dropdown -->
        <div class="col-auto">
            <div class="dropdown-container">
                <select id="yFeature" class="styled-dropdown">
                    <option value="time">Time</option>
                    <option value="temperature">Temperature</option>
                    <option value="humidity">Humidity</option>
                </select>
            </div>
        </div>
    </div>


    <div id="chartContainer" class="container-fluid overflow-auto m-xl-4 m-md-3 m-sm-1" style="width:95% ; max-height : 1000px; scrollbar-width: none; /* For Firefox: hides scrollbar */
  -ms-overflow-style: none; /* For IE and Edge: hides scrollbar */">
        <div class="relative card overflow-auto m-3">
            <div class="chart-card">
                <canvas id="chart1"></canvas>
            </div>
        </div>
    </div>


</div>
</div>

<div class="controls">
        <button id="addChart" class="btnaddChart m-5 mt-2 px-3">
            
            Add More visualization
        </button>
</div>

<script src="{{('visualization.js')}}"></script>
<script src="{{ asset('fetch.js') }}"></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script> 
@endsection