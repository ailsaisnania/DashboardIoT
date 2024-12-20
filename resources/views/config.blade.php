@extends('main')


@section('content')
<!-- ==========================API============================ -->
<div class="api flex flex-col m-lg-5 m-md-3 m-sm-1">
    <div class="title-api p-1">
        <h5>API Key</h5>
        <p style="color:var(--grey)"> Put your API key on the field below. If you have more than one sensors, manage it by 
        <span>
            <a id="addAPI" style="cursor: pointer; color: blue; text-decoration: underline;">click here.</a> 
        </span>
        </p>
    </div>

    <div id="modal-api" class="modal-api container-fluid">

        <div class="apiInput container-fluid overflow-auto position-absolute mt-xl-5 mt-md-2 p-xl-3 p-md-2 p-sm-1">
        <span id="close-modal" class="close justify-end font-semibold">&times;</span>
            <h3 class="h3 pb-4" style="font-weight:600">ADD API </h3> 
                <div class="apiwrapper flex flex-row mb-xl-4 mb-md-2">
                    <input type="text" class="input-api p-3" placeholder="Insert your API name">
                    <input type="text" class="input-api p-3" placeholder="API key">
                    <button class="button-save p-2" style="border-radius:10px; border:none; background-color:var(--blueiot); color:white">add</button>
                </div>

                <table class="table table-responsive text-center table-striped table-hover" style="line-height: 60px !important;">
                <thead>
                    <tr>
                        <th scope="col">API name</th>
                        <th scope="col">API key</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td scope="row">Humidity</td>
                        <td>nttps://ddfdwjfnwafwpmfw/paths/fada/addw.com</td>
                        <td>
                            <img class="mx-2" width="30" height="30" src="https://img.icons8.com/color/48/delete-forever.png" alt="delete-forever"/>
                            <img class="mx-2" width="30" height="30" src="https://img.icons8.com/dusk/48/edit--v1.png" alt="edit--v1"/>
                        </td>
                    </tr>
                    <tr>
                        <td scope="row">Fire Sensor</td>
                        <td>nttps://ddfdwjfnwafwpmfw/paths/fada/addw.com</td>
                        <td>
                            <img class="mx-2" width="30" height="30" src="https://img.icons8.com/color/48/delete-forever.png" alt="delete-forever"/>
                            <img class="mx-2" width="30" height="30" src="https://img.icons8.com/dusk/48/edit--v1.png" alt="edit--v1"/>
                        </td>
                    </tr>
                    <tr>
                        <td scope="row">Fire Sensor</td>
                        <td>nttps://ddfdwjfnwafwpmfw/paths/fada/addw.com</td>
                        <td>
                            <img class="mx-2" width="30" height="30" src="https://img.icons8.com/color/48/delete-forever.png" alt="delete-forever"/>
                            <img class="mx-2" width="30" height="30" src="https://img.icons8.com/dusk/48/edit--v1.png" alt="edit--v1"/>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>



    <div class="input-wrapper">
        <input class="input-text p-3" type="text" placeholder="Input Your API here">
        <button id="list" class="submit" style="right: 80px; background-color:transparent"><img width="30" height="30" src="https://img.icons8.com/ios/50/down-squared--v2.png" alt="down-squared--v2"/></button>
        <button class="submit"> Submit</button>
    </div>

    <div id="modal-list-api" style="display: none; position: absolute; top: 0; left: 0; width: 100%; height: 100%; justify-content: center; align-items: top; z-index: 20003;" class="container-fluid">

        <div id="list-api" style=" background-color: white; top: 26%; height: max-content; padding: 20px; border-radius: 8px; width: 20%; max-width: 50%; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2); text-align: left;max-height: 400px;" class="modal-content p-xl-4 position-absolute max-w-screen-md container-fluid w-max">
            <span id="close-modalx" class="close justify-end font-semibold">&times;</span>
                <h5>API List</h5>
                <div class="list-group border-none list-group-flush mt-3" style="line-height:40px">
                <a href="#" class="list-group-item list-group-item-action">Fire sensors</a>
                <a href="#" class="list-group-item list-group-item-action">Temprature sensors </a>
                <a href="#" class="list-group-item list-group-item-action">Water sensors</a>
                <a href="#" class="list-group-item list-group-item-action">Fire sensors </a>
                <a href="#" class="list-group-item list-group-item-action">Temprature sensors </a>
                <a href="#" class="list-group-item list-group-item-action">Water sensors</a>
                </div>
        </div>
    </div>
</div>


