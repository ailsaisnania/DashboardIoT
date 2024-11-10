@extends('main')


@section('content')
<!-- ==========================API============================ -->
<div class="api flex flex-col m-lg-5">
    <div class="title-api p-1 pb-2">
        <h5>API Key</h5>
    </div>

    <div class="input-wrapper pt-2">
        <input class="input-text" type="text" placeholder="Input Your API here">
        <button class="submit"> Submit</button>
    </div>
</div>


<!-- =====================================FEATURES AND RULE======================= -->
<div class="details p-0 m-lg-5 bg-transparent">
    <div class="rule">
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
            <h4 class="fw-100">Insert Rule-Based</h4>
        </div>

        <!-- Tab Section -->
        <div class="tabs">
            <button class="tab-button active pb-2 pt-2 px-3" onclick="openTab(event, 'formula')">Formula</button>
            <button class="tab-button pb-2 pt-2 px-3" onclick="openTab(event, 'threshold')">Threshold</button>
        </div>

        <!-- Content Sections for Tabs -->
        <div id="formula" class="tab-content py-2 px-3">
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


        <div id="threshold" class="tab-content active py-2 px-3" style="height:85%">
            <h5 class="mb-2 mt-3">Threshold</h5>

            <div class="threshold-settings container-fluid flex-auto h-max">
                <form action="none" class="Multiple">
                <div class="wrapper-input container-fluid flex-auto gap-2">
                <label class="p-1" for="feature">If</label>
                <div class="dropdown-container">
                    <select class="dropdown-select px-md-1 px-xl-2">
                        <option>Feature</option>
                        <!-- Additional options can be added here -->
                    </select>
                </div>

                <div class="dropdown-container2 ">
                    <select class="dropdown-select2 px-md-1 px-xl-2">
                        <option>Condition</option>
                        <!-- Add more options as needed -->
                    </select>
                </div>

                <input type="text" class="input-threshold flex relative" placeholder='Insert Indicator'>
                <input type="text" class="input-threshold flex relative" placeholder='Create Alert'>
                </form>
                </div>
            </div>

        
            <button class="add-threshold-button p-2 m-3 ml-0">+ Add Threshold</button>
            <div class="button-save threshold position-absolute">
                <button class="button-save-formula"> Save > </button>
            </div>
        </div>
    </div>

</div>
<div class="d-grid gap-2 px-5 mb-4">
    <button class="button-master-save"> <a class="text-decoration-none" style="color:white" href="/datapreview">Save > </a></button>
</div>
</div>
</div>

@endsection