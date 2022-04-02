@extends('layout.admin_layout')
@section('content')
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
    .select2 {
        width: 100% !important;
    }
</style>
<style>
    label {
        margin: 0;
    }

    .star-container {
        display: flex;
        flex-direction: row-reverse;
        align-items: flex-start;
        justify-content: flex-end;
    }

    .star-check {
        -webkit-appearance: none !important;
        -moz-appearance: none !important;
        -o-appearance: none !important;
        -ms-appearance: none !important;
        appearance: none !important;
        width: 24px;
        height: 24px;
        background-image: url('assets/stars.jpg');
        background-size: cover;
        background-repeat: no-repeat;
        background-position: right 0;
        cursor: pointer;
        outline: 0;
    }

    .star-check:checked,
    .star-check:checked~input {
        background-position: left 0;
    }
</style>
<div class="app-content content">
    <div class="content-wrapper">
        <div class="content-header row">
            <div class="content-header-left col-md-6 col-12 mb-2 breadcrumb-new">
                <h3 class="content-header-title mb-0 d-inline-block">Resume</h3><br>
                <div class="row breadcrumbs-top d-inline-block">
                    <div class="breadcrumb-wrapper col-12">
                        <ol class="breadcrumb">
                            <!-- <li class="breadcrumb-item"><a href="index.html">Settings</a>
                            </li> -->
                            <li class="breadcrumb-item"><a href="#">Resume</a>
                            </li>
                            <li class="breadcrumb-item active">Create Resume
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

                    <div class="card-content collapse show">
                        <div class="card-body">

                            <form class="form" action="clientinsert" method="post">
                                @csrf
                                <div class="form-body">
                                    <!-- multistep form -->
                                    <div id="box" class="col-md-12">
                                        <div class="card-header pl_0">
                                            <h4 class="card-title" id="basic-layout-tooltip">Personal</h4>
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
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="">Position For</label>
                                                    <input type="text" class="form-control" name="position">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="">Candidate Name</label>
                                                    <input type="text" class="form-control" name="candidatename">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="">Email</label>
                                                    <input type="text" class="form-control" name="email">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="">Mobile</label>
                                                    <input type="text" class="form-control" name="mobile">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="">DOB</label>
                                                    <input type="date" class="form-control" name="dob">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="">Current Designation</label>
                                                    <input type="text" class="form-control" name="designation">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="">Total Years of Exp</label>
                                                    <input type="text" class="form-control" name="exp">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="">CTC</label>
                                                    <div class="row">
                                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                                            <input type="text" class="form-control" name="present" placeholder="Present">
                                                        </div>
                                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                                            <input type="text" class="form-control" name="expected" placeholder="Expected">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="">Notice Period</label>
                                                    <select class="select2 form-control" name="notice">

                                                    </select>
                                                    <input type="checkbox" class="m_r" name="check" vlaue="">Presently Working?
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="">Gender</label><br>
                                                    <input type="radio" name="gender" class="m_r">Male
                                                    <input type="radio" name="gender" class="m_r">Female
                                                    <input type="radio" name="gender" class="m_r">Others
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="">Marital Status</label><br>
                                                    <input type="radio" name="status" class="m_r">Single
                                                    <input type="radio" name="status" class="m_r">Married
                                                    <input type="radio" name="status" class="m_r">Separated
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="">Family (Dependents)</label><br>
                                                    <textarea name="dependents" class="form-control"></textarea>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="">Present Location</label><br>
                                                    <input type="text" name="present" class="form-control"></textarea>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="">Native Location</label><br>
                                                    <input type="text" name="native" class="form-control"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12 col-sm-12 col-xs-12 form-actions">
                                            <span id="show"><input type="button" class="btn btn-primary f_right" value="Next"></span>
                                        </div>
                                    </div>

                                    <div id="box1" style="display:none;" class="col-md-12">
                                        <div class="card-header pl_0">
                                            <h4 class="card-title" id="basic-layout-tooltip">Education</h4>
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
                                        <div class="form-group mb-2 file-repeater">
                                            <div data-repeater-list="repeater_list">
                                                <div data-repeater-item>
                                                    <div class="row mb-1">
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="">Qualification</label>
                                                                <select class="form-control" name="qualification">
                                                                    <option selected>Select</option>

                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="">Degree</label>
                                                                <select class="form-control" name="degree">
                                                                    <option selected>Select</option>

                                                                </select>
                                                            </div>
                                                        </div>

                                                        <div class="col-md-4">
                                                            <div class="form-group">
                                                                <label for="">Specialization</label>
                                                                <select class="form-control" name="specialization">
                                                                    <option selected>Select</option>

                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="form-group">
                                                                <label for="">College</label>
                                                                <input type="text" class="form-control" name="college">
                                                            </div>
                                                        </div>

                                                        <div class="col-md-4">
                                                            <div class="form-group">
                                                                <label for="">% of Marks / Grades</label>
                                                                <div class="row">
                                                                    <div class="col-md-6">
                                                                        <input type="text" class="form-control" name="marks">
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <select class="form-control" name="grade">
                                                                            <option selected>Select</option>

                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="form-group">
                                                                <label for="">Year of Passing</label>
                                                                <select class="form-control branchid" name="yop">
                                                                    <option>Select</option>

                                                                </select>
                                                            </div>
                                                        </div>

                                                        <div class="col-md-4">
                                                            <div class="form-group">
                                                                <label for="">University</label><br>
                                                                <input type="text" class="form-control" value="" name="university">

                                                            </div>
                                                        </div>
                                                        <div class="col-12">
                                                            <button type="button" data-repeater-delete class="btn btn-icon btn-danger mr-1"><i class="ft-x"></i></button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <button type="button" data-repeater-create class="btn btn-primary">
                                                <i class="ft-plus"></i> Add new file
                                            </button>

                                        </div>
                                        <div class="form-actions">
                                            <span id="hide"><input type="button" class="btn btn-warning" value="Back"></span>
                                            <span id="show1"><input type="button" class="btn btn-primary f_right" value="Next"></span>
                                        </div>
                                    </div>

                                    <div id="box2" style="display:none;" class="col-md-12">
                                        <div class="card-header pl_0">
                                            <h4 class="card-title" id="basic-layout-tooltip">Experience</h4>
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
                                        <div class="form-group mb-2 file-repeater">
                                            <div data-repeater-list="repeater_list">
                                                <div data-repeater-item>
                                                    <div class="row mb-1">
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="">Company Name</label>
                                                                <input type="text" class="form-control" name="contactname">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="">Designation</label>
                                                                <input type="text" class="form-control" name="contactdesignation">
                                                            </div>
                                                        </div>

                                                        <div class="col-md-4">
                                                            <div class="form-group">
                                                                <label for="">Employment Period</label>
                                                                <div class='input-group'>
                                                                    <div class="col-md-6 col-sm-6 col-xs-12 pd_0">
                                                                        <label for="">From</label>
                                                                    </div>
                                                                    <div class="col-md-6 col-sm-6 col-xs-12 pd_0">
                                                                        <label for="">To</label>
                                                                    </div>
                                                                    <div class="col-md-6 col-sm-6 col-xs-12 pd_0">
                                                                        <input type='date' class="form-control" />
                                                                    </div>
                                                                    <div class="col-md-6 col-sm-6 col-xs-12 pd_0">
                                                                        <input type='date' class="form-control" />
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="form-group">
                                                                <label for="">Specialization/Expertise</label>
                                                                <input type="text" class="form-control" name="specialization">
                                                            </div>
                                                        </div>

                                                        <div class="col-md-4">
                                                            <div class="form-group">
                                                                <label for="">Project/ Certification Details (optional)</label>
                                                                <textarea class="form-control" name="certification"></textarea>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="form-group">
                                                                <label for="">Location</label>
                                                                <input type="text" class="form-control" name="location">
                                                            </div>
                                                        </div>

                                                        <div class="col-md-4">
                                                            <div class="form-group">
                                                                <label for="">Other Vital Information(Position Specific)</label>
                                                                <textarea class="form-control"></textarea>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="form-group">
                                                                <label for="">Reporting To</label>
                                                                <input type="text" class="form-control" name="reporting">
                                                            </div>
                                                        </div>
                                                        <div class="col-12">
                                                            <button type="button" data-repeater-delete class="btn btn-icon btn-danger mr-1"><i class="ft-x"></i></button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <button type="button" data-repeater-create class="btn btn-primary">
                                                <i class="ft-plus"></i> Add new file
                                            </button>

                                        </div>
                                        <div class="form-actions">
                                            <span id="hide1"><input type="button" class="btn btn-warning" value="Back"></span>
                                            <span id="show2"><input type="button" class="btn btn-primary f_right" value="Next"></span>
                                        </div>
                                    </div>

                                    <div id="box3" style="display:none;" class="col-md-12">
                                        <div class="card-header pl_0">
                                            <h4 class="card-title" id="basic-layout-tooltip">Consultant Assessment</h4>
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
                                        <div class="form-group mb-2">
                                            <div>
                                                <div>
                                                    <div class="row mb-1">
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="">Rate Technical Skills</label>
                                                                <div class="row">
                                                                    <div class="col-md-8 mb_10">
                                                                        <input type="text" class="form-control" name="">
                                                                    </div>
                                                                    <div class="col-md-4 mt_10">
                                                                        <div class="star-container">
                                                                            <input type="radio" name="star-check" id="five-star" class="star-check m_r">
                                                                            <input type="radio" name="star-check" id="four-star" class="star-check m_r">
                                                                            <input type="radio" name="star-check" id="three-star" class="star-check m_r">
                                                                            <input type="radio" name="star-check" id="two-star" class="star-check m_r">
                                                                            <input type="radio" name="star-check" id="one-star" class="star-check m_r">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-md-8 mb_10">
                                                                        <input type="text" class="form-control" name="">
                                                                    </div>
                                                                    <div class="col-md-4 mt_10">
                                                                        <div class="star-container">
                                                                            <input type="radio" name="star1-check" id="six-star" class="star-check m_r">
                                                                            <input type="radio" name="star1-check" id="seven-star" class="star-check m_r">
                                                                            <input type="radio" name="star1-check" id="eight-star" class="star-check m_r">
                                                                            <input type="radio" name="star1-check" id="nine-star" class="star-check m_r">
                                                                            <input type="radio" name="star1-check" id="ten-star" class="star-check m_r">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-md-8 mb_10">
                                                                        <input type="text" class="form-control" name="">
                                                                    </div>
                                                                    <div class="col-md-4 mt_10">
                                                                        <div class="star-container">
                                                                            <input type="radio" name="star2-check" id="star1" class="star-check m_r">
                                                                            <input type="radio" name="star2-check" id="star2" class="star-check m_r">
                                                                            <input type="radio" name="star2-check" id="star3" class="star-check m_r">
                                                                            <input type="radio" name="star2-check" id="star4" class="star-check m_r">
                                                                            <input type="radio" name="star2-check" id="star5" class="star-check m_r">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="">Rate Behavioural Skills</label>
                                                                <div class="row">
                                                                    <div class="col-md-8 mb_10">
                                                                        <input type="text" class="form-control" name="">
                                                                    </div>
                                                                    <div class="col-md-4 mt_10">
                                                                        <div class="star-container">
                                                                            <input type="radio" name="star3-check" id="star6" class="star-check m_r">
                                                                            <input type="radio" name="star3-check" id="star7" class="star-check m_r">
                                                                            <input type="radio" name="star3-check" id="star8" class="star-check m_r">
                                                                            <input type="radio" name="star3-check" id="star9" class="star-check m_r">
                                                                            <input type="radio" name="star3-check" id="star10" class="star-check m_r">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-md-8 mb_10">
                                                                        <input type="text" class="form-control" name="">
                                                                    </div>
                                                                    <div class="col-md-4 mt_10">
                                                                        <div class="star-container">
                                                                            <input type="radio" name="star4-check" id="star11" class="star-check m_r">
                                                                            <input type="radio" name="star4-check" id="star12" class="star-check m_r">
                                                                            <input type="radio" name="star4-check" id="star13" class="star-check m_r">
                                                                            <input type="radio" name="star4-check" id="star14" class="star-check m_r">
                                                                            <input type="radio" name="star4-check" id="star15" class="star-check m_r">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-md-8 mb_10">
                                                                        <input type="text" class="form-control" name="">
                                                                    </div>
                                                                    <div class="col-md-4 mt_10">
                                                                        <div class="star-container">
                                                                            <input type="radio" name="star5-check" id="star16" class="star-check m_r">
                                                                            <input type="radio" name="star5-check" id="star17" class="star-check m_r">
                                                                            <input type="radio" name="star5-check" id="star18" class="star-check m_r">
                                                                            <input type="radio" name="star5-check" id="star19" class="star-check m_r">
                                                                            <input type="radio" name="star5-check" id="star20" class="star-check m_r">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-md-8 mb_10">
                                                                        <input type="text" class="form-control" name="">
                                                                    </div>
                                                                    <div class="col-md-4 mt_10">
                                                                        <div class="star-container">
                                                                            <input type="radio" name="star6-check" id="star21" class="star-check m_r">
                                                                            <input type="radio" name="star6-check" id="star22" class="star-check m_r">
                                                                            <input type="radio" name="star6-check" id="star23" class="star-check m_r">
                                                                            <input type="radio" name="star6-check" id="star24" class="star-check m_r">
                                                                            <input type="radio" name="star6-check" id="star25" class="star-check m_r">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="">Consultant Assessment</label>
                                                                <textarea class="form-control"></textarea>
                                                            </div>
                                                        </div>

                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="">Any Other Inputs</label>
                                                                <textarea class="form-control"></textarea>
                                                            </div>
                                                        </div>

                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="">Interview Availability</label>
                                                                <textarea class="form-control"></textarea>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-actions">
                                            <span id="hide2"><input type="button" class="btn btn-warning" value="Back"></span>
                                            <span><input type="button" class="btn btn-success" value="Draft"></span>
                                            <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                                        </div>
                                    </div>
                                    <!-- multistep form -->
                                </div>
                        </div>
                    </div>
                    </form>
                </div>
            </div>
            <div class="col-md-12">
                <div class="card">
                    <div class="card-content collapse show">
                        <div class="card-body">
                            <h4>Candidate Resume</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Form wizard with icon tabs section end -->
