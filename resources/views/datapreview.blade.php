@extends('main')

@section('content')
    <div class="flex-col content p-1 m-5">
        <h2 class="fw-bold mb-1">Data Preview</h2>
        <p class="mb-3" style="color:var(--grey)">All the features you choose will be shown on the table below. Please recheck the features! </p>
            
        
        <div class="table-responsive overflow-y-auto">

            <table id="sensorTable"  class="table text-center table-striped table-hover min-vh-100 min-vw-100 align-middle justify-center align-items-center">
            <thead class="table-head h-5 gap-3 text-wrap">
                <tr >
                <th>#</th>
                <th>Sensor Name</th>
                <th>Value</th>
                <th>Timestamp</th>
                <th scope="col">Lorem</th>
                <th scope="col">Lorem</th>
                <th scope="col">Lorem</th>
                <th scope="col">Lorem</th>
                <th scope="col">Lorem</th>
                <th scope="col">Lorem</th>
                <th scope="col">Lorem</th>
                <th scope="col">Lorem</th>
                <th scope="col">Lorem</th>
                <th scope="col">Lorem</th>
                <th scope="col">Lorem</th>
                <th scope="col">Lorem</th>
                </tr>
            </thead>
            <tbody class="h-7">
                <!-- <tr>
                <td scope="row">Ipsum</td>
                <td>30%</td>
                <td>30%</td>
                <td>30%</td>
                <td>30%</td>
                <td>30%</td>
                <td>30%</td>
                <td>30%</td>
                <td>30%</td>
                <td>30%</td>
                <td>30%</td>
                <td>30%</td>

                </tr>
                <tr>
                <td scope="row">Ipsum</td>
                <td>30%</td>
                <td>30%</td>
                <td>30%</td>
                <td>30%</td>
                <td>30%</td>
                <td>30%</td>
                <td>30%</td>
                <td>30%</td>
                <td>30%</td>
                <td>30%</td>
                <td>30%</td>

                </tr>


                <tr>
                <td scope="row">Ipsum</td>
                <td>30%</td>
                <td>30%</td>
                <td>30%</td>
                <td>30%</td>
                <td>30%</td>
                <td>30%</td>
                <td>30%</td>
                <td>30%</td>
                <td>30%</td>
                <td>30%</td>
                <td>30%</td>

                </tr>


                <tr>
                <td scope="row">Ipsum</td>
                <td>30%</td>
                <td>30%</td>
                <td>30%</td>
                <td>30%</td>
                <td>30%</td>
                <td>30%</td>
                <td>30%</td>
                <td>30%</td>
                <td>30%</td>
                <td>30%</td>
                <td>30%</td>

                </tr>


                <tr>
                <td scope="row">Ipsum</td>
                <td>30%</td>
                <td>30%</td>
                <td>30%</td>
                <td>30%</td>
                <td>30%</td>
                <td>30%</td>
                <td>30%</td>
                <td>30%</td>
                <td>30%</td>
                <td>30%</td>
                <td>30%</td>

                </tr>


                <tr>
                <td scope="row">Ipsum</td>
                <td>30%</td>
                <td>30%</td>
                <td>30%</td>
                <td>30%</td>
                <td>30%</td>
                <td>30%</td>
                <td>30%</td>
                <td>30%</td>
                <td>30%</td>
                <td>30%</td>
                <td>30%</td>

                </tr>

                <tr>
                <td scope="row">Ipsum</td>
                <td>30%</td>
                <td>30%</td>
                <td>30%</td>
                <td>30%</td>
                <td>30%</td>
                <td>30%</td>
                <td>30%</td>
                <td>30%</td>
                <td>30%</td>
                <td>30%</td>
                <td>30%</td>

                </tr>


                <tr>
                <td scope="row">Ipsum</td>
                <td>30%</td>
                <td>30%</td>
                <td>30%</td>
                <td>30%</td>
                <td>30%</td>
                <td>30%</td>
                <td>30%</td>
                <td>30%</td>
                <td>30%</td>
                <td>30%</td>
                <td>30%</td>

                </tr>

                <tr>
                <td scope="row">Ipsum</td>
                <td>30%</td>
                <td>30%</td>
                <td>30%</td>
                <td>30%</td>
                <td>30%</td>
                <td>30%</td>
                <td>30%</td>
                <td>30%</td>
                <td>30%</td>
                <td>30%</td>
                <td>30%</td>

                </tr>

                <tr>
                <td scope="row">Ipsum</td>
                <td>30%</td>
                <td>30%</td>
                <td>30%</td>
                <td>30%</td>
                <td>30%</td>
                <td>30%</td>
                <td>30%</td>
                <td>30%</td>
                <td>30%</td>
                <td>30%</td>
                <td>30%</td>

                </tr>


                <tr>
                <td scope="row">Ipsum</td>
                <td>30%</td>
                <td>30%</td>
                <td>30%</td>
                <td>30%</td>
                <td>30%</td>
                <td>30%</td>
                <td>30%</td>
                <td>30%</td>
                <td>30%</td>
                <td>30%</td>
                <td>30%</td>

                </tr>


                <tr>
                <td scope="row">Ipsum</td>
                <td>30%</td>
                <td>30%</td>
                <td>30%</td>
                <td>30%</td>
                <td>30%</td>
                <td>30%</td>
                <td>30%</td>
                <td>30%</td>
                <td>30%</td>
                <td>30%</td>
                <td>30%</td>

                </tr>


                <tr>
                <td scope="row">Ipsum</td>
                <td>30%</td>
                <td>30%</td>
                <td>30%</td>
                <td>30%</td>
                <td>30%</td>
                <td>30%</td>
                <td>30%</td>
                <td>30%</td>
                <td>30%</td>
                <td>30%</td>
                <td>30%</td>

                </tr>

                <tr>
                <td scope="row">Ipsum</td>
                <td>30%</td>
                <td>30%</td>
                <td>30%</td>
                <td>30%</td>
                <td>30%</td>
                <td>30%</td>
                <td>30%</td>
                <td>30%</td>
                <td>30%</td>
                <td>30%</td>
                <td>30%</td>

                </tr>


                <tr>
                <td scope="row">Ipsum</td>
                <td>30%</td>
                <td>30%</td>
                <td>30%</td>
                <td>30%</td>
                <td>30%</td>
                <td>30%</td>
                <td>30%</td>
                <td>30%</td>
                <td>30%</td>
                <td>30%</td>
                <td>30%</td>

                </tr> -->

            </tbody>
            </table>
        </div>

        <div class="savedata-button position-relative flex-row text-end my-4">
            <button class="btn btn-secondary p-2"> Save > </button>
        </div>
    </div>

    <script src="{{ asset('fetch/fetch.js') }}"></script>
    <script>

    async function fetchData() {
    try {
        const response = await fetch('http://localhost:8000/public/fetch/tes.json');
        if (!response.ok) {
            throw new Error(`HTTP error! status: ${response.status}`);
        }
        const data = await response.json();
        console.log(data);
        populateTable(data);
    } catch (error) {
        console.error('Error:', error.message);
    }
}

    function populateTable(data) {
    const tableBody = document.querySelector('#dataTable tbody');
    tableBody.innerHTML = '';

    data.forEach((item, index) => {
        item.value.forEach((value, i) => {
            const row = document.createElement('tr');
            row.innerHTML = `
                <td>${index + 1}-${i + 1}</td>
                <td>${item.functionName}</td>
                <td>${value}</td>
                <td>${new Date(item.date[i]).toLocaleString()}</td>
            `;
            tableBody.appendChild(row);
        });
    });
}

fetchData();


    </script>
@endsection
