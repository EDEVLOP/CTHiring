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

                            <form class="form" action="edit_client" method="post">
                                @csrf
                                @method('put')
                                <div class="form-body">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="">Full Name </label>
                                                <input type="text" class="form-control" data-toggle="tooltip"
                                                    data-trigger="hover" data-placement="top" data-title="Date Opened"
                                                    id="name" name="fullname" value="{{$loc->client_name}}">


                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="">Phone Number</label>
                                                <input type="text" class="form-control" data-toggle="tooltip"
                                                    data-trigger="hover" data-placement="top" data-title="Date Fixed"
                                                    id="phone" name="phone" value="{{$loc->mobile}}">
                                            </div>
                                        </div>
                                    </div>


                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="">Door Number</label>
                                                <input type="text" class="form-control" data-toggle="tooltip"
                                                    data-trigger="hover" data-placement="top" data-title="Date Opened"
                                                    id="doorno" name="doorno" value="{{$loc->door_no}}">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="issueinput4">Street Name</label>
                                                <input type="text" class="form-control" data-toggle="tooltip"
                                                    data-trigger="hover" data-placement="top" data-title="Date Fixed"
                                                    id="streetname" name="streetname" value="{{$loc->street_name}}">
                                            </div>
                                        </div>
                                    </div>


                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="">Area</label>
                                                <input type="text" class="form-control" data-toggle="tooltip"
                                                    data-trigger="hover" data-placement="top" data-title="Date Opened"
                                                    id="area" name="area" value="{{$loc->area_name}}">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="">City</label>
                                                <select class="form-control select2" data-toggle="tooltip"
                                                    data-trigger="hover" data-placement="top" data-title="Priority"
                                                    name="cityname">
                                                    <option selected>Please Select</option>
                                                    <option value="{{$loc->city_id}}"></option>

                                                </select>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="row">

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="">District</label>
                                                <select class="form-control select2" data-toggle="tooltip"
                                                    data-trigger="hover" data-placement="top" data-title="Priority"
                                                    name="districtname">
                                                    <option selected>Please Select</option>
                                                    <option value="{{$loc->district_id}}">Jajpur</option>

                                                </select>
                                            </div>
                                        </div>


                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="">State</label>
                                                <select class="form-control select2" data-toggle="tooltip"
                                                    data-trigger="hover" data-placement="top" data-title="Priority"
                                                    name="State">
                                                    <option selected>Please Select</option>

                                                    <option value="{{$loc->state_id}}">Odisha</option>

                                                </select>
                                            </div>
                                        </div>




                                    </div>


                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="">Pincode</label>
                                                <input type="text" class="form-control" data-toggle="tooltip"
                                                    data-trigger="hover" data-placement="top" data-title="Date Opened"
                                                    id="pincode" name="pincode" value="{{$loc->pincode}}">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="">CRM</label>
                                                <select class="form-control select2" data-toggle="tooltip"
                                                    data-trigger="hover" data-placement="top" data-title="Priority"
                                                    name="crm">

                                                    <option selected>Please Select</option>
                                                    <option value="{{$loc->crm_id}}">abinash</option>

                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="">Status</label>
                                                <select class="form-control" data-toggle="tooltip" data-trigger="hover"
                                                    data-placement="top" data-title="Priority" name="status">


                                                    <option>Please Select Status</option>
                                                    <option value="1" @if($loc->status=='1')selected @endif>Active
                                                    </option>

                                                    <option value="2" @if($loc->status=='2') selected @endif>Inactive
                                                    </option>
                                                </select>


                                            </div>
                                        </div>
                                    </div>


                                </div>
                                <div class="form-actions">
                                    <button type="button" class="btn btn-warning mr-1">
                                        <i class="ft-x"></i> Cancel
                                    </button>
                                    <button type="submit" class="btn btn-primary">
                                        <i class="la la-check-square-o"></i> Edit
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

    @stop