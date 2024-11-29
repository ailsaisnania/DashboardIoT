
const endpoint = "https://disease.sh/v3/covid-19/historical/all?lastdays=all"

//get
async function getItems() {
    const api = await fetch(endpoint)
    const data = await api.json()
    console.log(data)
}


// Create
function createItem(item) {
fetch(endpoint, {
    method:'POST', 
    headers:{
        "Content-Type": "application/json"
    },
    body: JSON.stringify(item)
})
.then(response => response.json())
.then(data => console.log('Item created:', data))
.catch(error => console.error('Error creating item:', error))};




//Delete 
function deleteItem(id) {
    fetch(`${endpoint}/${id}`, {
      method: 'DELETE',
    })
      .then(response => response.json())
      .then(data => console.log('Item deleted:', data))
      .catch(error => console.error('Error deleting item:', error));
  }


  //Update
  function updateItem(id, updatedItem) {
    fetch(`${endpoint}/${id}`, {
      method: 'PUT',
      headers: {
        'Content-Type': 'application/json',
      },
      body: JSON.stringify(updatedItem), // Mengirim data item yang diperbarui
    })
      .then(response => response.json())
      .then(data => console.log('Item updated:', data))
      .catch(error => console.error('Error updating item:', error));
  }
