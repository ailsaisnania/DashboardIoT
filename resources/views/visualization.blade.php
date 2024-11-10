
@extends('main')

@section('content')
<div class="container-fluid my-4 mx-0">
    <!-- Dropdowns Row -->
    <div class="row justify-content-center mb-4 overflow-auto">
        <!-- Chart Dropdown -->
        <div class="col-auto">
            <div class="dropdown-container">
                <select class="styled-dropdown">
                    <option>Chart</option>
                </select>
            </div>
        </div>

        <!-- Dimension Dropdown -->
        <div class="col-auto">
            <div class="dropdown-container">
                <select class="styled-dropdown">
                    <option>Dimension</option>
                </select>
            </div>
        </div>

        <!-- Metric Dropdown -->
        <div class="col-auto">
            <div class="dropdown-container">
                <select class="styled-dropdown">
                    <option>Metric</option>
                </select>
            </div>
        </div>
    </div>

    <!-- First Row of Charts -->
<!-- First Row of Charts -->
    <div class="container-fluid row ">
        <!-- Bar Chart -->
        <div class="relative card col-xl-7 col-lg-5 col-md-11 m-3 overflow-auto">
            <div class="chart-card">
                <canvas id="barChart"></canvas>
            </div>
        </div>

        <!-- Line Chart -->
        <div class="card col-xl-4 col-lg-5 col-md-11 m-3">
            <div class="chart-card">
                <canvas id="lineChart"></canvas>
            </div>
        </div>
    </div>


    <!-- Second Row of Charts -->
    <div class="row gap-5">
        <!-- Area Chart -->
        <div class="card col-xl-8 col-lg-8 col-md-11">
            <div class="chart-card">
                <canvas id="areaChart"></canvas>
            </div>
        </div>

        <!-- Pie Chart -->
        <div class="card col-xl-3 col-lg-3 col-md-11">
            <div class="chart-card">
                <canvas id="pieChart"></canvas>
            </div>
        </div>
    </div>

</div>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script src="{{('script2.js')}}"></script>
@endsection