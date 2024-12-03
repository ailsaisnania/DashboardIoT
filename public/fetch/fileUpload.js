document.getElementById('uploadButton').addEventListener('click', () => {
    const fileInput = document.getElementById('formFile');
    const file = fileInput.files[0];

    if (!file) {
        alert('Please upload a CSV file.');
        return;
    }

    const formData = new FormData();
    formData.append('file', file);

    // Upload file ke server menggunakan Fetch API
    fetch('/upload-csv', {
        method: 'POST',
        body: formData,
    })
        .then(response => {
            if (!response.ok) {
                throw new Error('Failed to upload the file.');
            }
            return response.text(); // Asumsikan server mengirim kembali isi CSV
        })
        .then(csvText => {
            generateCheckboxesFromCSV(csvText); // Proses CSV untuk membuat checkbox
        })
        .catch(error => {
            console.error('Error uploading file:', error);
        });
});

// Fungsi untuk memproses CSV dan menampilkan checkbox
function generateCheckboxesFromCSV(csvText) {
    const rows = csvText.split('\n'); // Pisahkan berdasarkan baris
    const headers = rows[0].split(','); // Baris pertama adalah header

    const checkboxContainer = document.getElementById('api-keys');
    checkboxContainer.innerHTML = ''; // Kosongkan kontainer sebelumnya

    headers.forEach((header, index) => {
        if (header.trim() !== '') {
            const checkboxHTML = `
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="${header.trim()}" id="checkbox-${index}" checked>
                    <label class="form-check-label" for="checkbox-${index}">
                        ${header.trim()}
                    </label>
                </div>
            `;
            checkboxContainer.innerHTML += checkboxHTML;
        }
    });
}