<!-- =====================================FEATURES AND RULE======================= -->
<div class="details p-0 m-lg-5 m-md-3 bg-transparent">
    <div class="rule container-fluid overflow-auto">
        <div class="cardHeader">
            <h4>Just Found 5 Feature(s)</h4>
            <p>Choose features dimension to create visualization</p>
        </div>

        <div class="checkbox p-0 m-0">
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                <label class="form-check-label" for="flexCheckDefault">
                    Default checkbox
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
                <label class="form-check-label" for="flexCheckChecked">
                    Checked checkbox
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
                <label class="form-check-label" for="flexCheckChecked">
                    Checked checkbox
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
                <label class="form-check-label" for="flexCheckChecked">
                    Checked checkbox
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
                <label class="form-check-label" for="flexCheckChecked">
                    Checked checkbox
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
                <label class="form-check-label" for="flexCheckChecked">
                    Checked checkbox
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
                <label class="form-check-label" for="flexCheckChecked">
                    Checked checkbox
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
                <label class="form-check-label" for="flexCheckChecked">
                    Checked checkbox
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
                <label class="form-check-label" for="flexCheckChecked">
                    Checked checkbox
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
                <label class="form-check-label" for="flexCheckChecked">
                    Checked checkbox
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
                <label class="form-check-label" for="flexCheckChecked">
                    Checked checkbox
                </label>
            </div>

        </div>
    </div>

    <!-- ================= Features ================ -->
    <div class="features overflow-auto">
        <div class="cardHeader2">
            <h4 class="fw-bold p-md-2">Insert Rule</h4>
        </div>

        <!-- Tab Section -->
        <div class="tabs">
            <button class="tab-button pb-2 pt-2 px-3 active" onclick="openTab(event, 'formula')">Formula</button>
            <button class="tab-button pb-2 pt-2 px-3" onclick="openTab(event, 'threshold')">Threshold</button>
        </div>

        <!-- Content Sections for Tabs -->
        <div id="formula" class="tab-content py-2 px-3 active">
            <h5 class="mb-2 mt-3">Formula</h5>

            <!-- Formula Input Area -->
            <div class="formula-input mb-4">
                <input class="p-3" id="formulaInput" type="text" placeholder="Click on features or operators to build formula" />
            </div>

            <!-- Feature List and Operators -->
            <div class="formula-container container-fluid flex flex-col">
                <!-- Feature List -->
                <div class="feature-list p-2">
                    <div class="feature-item p-2" onclick="addToFormula('Feature 1')">Feature 1</div>
                    <div class="feature-item p-2" onclick="addToFormula('Feature 2')">Feature 2</div>
                    <div class="feature-item p-2" onclick="addToFormula('Feature 3')">Feature 3</div>
                    <div class="feature-item p-2" onclick="addToFormula('Feature 4')">Feature 4</div>
                    <div class="feature-item p-2" onclick="addToFormula('Feature 5')">Feature 5</div>
                    <div class="feature-item p-2" onclick="addToFormula('Feature 6')">Feature 6</div>
                    <div class="feature-item p-2" onclick="addToFormula('Feature 1')">Feature 1</div>
                    <div class="feature-item p-2" onclick="addToFormula('Feature 2')">Feature 2</div>
                    <div class="feature-item p-2" onclick="addToFormula('Feature 3')">Feature 3</div>
                    <div class="feature-item p-2" onclick="addToFormula('Feature 4')">Feature 4</div>
                    <div class="feature-item p-2" onclick="addToFormula('Feature 5')">Feature 5</div>
                    <div class="feature-item p-2" onclick="addToFormula('Feature 6')">Feature 6</div>
                    
                </div>

                <!-- Operators -->
                <div class="operators">
                    <button class="operator-button" onclick="addToFormula('*')">*</button>
                    <button class="operator-button" onclick="addToFormula('+')">+</button>
                    <button class="operator-button" onclick="addToFormula('/')">/</button>
                    <button class="operator-button" onclick="addToFormula('-')">-</button>
                    <button class="operator-button" onclick="addToFormula('(')">(</button>
                    <button class="operator-button" onclick="addToFormula(')')">)</button>

                </div>
            </div>

            <div class="button-save p-8">
                <button class="button-save-formula"> Save > </button>
            </div>
        </div>

        <div id="threshold" class="tab-content py-2 px-3" style="height:85%">
            <h5 class="mb-2 mt-3">Threshold</h5>

            <div class="threshold-settings container-fluid flex-auto h-max">
            <div id="formField" class="container-fluid flex-col overflow-auto container-form">
                <form id="formField" action="" class="Multiple" method="POST">
                    <div id="wrapper" class="input-wrapper container-fluid flex-auto gap-2">
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
                </form>
            </div>

            </div>

        
            
            <button class="add-threshold-button p-2 m-3 ml-0" id="adddata"><a class="text-decoration-none">+ Add Threshold</a></button>


            <div class="button-save threshold position-absolute">
                <button class="button-save-formula"> Save > </button>
            </div>
        </div>
    </div>

</div>
<div class="d-grid gap-2 px-5 mb-4">
    <button class="button-master-save mt-md-3"> <a class="text-decoration-none" style="color:white" href="/datapreview">Save > </a></button>
</div>
</div>
</div>


<script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
<script src="{{asset('ScriptaddThreshold.js')}}">
</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
@endsection