</div>
<script>
    $(document).ready(function() {
        $("#hide").click(function() {
            $("#box").show();
            $("#box1").hide();
            $("#box2").hide();
            $("#box3").hide();
        });

        $("#show").click(function() {
            $("#box").hide();
            $("#box1").show();
            $("#box2").hide();
            $("#box3").hide();
        });
        $("#show1").click(function() {
            $("#box").hide();
            $("#box1").hide();
            $("#box2").show();
            $("#box3").hide();
        });
        $("#hide1").click(function() {
            $("#box").hide();
            $("#box1").show();
            $("#box2").hide();
            $("#box3").hide();
        });
        $("#show2").click(function() {
            $("#box").hide();
            $("#box1").hide();
            $("#box2").hide();
            $("#box3").show();
        });
        $("#hide2").click(function() {
            $("#box").hide();
            $("#box1").hide();
            $("#box2").show();
            $("#box3").hide();
        });

    });
</script>
<script>
    $(document).ready(function() {
        //fetch dist clients

        $('#statename').on('change', function() {
            var sta_id = this.value;
            $("#distname").html('');
            $.ajax({
                url: "{{url('fetchdist')}}",
                type: "POST",
                data: {
                    sta_id: sta_id,
                    _token: '{{csrf_token()}}'
                },
                dataType: 'json',

                success: function(result) {
                    $('#distname').html('<option value="">Select District</option>');
                    $.each(result.district, function(key, value) {
                        $("#distname").append('<option value="' + value.id + '">' +
                            value.district_title + '</option>');
                    });
                },
            });
        });

        //fetch City
        $('#distname').on('change', function() {
            var dis_id = this.value;
            $("#city").html('');
            $.ajax({
                url: "{{url('fetchcity')}}",
                type: "POST",
                data: {
                    dis_id: dis_id,
                    _token: '{{csrf_token()}}'
                },
                dataType: 'json',

                success: function(result1) {
                    $('#city').html('<option value="">Select City</option>');
                    $.each(result1.city, function(key, value) {
                        $("#city").append('<option value="' + value.id +
                            '">' + value.name + '</option>');
                    });
                },
            });
        });


        //fetch dist for clientcontact

        $('#statenamecontact').on('change', function() {


            // alert('hi');
            // die;
            var sta_id_contact = this.value;
            $("#contactdist").html('');
            $.ajax({
                url: "{{url('fetchdist_contact')}}",
                type: "POST",
                data: {
                    sta_id_contact: sta_id_contact,
                    _token: '{{csrf_token()}}'
                },
                dataType: 'json',

                success: function(result2) {
                    $('#contactdist').html('<option value="">Select District</option>');
                    $.each(result2.district_contact, function(key, value) {
                        $("#contactdist").append('<option value="' + value.id + '">' +
                            value.district_title + '</option>');
                    });
                },
            });
        });

        //fetch city for clientcontct


        $('#contactdist').on('change', function() {
            var dis_id_contact = this.value;
            $("#contactcity").html('');
            $.ajax({
                url: "{{url('fetchcity_contact')}}",
                type: "POST",
                data: {
                    dis_id_cont: dis_id_contact,
                    _token: '{{csrf_token()}}'
                },
                dataType: 'json',

                success: function(result3) {
                    $('#contactcity').html('<option value="">Select City</option>');
                    $.each(result3.city_contact, function(key, value) {
                        $("#contactcity").append('<option value="' + value.id +
                            '">' + value.name + '</option>');
                    });
                },
            });
        });


    });
</script>

@stop