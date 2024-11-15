$(document).on("click", "#adddata", function(add){
    add.preventDefault();
    $("#formField").append(`<div id="wrapper" class="input-wrapper container-fluid flex-auto gap-2">
                    <label class="p-1" for="feature" name="label">If</label>
                    <div class="dropdown-container" name="dd1">
                        <select class="dropdown-select px-md-1 px-xl-2 form-control">
                            <option>Feature</option>
                            <!-- Additional options can be added here -->
                        </select>
                    </div>

                    <div class="dropdown-container2 " name="dd2">
                        <select class="dropdown-select2 px-md-1 px-xl-2 form-control">
                            <option>Condition</option>
                            <!-- Add more options as needed -->
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



