// Ambil data dari API
async function fetchAPIData() {
    try {
        const response = await fetch('https://indodax.com/api/pairs'); // API yang ingin Anda gunakan
        const data = await response.json(); // Parse JSON response
        return data;
    } catch (error) {
        console.error('Error fetching data:', error);
    }
}

// Update dropdown dengan data API
async function populateDropdowns() {
    const data = await fetchAPIData();

    if (data) {
        // Misalnya API mengembalikan array of pairs
        const features = Object.keys(data[0]);  // Mengambil fitur yang ada di dalam data
        
        // Menambahkan fitur ke dropdown xFeature dan yFeature
        const xFeatureDropdown = document.getElementById('xFeature');
        const yFeatureDropdown = document.getElementById('yFeature');
        
        features.forEach(feature => {
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


async function updateChart() {
    const chartType = document.getElementById('chartType').value;  // Mendapatkan tipe chart
    const xFeature = document.getElementById('xFeature').value;  // Ambil nilai yang dipilih
    const yFeature = document.getElementById('yFeature').value;  // Ambil nilai yang dipilih


    const data = await fetchAPIData();  // Ambil data dari API

    // Pastikan label dan data numerik diproses dengan benar
    const labels = data.map(item => item[xFeature]);  // Sesuaikan dengan nama field yang diinginkan
    const chartData = data.map(item => item[yFeature]);  // Sesuaikan dengan nama field yang diinginkan
     // Ambil data untuk sumbu Y (misalnya 'pricescale')

    // Buat chart baru dengan data yang sudah diproses
    createChart(chartType, labels, chartData);
}

function createChart(chartType, labels, data) {
    const ctx = document.getElementById('chart1').getContext('2d');

    // Hapus chart lama jika ada
    if (window.chart) {
        window.chart.destroy();
    }

    // Membuat chart baru
    window.chart = new Chart(ctx, {
        type: chartType,
        data: {
            labels: labels,  // Sumbu X (Label kategori atau string)
            datasets: [{
                label: 'Data',  // Label untuk sumbu Y
                data: data,  // Data untuk sumbu Y (numerik)
                backgroundColor: 'rgba(75, 192, 192, 0.2)',
                borderColor: 'rgba(75, 192, 192, 1)',
                borderWidth: 1
            }]
        },
        options: {
            responsive: true,
            scales: {
                y: {
                    beginAtZero: true,  // Mengatur agar sumbu Y mulai dari 0
                }
            }
        }
    });
}


// Event listener untuk dropdown
document.getElementById('chartType').addEventListener('change', updateChart);
document.getElementById('xFeature').addEventListener('change', updateChart);
document.getElementById('yFeature').addEventListener('change', updateChart);

// Panggil fungsi untuk mengisi dropdown dan membuat chart pertama kali
populateDropdowns();
updateChart();



