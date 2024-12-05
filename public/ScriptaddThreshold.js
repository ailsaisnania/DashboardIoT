
$(document).on("click", "#adddata", function(add){
    add.preventDefault();
    $("#formField").append(`
      <div id="wrapper" class="input-wrapper container-fluid flex-auto gap-2">
                    <label class="p-1" for="feature" name="label">If</label>
                    <div class="dropdown-container" name="dd1">
                        <select class="dropdown-select px-md-1 px-xl-2 form-control">
                        <option value="option">feature</option>
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









$(document).on("click", "#add-threshold-data", function(add){
  add.preventDefault();
  $("#formThreshold").append(`
                <div class="threshold-minmax container-fluid flex gap-4 mt-3">
                <div class="dropdown-fitur">
                    <select class="dropdown-fitur" id="dropdown-fitur">
                        <option value="Features 1">Features 1</option>
                        <option value="Features 2">Features 2</option>
                    </select>
                </div>
                <div class="value">
                    <input class="threshold-input mb-2" id="thresholdinputmin" type="text" placeholder="Add min value" />
                    <input class="threshold-input" id="thresholdinputmax" type="text" placeholder="add max value" />
                </div>
            </div>
    `);
})


$(document).on("click", "#remove", function(del){
  del.preventDefault();
  $(this).parent().remove();
});




$(document).on("click", "#add-more-formula", function(add){
  add.preventDefault();
  $("#formFormula").append(`
        <div class="formula-result container-fluid flex gap-3 mt-3">
                            <div class="dropdown-value"style=" width: 50%; ">
                                <select class="dropdown-value" id="dropdown-value">
                                    <option value="Features 1">Features 1</option>
                                    <option value="Features 2">Features 2</option>
                                </select>
                            </div>

                            <div class="dropdown-value" style=" width:16%; ">
                                <select name="operator" class="dropdown-value" id="operator-formula" required="">
                                    <option value="<">&lt;</option>
                                    <option value=">">&gt;</option>
                                    <option value="=">=</option>
                                    <option value="!=">!=</option>
                                </select>
                            </div>

                            <div class="indikator-wrapper flex flex-row" style="width:50%;">
                                <input type="text" class="dropdown-value px-1" style="width:100%;" placeholder="insert indicator">
                            </div>

                            <div class="dropdown-value" style="width:40%">
                                <select id="value-formula" name="dropdown-fitur-compare" class="dropdown-value" style="width:100%">
                                    <option value="Feature 1">Feature 1</option>
                                    <option value="Feature 2">Feature 2</option>
                                    <option value="Feature 3">Feature 3</option>
                                </select>
                            </div>
                        </div>
    `);
})


$(document).on("click", "#remove", function(del){
  del.preventDefault();
  $(this).parent().remove();
});


