let chartCount = 1; // Mulai dari 0 agar ID unik
async function fetchAPIData() {
    try {
        const response = await fetch('https://indodax.com/api/pairs'); // API yang ingin Anda gunakan
        const data = await response.json(); // Parse JSON response
        return data;
    } catch (error) {
        console.error('Error fetching data:', error);
    }
}

function saveChartsToLocalStorage() {
    const chartsData = [];

    Object.keys(chartInstances).forEach(chartId => {
        const chartType = document.getElementById(`chartType${chartId}`).value;
        const xFeature = document.getElementById(`xFeature${chartId}`).value;
        const yFeature = document.getElementById(`yFeature${chartId}`).value;

        chartsData.push({
            chartId,
            chartType,
            xFeature,
            yFeature
        });
    });

    localStorage.setItem('chartsConfig', JSON.stringify(chartsData));
}





function addNewVisualization() {
    chartCount++;

    const container = document.getElementById('visualizations');
    const newChartDiv = document.createElement('div');
    newChartDiv.classList.add('container-fluid', 'overflow-y-auto', 'm-3');
    newChartDiv.id = `chart${chartCount}-container`;
    newChartDiv.innerHTML = `
        <div class="col-auto justify-content-center container-fluid overflow-auto">
            <div class="flex flex-row justify-content-center">
                <select id="chartType${chartCount}" class="styled-dropdown">
                    <option value="bar">Bar Chart</option>
                    <option value="line">Line Chart</option>
                    <option value="scatter">Scatter Plot</option>
                </select>
                <select id="xFeature${chartCount}" class="styled-dropdown"></select>
                <select id="yFeature${chartCount}" class="styled-dropdown"></select>
                <button id="deleteChart${chartCount}" class="delete-btn"><img width="40" height="40" src="https://img.icons8.com/dotty/80/filled-trash.png" alt="filled-trash"/></button>
            </div>
        </div>
        <div class="chart-container container-fluid overflow-auto whitespace-nowrap">
            <canvas class="chart chartconfig" style="width:100%" id="chart${chartCount}"></canvas>
        </div>

    `;

    container.appendChild(newChartDiv);

    // Isi dropdown dengan data API
    populateDropdowns(chartCount);

    // Tambahkan event listener untuk elemen baru
    document.getElementById(`chartType${chartCount}`).addEventListener('change', () => updateChart(chartCount));
    document.getElementById(`xFeature${chartCount}`).addEventListener('change', () => updateChart(chartCount));
    document.getElementById(`yFeature${chartCount}`).addEventListener('change', () => updateChart(chartCount));
    document.getElementById(`deleteChart${chartCount}`).addEventListener('click', () => deleteChart(chartCount));
    saveChartsToLocalStorage();
}


// Fungsi untuk mengisi dropdown
async function populateDropdowns(chartId) {
    const xFeatureDropdown = document.getElementById(`xFeature${chartId}`);
    const yFeatureDropdown = document.getElementById(`yFeature${chartId}`);

    if (xFeatureDropdown && yFeatureDropdown) {
        const data = await fetchAPIData();

        if (data) {
            const features = Object.keys(data[0]);

            xFeatureDropdown.innerHTML = '';
            yFeatureDropdown.innerHTML = '';

            features.forEach((feature) => {
                const optionX = document.createElement('option');
                optionX.value = feature;
                optionX.textContent = feature;
                xFeatureDropdown.appendChild(optionX);

                const optionY = document.createElement('option');
                optionY.value = feature;
                optionY.textContent = feature;
                yFeatureDropdown.appendChild(optionY);
            });
        }
    }
    saveChartsToLocalStorage();
}

async function updateChart(chartId) {
    const chartType = document.getElementById(`chartType${chartId}`).value; // Mendapatkan tipe chart
    const xFeature = document.getElementById(`xFeature${chartId}`).value; // Ambil nilai yang dipilih
    const yFeature = document.getElementById(`yFeature${chartId}`).value; // Ambil nilai yang dipilih

    const data = await fetchAPIData(); // Ambil data dari API

    // Pastikan label dan data numerik diproses dengan benar
    const labels = data.map(item => item[xFeature]); // Sesuaikan dengan nama field yang diinginkan
    const chartData = data.map(item => item[yFeature]); // Sesuaikan dengan nama field yang diinginkan

    // Buat atau perbarui chart
    createChart(chartId, chartType, labels, chartData);
    saveChartsToLocalStorage();
}


// Fungsi untuk membuat chart
// Objek untuk menyimpan semua instance chart berdasarkan ID
const chartInstances = {};

