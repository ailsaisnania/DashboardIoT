
@extends('main')

@section('content')
<div id="" class="chartContainer container-fluid">

<div class="container-fluid overflow-auto my-4 mx-0">

    <div id="visualizations" class="container-fluid overflow-auto">
            <!-- All visualizations will be dynamically added here -->
    </div>

<div class="controls">
        <button id="addChart" onclick="addNewVisualization()" class="btnaddChart m-5 mt-2 px-3">
            Add More visualization
        </button>
</div>

<script src="{{ asset('fetch/visualization.js') }}"></script>
<!-- <script src="{{('visualization.js')}}"></script> -->
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"></script> 
@endsection