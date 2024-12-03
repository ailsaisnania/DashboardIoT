const sensorEndpoint = 'https://jsonplaceholder.typicode.com/posts';
const choosenEndpoint ='https://jsonplaceholder.typicode.com/posts';
const thresholdEndpoint = '';
const chartEndpoint = '';
const notifEndpoint = '';



// Sensors
function createSensor(sensor, api) {
    const postData = {
        title: sensor,
        body: api, 
       
      };
    
      // Mengirim request ke API menggunakan fetch
      fetch(sensorEndpoint, {
        method: 'POST',
        headers: {
          'Content-Type': 'application/json',
        },
        body: JSON.stringify(postData), 
      })
        .then(response => response.json())
        .then(data => {
          console.log('Value created:', data);
          alert('Value Created Successfully');
        })
        .catch(error => {
          console.error('Error:', error); 
          alert('There was an error!');
        });     
}
  // Event listener untuk menangani form submit
  document.getElementById('form-sensor').addEventListener('submit', function(event) {
    event.preventDefault();
    const sensor = document.getElementById('apikeyname').value;
    const api = document.getElementById('apikey').value;
    if (!sensor || !api) {
      alert('Please enter a value!');
      return;
    }
    createSensor(sensor, api);
  });





function getSensors() {
    // Ambil data dari API
    fetch(sensorEndpoint)
        .then(response => response.json())
        .then(data => {
            console.log('Data dari API:', data); // Debugging: tampilkan data API di konsol
            
            let tableBody = document.getElementById('table-body'); // Menargetkan tbody dengan id 'table-body'
            
            // Menyiapkan HTML untuk tabel
            let tableContent = '';

            // Looping melalui data dan membangun HTML untuk setiap baris
            data.forEach(post => {
                // Ambil dua nilai yang ingin ditampilkan
                let apiName = post.title;  // Misalnya, 'title' dalam respons JSON
                let apiKey = post.body;    // Misalnya, 'body' dalam respons JSON

                // Menambahkan row HTML untuk setiap API
                tableContent += `
                    <tr>
                        <td>${apiName}</td>
                        <td>${apiKey}</td>
                        <td class="flex flex-row">
                            <button style="border:none" onclick="deleteSensor(${post.id})"><img class="mx-2" width="30" height="30" src="https://img.icons8.com/color/48/delete-forever.png" alt="delete-forever"/>
                            </button>
                        </td>
                    </tr>
                `;
            });
            tableBody.innerHTML = tableContent;
        })
        .catch(error => {
            console.error('Error:', error);
            alert('Failed to fetch data!');
        });
}


function deleteSensor(id) {
    const apiEndpoint = `${sensorEndpoint}/${id}`;
  
    fetch(apiEndpoint, {
      method: 'DELETE',
      headers: {
        'Content-Type': 'application/json',
      },
    })
      .then(response => {
        if (!response.ok) {
          throw new Error('Gagal menghapus data sensor');
        }
        return response.json();
      })
      .then(data => {
        console.log('Sensor berhasil dihapus:', data);
        alert('Sensor berhasil dihapus');
      })
      .catch(error => {
        console.error('Error:', error);
        alert('Terjadi kesalahan saat menghapus data sensor');
      });
  }


function showAPI() {
    // Fetch data from API
    fetch(choosenEndpoint)
        .then(response => response.json())
        .then(data => {
            const listGroup = document.getElementById('list-group');

            // Populate list items with API titles
            data.forEach(post => {
                const listItem = document.createElement('a');
                listItem.href = "#";
                listItem.className = "list-group-item list-group-item-action";
                listItem.textContent = post.title;
                listItem.dataset.body = post.body; // Store the body in a data attribute

                // Add click event to show body content in textarea
                listItem.addEventListener('click', function(event) {
                    event.preventDefault();
                    document.getElementById('api-input').value = this.dataset.body;
                });

                listGroup.appendChild(listItem);
            });
        })
        .catch(error => console.error('Error fetching data:', error));
}