// Fungsi untuk membuat chart
function createChart(chartId, chartType, labels, data) {
    const ctx = document.getElementById(`chart${chartId}`).getContext('2d');
    

    // Hancurkan chart lama jika ada
    if (chartInstances[chartId]) {
        chartInstances[chartId].destroy();
    }

    // Membuat chart baru dan menyimpannya ke dalam objek
    chartInstances[chartId] = new Chart(ctx, {
        type: chartType,
        data: {
            labels: labels, 
            datasets: [{
                label: 'Data',
                data: data, // Data untuk sumbu Y
                backgroundColor: 'rgba(75, 192, 192, 0.2)',
                borderColor: 'rgba(75, 192, 192, 1)',
                borderWidth: 1
            }]
        },
        options: {
            responsive: true,
            maintainAspectRatio: false, // Agar chart bisa menyesuaikan container
            scales: {
                x: {
                    offset: true,
                    categoryPercentage: 4, // Mengatur jarak antar kategori
                    barPercentage: 100,
                    ticks: {
                        padding: 10, // Menambahkan padding untuk jarak antar label
                        autoSkip: true,
                        stepSize: 10, 
                        labelOffset: 20, // Menambah jarak antara label dan axis
                        maxRotation: 45,  // Setel rotasi label ke 0 derajat
                        minRotation: 45,  // Setel rotasi minimal juga 
                    },
                    grid: {
                        drawTicks: false, // Menghilangkan garis kecil di dekat ticks
                    },
                },
                y: {
                    beginAtZero: true,
                    ticks: {
                        padding: 10 // Jarak antara nilai sumbu Y dengan garis
                    }
                }
            },
            layout: {
                padding: {
                    left: 20,
                    right: 20,
                    top: 20,
                    bottom: 20,
                }
            },
            plugins: {
                tooltip: {
                    mode: 'index', // Mengatur interaksi tooltip
                    intersect: true,
                }
            }
        }
    });

    saveChartsToLocalStorage();
}


function deleteChart(chartId) {
    if (chartInstances[chartId]) {
        chartInstances[chartId].destroy();
        delete chartInstances[chartId];
    }

    const chartContainer = document.getElementById(`chart${chartId}-container`);
    if (chartContainer) {
        chartContainer.remove();
    }

    // Perbarui localStorage
    saveChartsToLocalStorage();
}

async function restoreChartsFromLocalStorage() {
    const chartsConfig = JSON.parse(localStorage.getItem('chartsConfig'));

    if (chartsConfig) {
        for (const config of chartsConfig) {
            chartCount++; // Pastikan chartCount terus bertambah untuk ID unik

            const container = document.getElementById('visualizations');
            const newChartDiv = document.createElement('div');
            newChartDiv.classList.add('container-fluid', 'overflow-auto', 'm-3');
            newChartDiv.id = `chart${config.chartId}-container`;

            newChartDiv.innerHTML = `
                <div class="col-auto justify-content-center">
                    <div class="flex flex-row justify-content-center">
                        <select id="chartType${config.chartId}" class="styled-dropdown">
                            <option value="bar">Bar Chart</option>
                            <option value="line">Line Chart</option>
                            <option value="scatter">Scatter Plot</option>
                        </select>
                        <select id="xFeature${config.chartId}" class="styled-dropdown"></select>
                        <select id="yFeature${config.chartId}" class="styled-dropdown"></select>
                        <button id="deleteChart${config.chartId}" class="delete-btn"><img width="40" height="40" src="https://img.icons8.com/dotty/80/filled-trash.png" alt="filled-trash"/></button>
                    </div>
                </div>
                <div class="chart-card container-fluid overflow-auto pt-4">
                    <canvas class="chart" id="chart${config.chartId}" style="width:100%"></canvas>
                </div>
            `;

            container.appendChild(newChartDiv);

            // Isi dropdown dengan data API
            await populateDropdowns(config.chartId);

            // Set nilai dropdown dari konfigurasi yang disimpan
            document.getElementById(`chartType${config.chartId}`).value = config.chartType;
            document.getElementById(`xFeature${config.chartId}`).value = config.xFeature;
            document.getElementById(`yFeature${config.chartId}`).value = config.yFeature;

            // Tambahkan event listener untuk elemen baru
            document.getElementById(`chartType${config.chartId}`).addEventListener('change', () => updateChart(config.chartId));
            document.getElementById(`xFeature${config.chartId}`).addEventListener('change', () => updateChart(config.chartId));
            document.getElementById(`yFeature${config.chartId}`).addEventListener('change', () => updateChart(config.chartId));
            document.getElementById(`deleteChart${config.chartId}`).addEventListener('click', () => deleteChart(config.chartId));

            // Buat chart berdasarkan konfigurasi yang disimpan
            await updateChart(config.chartId);
        }
    }
}




// Panggil fungsi untuk memuat visualisasi saat halaman dimuat
window.onload = () => {
    restoreChartsFromLocalStorage();
};

