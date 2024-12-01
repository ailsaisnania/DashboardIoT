
@extends('main')

@section('content')
<div id="" class="chartContainer container-fluid">

<div class="container-fluid overflow-auto my-4 mx-0">
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
                    <!-- <option value="time">Time</option>
                    <option value="temperature">Temperature</option>
                    <option value="humidity">Humidity</option> -->
                </select>
            </div>
        </div>

        <!-- Metric Dropdown -->
        <div class="col-auto">
            <div class="dropdown-container">
                <select id="yFeature" class="styled-dropdown">
                    <!-- <option value="time">Time</option>
                    <option value="temperature">Temperature</option>
                    <option value="humidity">Humidity</option> -->
                </select>
            </div>
        </div>
    </div>


    <div id="chartContainer" class="container-fluid overflow-auto m-xl-4 m-md-3 m-sm-1" style="width:95%">
    <!-- Tempatkan chart di dalam kontainer -->
    <div class="relative card container-fluid overflow-auto m-3" id="chart1-container">
        <div class="chart-card container-fluid overflow-auto">
            <canvas class="chart" id="chart1" style="width:100%"></canvas>
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

<script src="{{ asset('fetch/visualization.js') }}"></script>
<!-- <script src="{{('visualization.js')}}"></script> -->
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"></script> 
@endsection