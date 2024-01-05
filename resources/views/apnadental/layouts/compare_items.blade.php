<!-- compare offcanvas  -->
<div class="offcanvas compare-offcanvas offcanvas-bottom" tabindex="-1" id="compareOff"
aria-labelledby="offcanvasBottomLabel">
    <div class="offcanvas-header position-relative">
        <div class="offcanvas-header-badge">
            <h5 class="offcanvas-title" id="offcanvasBottomLabel">Compare Doctors</h5>
            <button type="button" class="bg-transparent border-0 p-0 ms-3 text-white stretched-link" data-bs-dismiss="offcanvas" aria-label="Close">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-caret-down-fill" viewBox="0 0 16 16">
                    <path d="M7.247 11.14 2.451 5.658C1.885 5.013 2.345 4 3.204 4h9.592a1 1 0 0 1 .753 1.659l-4.796 5.48a1 1 0 0 1-1.506 0z"/>
                </svg>
            </button>
        </div>               
    </div>
    
    <div class="compare-card-wraper offcanvas-body small">
        <form action="#">
            <div class="container-fluid">
                <div class="row justify-content-center align-items-center">
                    <div class="col-auto">
                        <ul class="d-flex aligin-items-center justify-content-center">
                            <li class="compare-card position-relative flex-column gap-2">
                                <label for="compare-dr">
                                    <img class="img-thumbnail p-0 border-0" src="http://localhost/projects/apnadental/public/assets/img/avatar2.jpg">

                                    <div class="text-center">
                                        <h5 class="h6 mb-0">Doctor</h5>
                                    </div>

                                    {{-- <input class="uploadProfileInput d-none" type="file" name="compare-dr"
                                        id="compare-dr" accept="image/*"> --}}
                                </label>
                                <button class="position-absolute end-0 top-0 border-0 bg-transparent">
                                    <img src="http://localhost/projects/apnadental/public/assets/img/delete.svg" width="15px">
                                </button>
                            </li>

                            <li class="seprator-vs"></li>

                            <li class="compare-card position-relative flex-column gap-2">
                                <label for="compare-dr" class=" pe-auto">
                                    <img class="img-thumbnail p-0 border-0" src="http://localhost/projects/apnadental/public/assets/img/avatar2.jpg">

                                    <div class="text-center">
                                        <h5 class="h6 mb-0">Doctor</h5>
                                    </div>

                                    {{-- <input class="uploadProfileInput d-none" type="file" name="compare-dr"
                                        id="compare-dr" accept="image/*"> --}}
                                </label>
                                <button class="position-absolute end-0 top-0 border-0 bg-transparent">
                                    <img src="http://localhost/projects/apnadental/public/assets/img/delete.svg" width="15px">
                                </button>
                            </li>

                            <li class="seprator-vs"></li>

                            <li class="compare-card position-relative flex-column gap-2">
                                <label for="compare-dr">
                                    <img class="img-thumbnail plus p-0 border-0" src="http://localhost/projects/apnadental/public/assets/img/plus.svg">

                                    <div class="text-center">
                                        <h5 class="h6 mb-0" class="selectDropdown">Select</h5>
                                    </div>
                                    <div id="dropdownContainer">
                                        <label><strong>Select Category :</strong></label><br/>
                                        <select class="selectpicker" data-live-search="true" name="cat">
                                            <option value="php">PHP</option>
                                            <option value="react">React</option>
                                            <option value="jquery">JQuery</option>
                                            <option value="javascript">Javascript</option>
                                            <option value="angular">Angular</option>
                                            <option value="vue">Vue</option>
                                        </select>
                                    </div>
                                </label>
                            </li>                                
                        </ul>
                    </div>
                    
                    <div class="col-auto">
                        <a href="{{ url('/compare') }}" type="butoon" class="btn btn-lg btn_pink mb-5">Compare</a>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
<script>
    $(document).ready(function() {
        // Initialize the Bootstrap Select plugin
        $('.selectpicker').selectpicker();

        // Show/hide the dropdown on 'Select' click
        $('.selectDropdown').on('click', function() { alert("test");
            //$("#dropdownContainer").removeClass('d-none');
        });

        // Close dropdown when an option is selected
        $('.selectpicker').on('changed.bs.select', function(e, clickedIndex, isSelected, previousValue) {
            //$('#dropdownContainer').hide();
        });
    });
</script>