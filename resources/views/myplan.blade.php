@extends('layout.admin_layout')
@section('content')
<div class="app-content content">
    <div class="content-wrapper">
        <div class="content-header row">
            <div class="content-header-left col-md-6 col-12 mb-2 breadcrumb-new">
                <h3 class="content-header-title mb-0 d-inline-block">client</h3><br>
                <div class="row breadcrumbs-top d-inline-block">
                    <div class="breadcrumb-wrapper col-12">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Settings</a>
                            </li>
                            <li class="breadcrumb-item"><a href="#">Branch</a>
                            </li>
                            <li class="breadcrumb-item active">client
                            </li>
                        </ol>
                    </div>
                </div>
            </div>
            <div class="content-header-right col-md-6 col-12">
                <div class="dropdown float-md-right">
                    <button class="btn btn-danger  round btn-glow px-2">Actions</button>

                </div>
            </div>
        </div>


        <!-- Form wizard with icon tabs section start -->
        <div class="row match-height">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title" id="basic-layout-tooltip">Client</h4>
                        <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                        <div class="heading-elements">
                            <ul class="list-inline mb-0">
                                <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                                <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                                <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                                <li><a data-action="close"><i class="ft-x"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="card-content collapse show">
                        <div class="card-body">

                            <form class="form" action="clientinsert" method="post">
                                @csrf
                                <div class="form-body">

                                    <!-- test -->
                                    <!-- multistep form -->

                                    <div class="form-group col-12 mb-2 file-repeater">
                                        <div data-repeater-list="repeater_list">
                                            <div data-repeater-item>
                                                <div class="row mb-1">
                                                    <div class="card-content col-12 p_d">
                                                        <div class="col-md-7">
                                                            <div class="card-body pl_0">
                                                                <div class="d-inline-block  mr-1">
                                                                    <span>Work Plan</span>
                                                                </div>
                                                                <div
                                                                    class="d-inline-block custom-control custom-radio mr-1">

                                                                    <input type="radio" class="custom-control-input"
                                                                        name="colorRadio" id="radio1">
                                                                    <label class="custom-control-label"
                                                                        for="radio1">Current Day Plan</label>

                                                                </div>
                                                                <div
                                                                    class="d-inline-block custom-control custom-radio mr-1">
                                                                    <input type="radio" class="custom-control-input"
                                                                        name="colorRadio" id="radio2" checked
                                                                        onclick="show2();">
                                                                    <label class="custom-control-label" for="radio2"
                                                                        checked>Previous Day Plan </label>
                                                                </div>
                                                                <div
                                                                    class="d-inline-block custom-control custom-radio mr-1">
                                                                    <input type="radio" class="custom-control-input"
                                                                        name="colorRadio" id="radio3"
                                                                        onclick="show1();">
                                                                    <label class="custom-control-label" for="radio3"
                                                                        disabled>Long Leave</label>
                                                                </div>
                                                            </div>
                                                            <div id="div1" class="divhide">
                                                                <div class="row m_0">
                                                                    <div class="col-md-3 mr_0">
                                                                        <div class="form-group mb_0">
                                                                            <label for="">Task Date</label>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-8">
                                                                        <div class="form-group">
                                                                            <input type="text" class="form-control"
                                                                                data-toggle="tooltip"
                                                                                data-trigger="hover"
                                                                                data-placement="top"
                                                                                data-title="Date Opened" id="pincode"
                                                                                name="pincode">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="card-content col-12 p_d">
                                                                    <div class="row m_0">
                                                                        <div class="col-md-3 mr_0">
                                                                            <div class="form-group mb_0">
                                                                                <label for="">Session</label>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-9">
                                                                            <div
                                                                                class="d-inline-block custom-control custom-radio mr-1">

                                                                                <input type="radio"
                                                                                    class="custom-control-input"
                                                                                    name="colorRadio" id="radio1">
                                                                                <label class="custom-control-label"
                                                                                    for="radio1">Forenoon</label>

                                                                            </div>
                                                                            <div
                                                                                class="d-inline-block custom-control custom-radio mr-1">
                                                                                <input type="radio"
                                                                                    class="custom-control-input"
                                                                                    name="colorRadio" id="radio2"
                                                                                    checked>
                                                                                <label class="custom-control-label"
                                                                                    for="radio2" checked>Afternoon
                                                                                </label>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="row m_0">
                                                                        <div class="col-md-3 mr_0">
                                                                            <div class="form-group mb_0">
                                                                                <label for="">Work Plan Type</label>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-9">
                                                                            <div
                                                                                class="d-inline-block custom-control custom-radio mr-1">

                                                                                <input type="radio"
                                                                                    class="custom-control-input"
                                                                                    name="colorRadio" id="radio1">
                                                                                <label class="custom-control-label"
                                                                                    for="radio1">Sourcing</label>

                                                                            </div>
                                                                            <div
                                                                                class="d-inline-block custom-control custom-radio mr-1">
                                                                                <input type="radio"
                                                                                    class="custom-control-input"
                                                                                    name="colorRadio" id="radio2"
                                                                                    checked>
                                                                                <label class="custom-control-label"
                                                                                    for="radio2" checked>Others
                                                                                </label>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="field_wrapper">

                                                            </div>
                                                            <div id="CarsPreviousDayPlan" class="desc"
                                                                style="display: none;">
                                                                Selected
                                                            </div>
                                                            <div
                                                                class="d-inline-block custom-control custom-radio mr-1">
                                                                <input type="radio" class="custom-control-input"
                                                                    name="colorRadiotxt"><label
                                                                    class="custom-control-label" for="radio1">Current
                                                                    Day Plan</label> </div>
                                                            <div
                                                                class="d-inline-block custom-control custom-radio mr-1">
                                                                <input type="radio" class="custom-control-input"
                                                                    name="colorRadiotxt"><label
                                                                    class="custom-control-label" for="radio2"
                                                                    checked>Previous Day Plan </label></div>
                                                            <div
                                                                class="d-inline-block custom-control custom-radio mr-1">
                                                                <input type="radio" class="custom-control-input"
                                                                    name="colorRadiotxt"><label
                                                                    class="custom-control-label" for="radio3">Long
                                                                    Leave</label></div>
                                                            <div id="AddButtondiv" class="divhide">
                                                                <!-- <div class="col-2 col-xl-1">
                                                                    <button type="button" data-repeater-delete
                                                                        class="btn btn-icon btn-danger mr-1"><i
                                                                            class="ft-x"></i></button>
                                                                </div> -->
                                                                <div class="row m_0">
                                                                    <div class="col-md-12">
                                                                        <button type="button"
                                                                            class="btn btn-primary btn-sm add_button">
                                                                            <i class="ft-plus"></i> Add file
                                                                        </button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>


                                                </div>
                                            </div>
                                        </div>

                                    </div>

                                </div>
                        </div>
                    </div>

                    <div class="form-actions">
                        <button type="button" class="btn btn-warning mr-1">
                            <i class="ft-x"></i> Cancel
                        </button>
                        <button type="submit" class="btn btn-primary">
                            <i class="la la-check-square-o"></i> Save
                        </button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Form wizard with icon tabs section end -->


