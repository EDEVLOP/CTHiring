@extends('layout.admin_layout')
@section('content')
<div class="app-content content">
    <div class="content-wrapper">
        <div class="content-header row">
            <div class="content-header-left col-md-6 col-12 mb-2 breadcrumb-new">
                <h3 class="content-header-title mb-0 d-inline-block">Position</h3><br>
                <div class="row breadcrumbs-top d-inline-block">
                    <div class="breadcrumb-wrapper col-12">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Settings</a>
                            </li>
                            <li class="breadcrumb-item"><a href="#">Branch</a>
                            </li>
                            <li class="breadcrumb-item active">Position
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
                        <h4 class="card-title" id="basic-layout-tooltip">Position</h4>
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

                            <form class="form" action="position_inserts" method="post">
                                @csrf
                                <div class="form-body">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="">Client Name</label>



                                                <select class="select2 form-control" data-toggle="tooltip"
                                                    data-trigger="hover" data-placement="top" data-title="Priority"
                                                    name="fullname" id="fullname">
                                                    @foreach ($client1 as $client2)
                                                    <option value="{{$client2->id}}"> {{$client2->client_name}}

                                                    </option>
                                                    @endforeach
                                                </select>

                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">

                                                <label for="">SPOC Name</label>
                                                <select class="select2 form-control" data-toggle="tooltip"
                                                    data-trigger="hover" data-placement="top" data-title="Priority"
                                                    name="client_contanct_name" id="client_contanct_name">

                                                </select>

                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="">Job Title</label>
                                                <input type="text" class="form-control" data-toggle="tooltip"
                                                    data-trigger="hover" data-placement="top" data-title="Date Opened"
                                                    id="jobname" name="jobname">
                                            </div>
                                        </div>
                                    </div>


                                    <div class="row">

                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="issueinput4">Job Loction</label>
                                                <input type="text" class="form-control" data-toggle="tooltip"
                                                    data-trigger="hover" data-placement="top" data-title="Date Fixed"
                                                    id="joblocation" name="joblocation">
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="">Job Code</label>
                                                <input type="text" class="form-control" data-toggle="tooltip"
                                                    data-trigger="hover" data-placement="top" data-title="Date Opened"
                                                    id="jobcode" name="jobcode">
                                            </div>
                                        </div>

                                        <div class="col-md-4">

                                            <div class="form-group">
                                                <label for="">Experience</label>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <select class="form-control select2" data-toggle="tooltip"
                                                            data-trigger="hover" data-placement="top"
                                                            data-title="Priority" name="experience" id="experience">
                                                        </select>
                                                    </div>

                                                    <div class="col-md-6">
                                                        <select class="form-control select2" data-toggle="tooltip"
                                                            data-trigger="hover" data-placement="top"
                                                            data-title="Priority" name="experience" id="experience">
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="row">

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="">Annual CTC</label>
                                                <div class="row">
                                                    <div class="col-md-3">
                                                        <input type="text" class="form-control" data-toggle="tooltip"
                                                            data-trigger="hover" data-placement="top"
                                                            data-title="Date Opened" id="" name="">

                                                    </div>
                                                    <div class="col-md-3">
                                                        <select class="form-control" data-toggle="tooltip"
                                                            data-trigger="hover" data-placement="top"
                                                            data-title="Priority" name="">
                                                            <option selected>Lacs</option>
                                                            <option value="1">Select</option>
                                                            <option value="2">Lacs</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <input type="text" class="form-control" data-toggle="tooltip"
                                                            data-trigger="hover" data-placement="top"
                                                            data-title="Date Opened" id="" name="">
                                                    </div>
                                                    <div class="col-md-3">
                                                        <select class="form-control" data-toggle="tooltip"
                                                            data-trigger="hover" data-placement="top"
                                                            data-title="Priority" name="">
                                                            <option selected>Lacs</option>
                                                            <option value="1">Select</option>
                                                            <option value="2">Lacs</option>
                                                        </select>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="">Qualification</label>
                                                <select class="form-control select2" data-toggle="tooltip"
                                                    data-trigger="hover" data-placement="top" data-title="Priority"
                                                    name="qualification" id="qualification">

                                                    @foreach ($qualification1 as $qualifi2)
                                                    <option value="{{$qualifi2->id}}">{{$qualifi2->qualification_name}}
                                                    </option>

                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                    </div>



                                    <div class="row">


                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="">Functional Area</label>
                                                <select class="form-control select2" data-toggle="tooltip"
                                                    data-trigger="hover" data-placement="top" data-title="Priority"
                                                    name="functionarea" id="functionarea">

                                                    @foreach ($function_area1 as $function_area2)
                                                    <option value="{{$function_area2->id}}">
                                                        {{$function_area2->function}}

                                                    </option>

                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="">Industry</label>
                                                <select class="select2 form-control" data-toggle="tooltip"
                                                    data-trigger="hover" data-placement="top" data-title="Priority"
                                                    name="industryname" id="industryname">

                                                    @foreach ($industry1 as $industry2)
                                                    <option value="{{$industry2->id}}">
                                                        {{$industry2->industryfunction}}
                                                    </option>

                                                    @endforeach


                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="">Age</label>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <select class="form-control" data-toggle="tooltip"
                                                            data-trigger="hover" data-placement="top"
                                                            data-title="Priority" name="">
                                                            <option selected>Min</option>
                                                            <option value="1"></option>
                                                            <option value="2"></option>
                                                        </select>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <select class="form-control" data-toggle="tooltip"
                                                            data-trigger="hover" data-placement="top"
                                                            data-title="Priority" name="">
                                                            <option selected>Max</option>
                                                            <option value="1"></option>
                                                            <option value="2"></option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="">Technical Skils</label>
                                                <input type="text" class="form-control" data-toggle="tooltip"
                                                    data-trigger="hover" data-placement="top" data-title="Date Opened"
                                                    id="technical" name="technical">
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="">Behavioural Skils</label>
                                                <input type="text" class="form-control" data-toggle="tooltip"
                                                    data-trigger="hover" data-placement="top" data-title="Date Opened"
                                                    id="behavioural" name="behavioural">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="">Total Openings</label>
                                                <select class="select2 form-control" data-toggle="tooltip"
                                                    data-trigger="hover" data-placement="top" data-title="Priority"
                                                    name="opening" id="opening" onchange="position();">
                                                    <option selected="">select</option>
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4">4</option>
                                                    <option value="5">5</option>
                                                    <option value="6">6</option>
                                                    <option value="7">7</option>

                                                </select>
                                            </div>
                                        </div>
                                        <input type="text" value="" name="position_store" id="position_store">
                                        <input type="text" value="" name="name_position" id="name_position">

                                    </div>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="">Recruiters</label>
                                                <!-- <select class="select2 form-control" data-toggle="tooltip"
                                                    data-trigger="hover" data-placement="top" data-title="Priority"
                                                    name="recruitername" id="recruitername">


                                                </select> -->


                                                <select class="select2-customize-result form-control" multiple=""
                                                    name="recruitername" id="type_val" onchange="openPopup()">
                                                    <optgroup label="Alaskan/Hawaiian Time Zone">
                                                        <option value="AK">
                                                            Alaska</option>
                                                        <option value=" HI" data-toggle="modal" data-target="#myModal">
                                                            Hawaii</option>
                                                    </optgroup>
                                                    <optgroup label="Pacific Time Zone">
                                                        <option value="CA">California</option>
                                                        <option value="NV">Nevada</option>
                                                        <option value="OR">Oregon</option>
                                                        <option value="WA">Washington</option>
                                                    </optgroup>
                                                </select>


                                            </div>
                                        </div>

                                        <div class="">

                                            <!-- Trigger the modal with a button -->
                                            <!-- <button type="button" class="btn btn-info btn-lg"
                                                        data-toggle="modal" data-target="#myModal">Open Modal</button> -->

                                            <!-- Modal -->
                                            <div class="modal fade" id="myModal" role="dialog">
                                                <div class="modal-dialog">

                                                    <!-- Modal content-->
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <button type="button" class="close" data-dismiss="modal"
                                                                onclick="positionselect();">&times;</button>

                                                        </div>
                                                        <div class="modal-body">
                                                            <label>No. Of position</label>
                                                            <input type="text" name="no_position" value=""
                                                                id="no_position" onkeyup="showMe(this.value)">

                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-default"
                                                                data-dismiss="modal"
                                                                onclick="positionselect();">Close</button>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="">CRM</label>
                                                <select class="select2 form-control" data-toggle="tooltip"
                                                    data-trigger="hover" data-placement="top" data-title="Priority"
                                                    name="crm_name" id="crm_name">



                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="">Billable value</label>
                                                <input type="text" class="form-control" data-toggle="tooltip"
                                                    data-trigger="hover" data-placement="top" data-title="Date Opened"
                                                    id="bill_value" name="bill_value">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">


                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for=""> Total Billable value</label>
                                                <input type="text" class="form-control" data-toggle="tooltip"
                                                    data-trigger="hover" data-placement="top" data-title="Date Opened"
                                                    id="total_billvalue" name="total_billvalue">
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <label for="">Expected Joining Date</label>
                                            <div class="form-group ">

                                                <!-- <select class="select2 form-control" data-toggle="tooltip"
                                                    data-trigger="hover" data-placement="top" data-title="Priority"
                                                    name="join_date" id="join_date">


                                                </select> -->

                                                <input type="text" class="form-control input-lg" id="animate"
                                                    placeholder="DD/MM/YY">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-3">
                                            <div class="controls">
                                                <div class="form-group">
                                                    <h5>
                                                        <strong>Gender </strong>
                                                        <span class="required">*</span>
                                                    </h5>
                                                    <div class="controls">
                                                        <div class="skin skin-square">
                                                            <input type="radio" value="1" name="basic_radio"
                                                                id="radio1">
                                                            <label for="radio1">Male</label>
                                                        </div>
                                                        <div class="skin skin-square">
                                                            <input type="radio" value="2" name="basic_radio"
                                                                id="radio2">
                                                            <label for="radio2">Female</label>
                                                        </div>
                                                        <div class="skin skin-square">
                                                            <input type="radio" value="3" name="basic_radio"
                                                                id="radio3">
                                                            <label for="radio2">Other</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="controls">
                                                <div class="form-group">
                                                    <h5>
                                                        <strong>Hide Resume Contacts </strong>
                                                        <span class="required">*</span>
                                                    </h5>
                                                    <div class="controls">
                                                        <div class="skin skin-square">
                                                            <input type="radio" value="1" name="resume1" id="resum1">
                                                            <label for="radio1">Yes</label>
                                                        </div>
                                                        <div class="skin skin-square">
                                                            <input type="radio" value="2" name="resume1" id="resum2">
                                                            <label for="radio2">No</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>

                                        <div class="col-md-3">
                                            <div class="controls">
                                                <div class="form-group">
                                                    <h5>
                                                        <strong>Resume Type</strong>
                                                        <span class="required">*</span>
                                                    </h5>
                                                    <div class="controls">
                                                        <div class="skin skin-square">
                                                            <input type="radio" value="1" name="resumetype1"
                                                                id="resum1">
                                                            <label>Snapshot</label>
                                                        </div>
                                                        <div class="skin skin-square">
                                                            <input type="radio" value="2" name="resumetype1"
                                                                id="resum2">
                                                            <label>Fully Formatted Resume</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-3">
                                            <div class="controls">
                                                <div class="form-group">
                                                    <h5>
                                                        <strong>Project Type</strong>
                                                        <span class="required">*</span>
                                                    </h5>
                                                    <div class="controls">
                                                        <div class="skin skin-square">
                                                            <input type="radio" value="1" name="ptype1"
                                                                id="project_type1">
                                                            <label>RPO</label>
                                                        </div>
                                                        <div class="skin skin-square">
                                                            <input type="radio" value="2" name="ptype1"
                                                                id="project_type2">
                                                            <label>Nop_RPO</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="row">
                                        <div class="col-md-3">
                                            <div class="controls">
                                                <div class="form-group">
                                                    <h5>
                                                        <strong>Publish In Website</strong>
                                                        <span class="required">*</span>
                                                    </h5>
                                                    <div class="controls">
                                                        <div class="skin skin-square">
                                                            <input type="radio" value="1" name="website1"
                                                                id="publish_website1">
                                                            <label>Yes</label>
                                                        </div>
                                                        <div class="skin skin-square">
                                                            <input type="radio" value="2" name="website1"
                                                                id="publish_website2">
                                                            <label>No</label>
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
    $(document).ready(function() {
        //fetch dist clients

        $('#fullname').on('change', function() {
            var spoc_id = this.value;
            $("#client_contanct_name").html('');
            $.ajax({
                url: "{{url('fetchclientconct')}}",
                type: "POST",
                data: {
                    spoc_id: spoc_id,
                    _token: '{{csrf_token()}}'
                },
                dataType: 'json',

                success: function(result) {
                    $('#client_contanct_name').html(
                        '<option value="">Select SPOC</option>');
                    $.each(result.spoc_name, function(key, value) {
                        $("#client_contanct_name").append('<option value="' + value
                            .id +
                            '">' +
                            value.contact_name + '</option>');
                    });
                },
            });
        });
    });
    </script>
    <script>
    function position() {
        var positions = $('#opening').val();
        var position_store = $('#position_store').val(positions);

    }

    function openPopup() {
        $("#myModal").modal();

    }

    function positionselect() {
        var position_store;
        var minusposition_store;
        var minusposition_stores;

        var no_positions;

        var position = $('#opening').val();
        position_store = $('#position_store').val();



        //alert (position)
        var x = document.getElementById("type_val");

        for (var i = 0; i < x.options.length; i++) {
            if (x.options[i].selected == true) {
                var no_positions = $('#no_position').val();
                //alert(position_store);
                //alert(x.options[i].value);
                //alert(no_positions);

            }
        }
        //alert(position_store);
        if (no_positions != '') {
            minusposition_stores = parseInt(position_store) - parseInt(no_positions);

            minusposition_store = $('#position_store').val(minusposition_stores);
        } else {
            minusposition_store = $('#position_store').val();

        }
        $('#no_position').val('');

    }

    function showMe(e) {
        var position_store;
        var minusposition_store;
        var minusposition_stores;

        var no_positions;
        var name_positions = '';
        var position = $('#opening').val();
        position_store = $('#position_store').val();
        var no_positions = $('#no_position').val();
        minusposition_stores = parseInt(position_store) - parseInt(no_positions);

        minusposition_store = $('#position_store').val();

        var x = document.getElementById("type_val");

        for (var i = 0; i < x.options.length; i++) {
            if (x.options[i].selected == true) {
                var no_positions = $('#no_position').val();
                //alert(position_store);
                //alert(x.options[i].value);
                //alert(no_positions);
                //name_positions= name_positions + $('#name_position').val(e.concat('#').concat(x.options[i].value).concat(';'));

                //name_positions = name_positions + e.concat('#').concat(x.options[i].value).concat(';');
                name_positions = $('#name_position').val() + e.concat('#').concat(x.options[i].value).concat(';');
                //name_positions = e.concat('#').concat(name_positions) + x.options[i].value;
                //alert('gg');
                //alert(name_positions);
            }

        }



        $('#name_position').val(name_positions);



        if (e > minusposition_store) {
            alert("please check the values");
        }






    }

    document.getElementsByClassName('select2-selection__choice__remove').onclick = closemodal;

    function closemodal() {


        var close = document.getElementById(myModal);
        close.style.display = "none";



    }
    </script>

    @stop