function generateAPI() {
    // Ambil URL dari input form
    const apiUrl = document.getElementById("api-input").value;

    if (!apiUrl) {
        alert("Please input a valid API URL");
        return;
    }
    fetch(apiUrl)
        .then(response => {
            if (!response.ok) {
                throw new Error("Network response was not ok");
            }
            return response.json();
        })
        .then(data => {
            const keysDiv = document.getElementById("api-keys");
            keysDiv.innerHTML = ""; // Clear previous checkboxes

            let keys = [];

            if (Array.isArray(data)) {
                // If response is an array, take keys of the first object
                keys = Object.keys(data[0]);
            } else {
                // If response is a single object
                keys = Object.keys(data);
            }

            keys.forEach(key => {
                const checkboxWrapper = document.createElement("div");
                checkboxWrapper.className = "form-check";

                const checkbox = document.createElement("input");
                checkbox.type = "checkbox";
                checkbox.className = "form-check-input";
                checkbox.id = `checkbox-${key}`;
                checkbox.value = key;

                const label = document.createElement("label");
                label.className = "form-check-label";
                label.htmlFor = `checkbox-${key}`;
                label.textContent = key;

                checkboxWrapper.appendChild(checkbox);
                checkboxWrapper.appendChild(label);
                keysDiv.appendChild(checkboxWrapper);
            });
        })
        .catch(error => {
            console.error("Error fetching API:", error);
            alert("Failed to fetch the API. Please check the URL.");
        });
}

// Attach event listener to the button
document.getElementById("submit-api").addEventListener("click", function (event) {
    event.preventDefault(); // Prevent page reload
    generateAPI(); // Call the function to fetch and display keys
});




// Fungsi untuk mengirim data ke API lain
function sendDataToAnotherAPI(data) {
    const targetApiUrl = "https://jsonplaceholder.typicode.com/posts"; // Ganti dengan URL endpoint API lain

    fetch(targetApiUrl, {
        method: "POST",
        headers: {
            "Content-Type": "application/json",
        },
        body: JSON.stringify(data), // Kirim data yang terpilih
    })
    .then(response => response.json())
    .then(result => {
        console.log("Data successfully sent to another API:", result);
    })
    .catch(error => {
        console.error("Error sending data to another API:", error);
    });
}

// Event listener untuk tombol 'addfeatures'
document.getElementById("addfeatures").addEventListener("click", function(event) {
    event.preventDefault(); // Mencegah form disubmit jika ada form di dalamnya

    // Ambil URL API yang dimasukkan oleh pengguna
    const apiUrl = document.getElementById("api-input").value;

    // Ambil key yang dipilih dari checkbox
    const checkedKeys = [];
    document.querySelectorAll(".form-check-input:checked").forEach(checkbox => {
        checkedKeys.push(checkbox.value);
    });

    // Jika ada key yang dipilih dan API URL valid
    if (checkedKeys.length > 0 && apiUrl) {
        // Ambil data dari API berdasarkan URL yang dimasukkan
        fetch(apiUrl)
            .then(response => response.json())
            .then(data => {
                const selectedData = {};
                checkedKeys.forEach(key => {
                    if (Array.isArray(data)) {
                        selectedData[key] = data.map(item => item[key]);
                    } else {
                        selectedData[key] = data[key];
                    }
                });

                // Kirim data terpilih ke API lain
                sendDataToAnotherAPI(selectedData);
            })
            .catch(error => console.error('Error fetching data:', error));
    } else {
        console.log('Please enter a valid API URL and select keys.');
    }
});






async function populateFeatureList() {
    const featureListContainer = document.querySelector('.feature-list'); // Target container untuk elemen
    featureListContainer.innerHTML = ""; // Bersihkan isi sebelumnya

    try {
        // Fetch data dari API
        const response = await fetch('https://jsonplaceholder.typicode.com/posts'); // Ganti dengan URL API Anda
        const data = await response.json();

        // Ambil key dari data
        const keys = Object.keys(data[0]); // Asumsikan semua object memiliki key yang sama

        // Buat elemen HTML untuk setiap key
        keys.forEach((key) => {
            const featureItem = document.createElement('div');
            featureItem.className = 'feature-item p-2';
            featureItem.setAttribute('name', key);
            featureItem.setAttribute('onclick', `addToFormula('${key}')`);
            featureItem.textContent = key;

            // Tambahkan elemen ke container
            featureListContainer.appendChild(featureItem);
        });

        console.log("Feature list berhasil dimuat:", keys);
    } catch (error) {
        console.error("Error saat memuat feature list:", error);
        alert("Gagal memuat data.");
    }
}

// Fungsi untuk menambahkan key ke formula
function addToFormula(key) {
    const formulaOutput = document.getElementById('formula-output');
    formulaOutput.textContent += key;
}

// Panggil fungsi populateFeatureList saat halaman dimuat
document.addEventListener('DOMContentLoaded', populateFeatureList);

