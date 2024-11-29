
$(document).on("click", "#adddata", function(add){
    add.preventDefault();
    $("#formField").append(`<div id="wrapper" class="input-wrapper container-fluid flex-auto gap-2">
                    <label class="p-1" for="feature" name="label">If</label>
                    <div class="dropdown-container" name="dd1">
                        <select class="dropdown-select px-md-1 px-xl-2 form-control">
                        ${keys.map(function(key) {
                          return `<option>${key}</option>`;
                        }).join('')}
                            <!-- Additional options can be added here -->
                        </select>
                    </div>

                    <div class="dropdown-container2 " name="dd2">
                        <select class="dropdown-select2 px-md-1 px-xl-2 form-control">
                                <option value=">">></option>
                                <option value="<"><</option>
                                <option value="=">=</option>
                                <option value="<="><=</option>
                                <option value=">=">>=</option>
                        </select>
                    </div>

                    <input type="text" name="it1" class="form-control input-threshold flex relative" placeholder='Insert Indicator'>
                    <input type="text" name="it2" class="form-control input-threshold flex relative" placeholder='Create Alert'>
                    <img id="remove" width="20" height="20" src="https://img.icons8.com/fluency-systems-filled/20/filled-trash.png" alt="filled-trash"/></div>

                    
                </div>`);
})


$(document).on("click", "#remove", function(del){
    del.preventDefault();
    $(this).parent().remove();
});





//modal addAPI
// Get references to elements
const modal = document.getElementById('modal-api');
const triggerText = document.getElementById('addAPI');
const closeModal = document.getElementById('close-modal');

// Show the modal when the text is clicked
triggerText.addEventListener('click', () => {
  modal.style.display = 'flex'; // Show modal
});

// Hide the modal when the "X" is clicked
closeModal.addEventListener('click', () => {
  modal.style.display = 'none'; // Hide modal
});


// Hide the modal when clicking outside the modal content
window.addEventListener('click', (event) => {
  if (event.target === modal) {
    modal.style.display = 'none'; // Hide modal
  }
});



//modal addAPI
// Get references to elements
const modallist = document.getElementById('modal-list-api');
const button = document.getElementById('list');
const closeModalx = document.getElementById('close-modalx');

// Show the modal when the text is clicked
button.addEventListener('click', () => {
  modallist.style.display = 'flex'; // Show modal
});

// Hide the modal when the "X" is clicked
closeModalx.addEventListener('click', () => {
  modallist.style.display = 'none'; // Hide modal
});


// Hide the modal when clicking outside the modal content
window.addEventListener('click', (event) => {
  if (event.target === modallist) {
    modallist.style.display = 'none'; // Hide modal
  }
});