</div>
</div>
<script>
function show1() {
    document.getElementById('div1').style.display = 'none';
}

function show2() {
    document.getElementById('div1').style.display = 'block';
    document.getElementById('AddButtondiv').style.display = 'block';
}
</script>
<script>
$(document).ready(function() {
    $("input[name$='colorRadiotxt']").click(function() {
        var test = $(this).val();

        $("div.desc").hide();
        $("#Cars" + test).show();
    });
});
</script>
<script>
$(document).ready(function() {
    var maxField = 100; //Input fields increment limitation
    var addButton = $('.add_button'); //Add button selector
    var wrapper = $('.field_wrapper'); //Input field wrapper
    var fieldHTML =
        '<div class="row m_0"><a href="javascript:void(0);" class="remove_button"><span>----</span></div>'; //New input field html
    var x = 1; //Initial field counter is 1

    //Once add button is clicked
    $(addButton).click(function() {
        //Check maximum number of input fields
        if (x < maxField) {
            x++; //Increment field counter
            $(wrapper).append(fieldHTML); //Add field html
        }
    });

    //Once remove button is clicked
    $(wrapper).on('click', '.remove_button', function(e) {
        e.preventDefault();
        $(this).parent('div').remove(); //Remove field html
        x--; //Decrement field counter
    });
});
</script>
@stop