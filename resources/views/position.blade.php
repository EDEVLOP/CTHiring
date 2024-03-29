@extends('layout.admin_layout')
@section('content')
<script src="https://cdn.ckeditor.com/4.5.11/standard/ckeditor.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>



<style>
body.vertical-layout.vertical-menu-modern.menu-expanded .footer {
    margin-left: 0px;
}


/* for skil */

.tags-input-wrapper {
    background: transparent;
    padding: 10px;
    border-radius: 4px;
    max-width: 400px;
    border: 1px solid #ccc
}

.tags-input-wrapper input {
    border: none;
    background: transparent;
    outline: none;
    width: 140px;
    margin-left: 8px;
}

.tags-input-wrapper .tag {
    display: inline-block;
    background-color: #fa0e7e;
    color: white;
    border-radius: 40px;
    padding: 0px 3px 0px 7px;
    margin-right: 5px;
    margin-bottom: 5px;
    box-shadow: 0 5px 15px -2px rgba(250, 14, 126, .7)
}

.tags-input-wrapper .tag a {
    margin: 0 7px 3px;
    display: inline-block;
    cursor: pointer;
}
</style>

<div class="app-content content">
    <div class="content-wrapper">
        <div class="content-header row">
            <div class="content-header-left col-md-6 col-12 mb-2 breadcrumb-new">
                <h3 class="content-header-title mb-0 d-inline-block">Positions</h3><br>
                <div class="row breadcrumbs-top d-inline-block">
                    <div class="breadcrumb-wrapper col-12">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item active">Positions
                            </li>
                            <li class="breadcrumb-item"><a href="#">Add Position</a>
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
                        <h4 class="card-title" id="basic-layout-tooltip"></h4>
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
                    <!-- FORM START -->
                    <div class="card-content collapse show">
                        <div class="card-body">

                            <form class="form" action="position_inserts" method="post" enctype="multipart/form-data">
                                @csrf

                                <div class="container">
                                    <!-- Nav tabs -->
                                    <ul class="nav nav-tabs" role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link active" data-toggle="tab" href="#home">Basic Details</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" data-toggle="tab" href="#menu1">Job Description</a>
                                        </li>
                                    </ul>

                                    <!-- Tab panes -->
                                    <div class="tab-content">
                                        <div id="home" class="container tab-pane active"><br>
                                            <div class="form-body">
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label for="">Client Name</label>
                                                            <select class="select2 form-control" data-toggle="tooltip"
                                                                data-trigger="hover" data-placement="top"
                                                                data-title="Priority" name="fullname" id="fullname">
                                                                @foreach ($client1 as $client2)
                                                                <option value="{{$client2->id}}">
                                                                    {{$client2->client_name}}

                                                                </option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label for="">SPOC Name</label>

                                                            <select class="select2 form-control" data-toggle="tooltip"
                                                                data-trigger="hover" data-placement="top"
                                                                data-title="Priority" name="client_contanct_name"
                                                                id="client_contanct_name">

                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label for="">Job Title </label>
                                                            <input type="text" class="form-control"
                                                                data-toggle="tooltip" data-trigger="hover"
                                                                data-placement="top" data-title="Date Opened"
                                                                id="jobname" name="jobname">
                                                        </div>
                                                    </div>
                                                </div>


                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label for="">Job Location </label>
                                                            <input type="text" class="form-control"
                                                                data-toggle="tooltip" data-trigger="hover"
                                                                data-placement="top" data-title="Date Fixed"
                                                                id="joblocation" name="joblocation">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label for="">Job Code</label>
                                                            <input type="text" class="form-control" id="jobcode"
                                                                name="jobcode" value="CT/{{$jobcode}}/{{$year}}"
                                                                readonly>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label for="">Experience</label>
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="form-group">

                                                                    <select class="form-control select2"
                                                                        data-toggle="tooltip" data-trigger="hover"
                                                                        data-placement="top" name="min_experience"
                                                                        id="min_experience">
                                                                        <option selected>Min.</option>

                                                                        @php
                                                                        $i=1;
                                                                        for($i;$i<=50;$i++) { @endphp <option
                                                                            value="{{$i}}">{{$i}}
                                                                            </option>
                                                                            @php
                                                                            }
                                                                            @endphp

                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <select class="form-control select2"
                                                                        data-toggle="tooltip" data-trigger="hover"
                                                                        data-placement="top" name="max_experience"
                                                                        id="max_experience">
                                                                        <option selected>Max.</option>

                                                                        @php
                                                                        $i=1;
                                                                        for($i;$i<=50;$i++) { @endphp <option
                                                                            value="{{$i}}">{{$i}}
                                                                            </option>
                                                                            @php
                                                                            }
                                                                            @endphp

                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>


                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <label for="">Annual CTC</label>
                                                        <div class="row">
                                                            <div class="col-md-3">
                                                                <div class="form-group">
                                                                    <input type="text" class="form-control" id=""
                                                                        name="min_salary" value=""
                                                                        placeholder="Min. CTC">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-3">
                                                                <div class="form-group">
                                                                    <select class="form-control" data-toggle="tooltip"
                                                                        data-trigger="hover" data-placement="top"
                                                                        data-title="Priority" name="salary_value">
                                                                        <option selected>Select</option>
                                                                        <option value="Lakhs">Lakhs</option>
                                                                        <option value="K">Thousand</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-3">
                                                                <div class="form-group">
                                                                    <input type="text" class="form-control" id=""
                                                                        name="max_salary" value=""
                                                                        placeholder="Min. CTC">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-3">
                                                                <div class="form-group">
                                                                    <select class="form-control select2"
                                                                        data-toggle="tooltip" data-trigger="hover"
                                                                        data-placement="top" name="salary_value2">
                                                                        <option selected>Select</option>
                                                                        <option value="Lakhs">Lakhs</option>
                                                                        <option value="k">Thousand</option>

                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="">Qualification</label>
                                                            <select class="form-control select2" data-toggle="tooltip"
                                                                data-trigger="hover" data-placement="top"
                                                                data-title="Priority" name="qualification"
                                                                id="qualification">

                                                                @foreach ($qualification1 as $qualifi2)
                                                                <option value="{{$qualifi2->id}}">
                                                                    {{$qualifi2->qualification_name}}
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
                                                                data-trigger="hover" data-placement="top"
                                                                name="functionarea" id="functionarea">
                                                                <option selected>select</option>

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
                                                            <label for="">Industry </label>
                                                            <select class="form-control select2" data-toggle="tooltip"
                                                                data-trigger="hover" data-placement="top"
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
                                                        <label for="">Age</label>
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="form-group">

                                                                    <select class="form-control select2"
                                                                        data-toggle="tooltip" data-trigger="hover"
                                                                        data-placement="top" name="min_age"
                                                                        id="min_age">
                                                                        @php
                                                                        $i=18;
                                                                        for($i;$i<=70;$i++) { @endphp <option
                                                                            value="{{$i}}">{{$i}}
                                                                            </option>
                                                                            @php
                                                                            }
                                                                            @endphp
                                                                    </select>



                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <select class="form-control select2"
                                                                        data-toggle="tooltip" data-trigger="hover"
                                                                        data-placement="top" name="max_age"
                                                                        id="max_age">
                                                                        @php
                                                                        $i=18;
                                                                        for($i;$i<=70;$i++) { @endphp <option
                                                                            value="{{$i}}">{{$i}}
                                                                            </option>
                                                                            @php
                                                                            }
                                                                            @endphp
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">

                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label for="">Technical Skills </label>
                                                            <!-- <input type="text" class="form-control" id="technical"
                                                                name="technical" value=""
                                                                placeholder="Enter skills separated by comma"> -->
                                                            <input type="text" class="form-control" id="tag-input1"
                                                                name="technical" value=""
                                                                placeholder="Enter skills separated by comma">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label for="">Behavioural Skills</label>
                                                        <div class="form-group">
                                                            <!-- <input type="text" class="form-control" value=""
                                                                id="behavioural" name="behavioural"
                                                                placeholder="Enter skills separated by comma"> -->

                                                            <input type="text" class="form-control"
                                                                id="tag-behavioural2" name="behavioural" value=""
                                                                placeholder="Enter skills separated by comma">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label for="">Total Openings</label>
                                                        <select class="select2 form-control" data-toggle="tooltip"
                                                            data-trigger="hover" data-placement="top"
                                                            data-title="Priority" name="opening" id="opening"
                                                            onchange="position();">
                                                            <option selected="">select</option>

                                                            @php
                                                            $i=1;
                                                            for($i;$i<=50;$i++) { @endphp <option value="{{$i}}">{{$i}}
                                                                </option>
                                                                @php
                                                                }
                                                                @endphp


                                                        </select>

                                                    </div>
                                                </div>

                                                <input type="text" value="" name="position_store" id="position_store">
                                                <input type="text" value="" name="name_position" id="name_position">

                                                <div class="row">

                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label for="">Recruiters</label>

                                                            <select class="select2 form-control" data-toggle="tooltip"
                                                                data-trigger="hover" data-placement="top" multiple=""
                                                                name="recruitername[]" id="type_val"
                                                                onchange="openPopup()">

                                                                <!--
                                                                <option value=" HI" data-toggle="modal"
                                                                    data-target="#myModal">
                                                                    Hawaii</option>

                                                                <option value="CA">California</option>
                                                                <option value="NV">Nevada</option>
                                                                <option value="OR">Oregon</option>
                                                                <option value="WA">Washington</option> -->


                                                                <option selected>Please Select</option>
                                                                @foreach($requiter as $requiter1)
                                                                <option value="{{$requiter1->id}}">
                                                                    {{$requiter1->fname}}{{$requiter1->lname}}</option>

                                                                @endforeach

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
                                                                        <button type="button" class="close"
                                                                            data-dismiss="modal"
                                                                            onclick="positionselect();">&times;</button>

                                                                    </div>
                                                                    <div class="modal-body">
                                                                        <label>No. Of position</label>
                                                                        <input type="text" name="no_position" value=""
                                                                            id="no_position"
                                                                            onkeyup="showMe(this.value)">

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
                                                            <select class="form-control select2" data-toggle="tooltip"
                                                                data-trigger="hover" data-placement="top"
                                                                name="crm_name" id="crm_name">
                                                                <option selected>Please Select</option>
                                                                @foreach ($crm_position as $crm_posit)
                                                                <option value="{{$crm_posit->id}}">
                                                                    {{$crm_posit->fname}}{{$crm_posit->lname}}
                                                                </option>
                                                                @endforeach



                                                            </select>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label for="">Billable value</label>
                                                            <input type="text" class="form-control"
                                                                data-toggle="tooltip" data-trigger="hover"
                                                                data-placement="top" id="count_bill_value"
                                                                name="bill_value" value=""
                                                                oninput="calculateAmount(this.value)">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">

                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label for="">Total Billable Value</label>
                                                            <input type="text" class="form-control"
                                                                id="count_total_billvalue" name="total_billvalue"
                                                                value="" readonly>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label for="">Expected Joining Date</label>
                                                        <div class="form-group ">

                                                            <input type="text" class="form-control input-lg"
                                                                id="animate" placeholder="DD/MM/YY" name="joiningdate">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-3">
                                                        <div class="controls">
                                                            <div class="form-group">
                                                                <h5>
                                                                    <strong>Gender </strong>
                                                                    <!-- <span class="required">*</span> -->
                                                                </h5>
                                                                <div class="controls">
                                                                    <div class="skin skin-square">
                                                                        <input type="radio" value="Male"
                                                                            name="basic_radio" id="radio1">
                                                                        <label for="radio1">Male</label>
                                                                    </div>
                                                                    <div class="skin skin-square">
                                                                        <input type="radio" value="Female"
                                                                            name="basic_radio" id="radio2">
                                                                        <label for="radio2">Female</label>
                                                                    </div>
                                                                    <div class="skin skin-square">
                                                                        <input type="radio" value="Other"
                                                                            name="basic_radio" id="radio3">
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
                                                                    <!-- <span class="required">*</span> -->
                                                                </h5>
                                                                <div class="controls">
                                                                    <div class="skin skin-square">
                                                                        <input type="radio" value="yes" name="resume1"
                                                                            id="resum1">
                                                                        <label for="radio1">Yes</label>
                                                                    </div>
                                                                    <div class="skin skin-square">
                                                                        <input type="radio" value="no" name="resume1"
                                                                            id="resum2">
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
                                                                    <!-- <span class="required">*</span> -->
                                                                </h5>
                                                                <div class="controls">
                                                                    <div class="skin skin-square">
                                                                        <input type="radio" value="Snapshot"
                                                                            name="resumetype1" id="resumtype1">
                                                                        <label>Snapshot</label>
                                                                    </div>
                                                                    <div class="skin skin-square">
                                                                        <input type="radio" value="fullyformattedresume"
                                                                            name="resumetype1" id="resumtype2">
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
                                                                    <!-- <span class="required">*</span> -->
                                                                </h5>
                                                                <div class="controls">
                                                                    <div class="skin skin-square">
                                                                        <input type="radio" value="rpo" name="ptype1"
                                                                            id="project_type1">
                                                                        <label>RPO</label>
                                                                    </div>
                                                                    <div class="skin skin-square">
                                                                        <input type="radio" value="nop_rpo"
                                                                            name="ptype1" id="project_type2">
                                                                        <label>Nop_RPO</label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">

                                                        <div class="controls">
                                                            <div class="form-group">
                                                                <h5>
                                                                    <strong>Publish In Website</strong>
                                                                    <!-- <span class="required">*</span> -->
                                                                </h5>
                                                                <div class="controls">
                                                                    <div class="skin skin-square">
                                                                        <input type="radio" value="yes" name="website1"
                                                                            id="publish_website1">
                                                                        <label>Yes</label>
                                                                    </div>
                                                                    <div class="skin skin-square">
                                                                        <input type="radio" value="no" name="website1"
                                                                            id="publish_website2">
                                                                        <label>No</label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>







                                                </div>
                                            </div>
                                        </div>

                                        <!-- TAB FORM START -->

                                        <div id="menu1" class="container tab-pane fade"><br>
                                            <div class="form-group mb-2 repeater">
                                                <div data-repeater-list>
                                                    <div data-repeater-item>
                                                        <div class="row mb-1">
                                                            <div class="col-md-12">
                                                                <div class="form-group">
                                                                    <label for="">Job Description</label>
                                                                    <textarea name="editor1" id="editor1" rows="10"
                                                                        cols="80"></textarea>
                                                                    <script>
                                                                    CKEDITOR.replace('editor1');
                                                                    </script>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-12">
                                                                <div class="form-group">
                                                                    <label for="">Attachment</label>
                                                                    <input type="file" class="form-control"
                                                                        name="filetype">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-actions">
                                                <button type="submit" name="submit"
                                                    class="btn btn-primary">Save</button>
                                            </div>
                                        </div>

                                        <!-- TAB FORM END -->
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- FORM END -->
                </div>
            </div>
            <!-- Form wizard with icon tabs section end -->
        </div>
    </div>
    <script type="text/javascript">
    // function readTextFile(file, callback, encoding) {
    //     var reader = new FileReader();
    //     reader.addEventListener('load', function(e) {
    //         callback(this.result);
    //     });
    //     if (encoding) reader.readAsText(file, encoding);
    //     else reader.readAsText(file);
    // }

    // function fileChosen(input, output) {
    //     if (input.files && input.files[0]) {
    //         readTextFile(
    //             input.files[0],
    //             function(str) {
    //                 output.value = str;
    //             }
    //         );
    //     }
    // }

    $('#files').on('change', function() {
        var result = $("#files").text();

        fileChosen(this, document.getElementById('editor1'));
        CKEDITOR.instances['editor1'].setData(result);
    });
    </script>

    <!-- //fetch client contact for responding client// -->

    <script>
    $(document).ready(function() {


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


    <!-- HIDDEN FIELDS FOR TOTAL OPENING AND POSITION GIVEN -->
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

    <!-- totalbillable count script code -->
    <script>
    function calculateAmount(val, x) {
        var x = document.getElementById('opening').value;

        var tot_price = val * x;
        // /display the result/
        var divobj = document.getElementById('count_total_billvalue');
        divobj.value = tot_price;
    }
    </script>


    <!-- min age max Experience dropdown script -->
    <script>
    var minExpe = $('#min_experience'),
        maxExpe = $('#max_experience');

    minExpe.on('change', function() {

        maxExpe.children("option").each(function() {
            var opt = $(this),
                optVal = parseInt(opt.attr('value'));

            if (optVal <= minExpe.val()) {
                opt.attr('disabled', 'disabled');
            } else {
                opt.removeAttr('disabled');
            }

        });

    });

    maxExpe.on('change', function() {

        minExpe.children("option").each(function() {
            var opt = $(this),
                optVal = parseInt(opt.attr('value'));

            if (optVal != 0 && optVal >= maxExpe.val()) {
                opt.attr('disabled', 'disabled');
            } else {
                opt.removeAttr('disabled');
            }

        });

    });
    </script>

    <!-- min age max age dropdown script -->
    <script>
    var minPrice = $('#min_age'),
        maxPrice = $('#max_age');

    minPrice.on('change', function() {

        maxPrice.children("option").each(function() {
            var opt = $(this),
                optVal = parseInt(opt.attr('value'));

            if (optVal <= minPrice.val()) {
                opt.attr('disabled', 'disabled');
            } else {
                opt.removeAttr('disabled');
            }

        });

    });

    maxPrice.on('change', function() {

        minPrice.children("option").each(function() {
            var opt = $(this),
                optVal = parseInt(opt.attr('value'));

            if (optVal != 0 && optVal >= maxPrice.val()) {
                opt.attr('disabled', 'disabled');
            } else {
                opt.removeAttr('disabled');
            }

        });

    });
    </script>
    <!-- FOR TECHNICAL SKILL SCRIPT  -->
    <script>
    (function() {

        "use strict"


        // Plugin Constructor
        var TagsInput = function(opts) {
            this.options = Object.assign(TagsInput.defaults, opts);
            this.init();
        }

        // Initialize the plugin
        TagsInput.prototype.init = function(opts) {
            this.options = opts ? Object.assign(this.options, opts) : this.options;

            if (this.initialized)
                this.destroy();

            if (!(this.orignal_input = document.getElementById(this.options.selector))) {
                console.error("tags-input couldn't find an element with the specified ID");
                return this;
            }

            this.arr = [];
            this.wrapper = document.createElement('div');
            this.input = document.createElement('input');
            init(this);
            initEvents(this);

            this.initialized = true;
            return this;
        }

        // Add Tags
        TagsInput.prototype.addTag = function(string) {

            if (this.anyErrors(string))
                return;

            this.arr.push(string);
            var tagInput = this;

            var tag = document.createElement('span');
            tag.className = this.options.tagClass;
            tag.innerText = string;

            var closeIcon = document.createElement('a');
            closeIcon.innerHTML = '&times;';

            // delete the tag when icon is clicked
            closeIcon.addEventListener('click', function(e) {
                e.preventDefault();
                var tag = this.parentNode;

                for (var i = 0; i < tagInput.wrapper.childNodes.length; i++) {
                    if (tagInput.wrapper.childNodes[i] == tag)
                        tagInput.deleteTag(tag, i);
                }
            })


            tag.appendChild(closeIcon);
            this.wrapper.insertBefore(tag, this.input);
            this.orignal_input.value = this.arr.join(',');

            return this;
        }

        // Delete Tags
        TagsInput.prototype.deleteTag = function(tag, i) {
            tag.remove();
            this.arr.splice(i, 1);
            this.orignal_input.value = this.arr.join(',');
            return this;
        }

        // Make sure input string have no error with the plugin
        TagsInput.prototype.anyErrors = function(string) {
            if (this.options.max != null && this.arr.length >= this.options.max) {
                console.log('max tags limit reached');
                return true;
            }

            if (!this.options.duplicate && this.arr.indexOf(string) != -1) {
                console.log('duplicate found " ' + string + ' " ')
                return true;
            }

            return false;
        }

        // Add tags programmatically
        TagsInput.prototype.addData = function(array) {
            var plugin = this;

            array.forEach(function(string) {
                plugin.addTag(string);
            })
            return this;
        }

        // Get the Input String
        TagsInput.prototype.getInputString = function() {
            return this.arr.join(',');
        }


        // destroy the plugin
        TagsInput.prototype.destroy = function() {
            this.orignal_input.removeAttribute('hidden');

            delete this.orignal_input;
            var self = this;

            Object.keys(this).forEach(function(key) {
                if (self[key] instanceof HTMLElement)
                    self[key].remove();

                if (key != 'options')
                    delete self[key];
            });

            this.initialized = false;
        }

        // Private function to initialize the tag input plugin
        function init(tags) {
            tags.wrapper.append(tags.input);
            tags.wrapper.classList.add(tags.options.wrapperClass);
            tags.orignal_input.setAttribute('hidden', 'true');
            tags.orignal_input.parentNode.insertBefore(tags.wrapper, tags.orignal_input);
        }

        // initialize the Events
        function initEvents(tags) {
            tags.wrapper.addEventListener('click', function() {
                tags.input.focus();
            });


            tags.input.addEventListener('keydown', function(e) {
                var str = tags.input.value.trim();

                if (!!(~[9, 13, 188].indexOf(e.keyCode))) {
                    e.preventDefault();
                    tags.input.value = "";
                    if (str != "")
                        tags.addTag(str);
                }

            });
        }


        // Set All the Default Values
        TagsInput.defaults = {
            selector: '',
            wrapperClass: 'tags-input-wrapper',
            tagClass: 'tag',
            max: null,
            duplicate: false
        }

        window.TagsInput = TagsInput;

    })();

    var tagInput1 = new TagsInput({
        selector: 'tag-input1',
        duplicate: false,
        max: 10
    });
    </script>

    <!-- FOR BEHAVIOURAL SKILS -->
    <script>
    (function() {

        "use strict"


        // Plugin Constructor
        var TagsInput = function(opts) {
            this.options = Object.assign(TagsInput.defaults, opts);
            this.init();
        }

        // Initialize the plugin
        TagsInput.prototype.init = function(opts) {
            this.options = opts ? Object.assign(this.options, opts) : this.options;

            if (this.initialized)
                this.destroy();

            if (!(this.orignal_input = document.getElementById(this.options.selector))) {
                console.error("tags-input couldn't find an element with the specified ID");
                return this;
            }

            this.arr = [];
            this.wrapper = document.createElement('div');
            this.input = document.createElement('input');
            init(this);
            initEvents(this);

            this.initialized = true;
            return this;
        }

        // Add Tags
        TagsInput.prototype.addTag = function(string) {

            if (this.anyErrors(string))
                return;

            this.arr.push(string);
            var tagInput = this;

            var tag = document.createElement('span');
            tag.className = this.options.tagClass;
            tag.innerText = string;

            var closeIcon = document.createElement('a');
            closeIcon.innerHTML = '&times;';

            // delete the tag when icon is clicked
            closeIcon.addEventListener('click', function(e) {
                e.preventDefault();
                var tag = this.parentNode;

                for (var i = 0; i < tagInput.wrapper.childNodes.length; i++) {
                    if (tagInput.wrapper.childNodes[i] == tag)
                        tagInput.deleteTag(tag, i);
                }
            })


            tag.appendChild(closeIcon);
            this.wrapper.insertBefore(tag, this.input);
            this.orignal_input.value = this.arr.join(',');

            return this;
        }

        // Delete Tags
        TagsInput.prototype.deleteTag = function(tag, i) {
            tag.remove();
            this.arr.splice(i, 1);
            this.orignal_input.value = this.arr.join(',');
            return this;
        }

        // Make sure input string have no error with the plugin
        TagsInput.prototype.anyErrors = function(string) {
            if (this.options.max != null && this.arr.length >= this.options.max) {
                console.log('max tags limit reached');
                return true;
            }

            if (!this.options.duplicate && this.arr.indexOf(string) != -1) {
                console.log('duplicate found " ' + string + ' " ')
                return true;
            }

            return false;
        }

        // Add tags programmatically
        TagsInput.prototype.addData = function(array) {
            var plugin = this;

            array.forEach(function(string) {
                plugin.addTag(string);
            })
            return this;
        }

        // Get the Input String
        TagsInput.prototype.getInputString = function() {
            return this.arr.join(',');
        }


        // destroy the plugin
        TagsInput.prototype.destroy = function() {
            this.orignal_input.removeAttribute('hidden');

            delete this.orignal_input;
            var self = this;

            Object.keys(this).forEach(function(key) {
                if (self[key] instanceof HTMLElement)
                    self[key].remove();

                if (key != 'options')
                    delete self[key];
            });

            this.initialized = false;
        }

        // Private function to initialize the tag input plugin
        function init(tags) {
            tags.wrapper.append(tags.input);
            tags.wrapper.classList.add(tags.options.wrapperClass);
            tags.orignal_input.setAttribute('hidden', 'true');
            tags.orignal_input.parentNode.insertBefore(tags.wrapper, tags.orignal_input);
        }

        // initialize the Events
        function initEvents(tags) {
            tags.wrapper.addEventListener('click', function() {
                tags.input.focus();
            });


            tags.input.addEventListener('keydown', function(e) {
                var str = tags.input.value.trim();

                if (!!(~[9, 13, 188].indexOf(e.keyCode))) {
                    e.preventDefault();
                    tags.input.value = "";
                    if (str != "")
                        tags.addTag(str);
                }

            });
        }


        // Set All the Default Values
        TagsInput.defaults = {
            selector: '',
            wrapperClass: 'tags-input-wrapper',
            tagClass: 'tag',
            max: null,
            duplicate: false
        }

        window.TagsInput = TagsInput;

    })();

    var tagInput1 = new TagsInput({
        selector: 'tag-behavioural2',
        duplicate: false,
        max: 10
    });
    </script>
    @stop