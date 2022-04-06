@extends('layout.admin_layout')
@section('content')

<div class="app-content content">
    <div class="content-wrapper pd_14">
        <div class="content-header row">
            <div class="content-header-left col-md-6 col-12 mb-2 breadcrumb-new mb_3">
                <h3 class="content-header-title mb-0 d-inline-block">Client</h3><br>
                <div class="row breadcrumbs-top d-inline-block">
                    <div class="breadcrumb-wrapper col-12">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Client</a>
                            </li>
                            <li class="breadcrumb-item active">Client Detail
                            </li>
                        </ol>
                    </div>
                </div>
            </div>
            <div class="content-header-right col-md-6 col-12">
                <div class="dropdown float-md-right">
                    <button class="btn btn-danger mt_b round btn-glow px-2">Add </button>
                </div>
            </div>
        </div>

        @if(session()->has('roleinster'))
        <div class="alert alert-success alert-dismissible bg-success text-white border-0 fade show" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            {{session('roleinster')}}
        </div>
        @endif
        <!-- Form wizard with icon tabs section start -->
        <div class="row match-height">

            <div class="col-md-12">
                <div>
                    <img src="assets/images/big/3.jpg" alt="" style="height:200px; width:200px;">
                </div>
                <h4 class="card-title">edevlop</h4>
            </div>

            <div class="col-md-12">
                <div class="card">
                    <div class="card-header pd_15">
                        <h4 class="card-title" id="basic-layout-tooltip">Client Detail</h4>
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
                        <div class="card-body pd_0">
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <div class="row">
                                    <div class="col-md-6 col-sm-12 col-xs-12">
                                        <div class="table-responsive">
                                            <table class="table table-bordered wd_37">
                                                <tr>
                                                    <th>Client Name</th>
                                                    <td>uttam</td>
                                                </tr>
                                                <tr>
                                                    <th>Address</th>
                                                    <td>uttam</td>
                                                </tr>
                                                <tr>
                                                    <th>City/Town</th>
                                                    <td>uttam</td>
                                                </tr>
                                                <tr>
                                                    <th>Created By</th>
                                                    <td>uttam</td>
                                                </tr>
                                                <tr>
                                                    <th>Created</th>
                                                    <td>uttam</td>
                                                </tr>
                                                <tr>
                                                    <th>Modified</th>
                                                    <td>uttam</td>
                                                </tr>
                                                <tr>
                                                    <th>Actions</th>
                                                    <td>
                                                        <a href="">
                                                            <i class="ft-edit text-success"></i>
                                                        </a>
                                                        <a href="" onclick="return confirm('Are you sure?')">
                                                            <i class="ft-trash-2 ml-1 text-warning"></i>
                                                        </a>
                                                    </td>
                                                </tr>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-12 col-xs-12">
                                        <div class="table-responsive">
                                            <table class="table table-bordered wd_37">
                                                <tr>
                                                    <th>State</th>
                                                    <td>uttam</td>
                                                </tr>
                                                <tr>
                                                    <th>District</th>
                                                    <td>uttam</td>
                                                </tr>
                                                <tr>
                                                    <th>Pincode</th>
                                                    <td>uttam</td>
                                                </tr>
                                                <tr>
                                                    <th>Status</th>
                                                    <td>uttam</td>
                                                </tr>
                                                <tr>
                                                    <th>Status (Reporting)</th>
                                                    <td>uttam</td>
                                                </tr>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Form wizard with icon tabs section end -->
        </div>
        <div class="row match-height">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header pd_15">
                        <h4 class="card-title" id="basic-layout-tooltip">Client Contact</h4>
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
                    <div class="card-content collapse show table-responsive">
                        <div class="card-body">

                            <table class="table table-striped table-bordered dataex-html5-selectors table-responsive">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Primary SPOC</th>
                                        <th>Mobile</th>
                                        <th>Designation</th>
                                        <th>Landline</th>
                                        <th>Branch</th>
                                        <th>Created By</th>
                                        <th>Created</th>
                                        <th>Modified</th>
                                        <th>Actions</th>
                                        <th></th>
                                    </tr>
                                </thead>

                                <tbody>

                                    <tr>
                                        <td></td>
                                        <td style="text-align: left;"></td>
                                        <td style="text-align: left;"></td>

                                        <td style="text-align: left;"></td>

                                        <td style="text-align: left;"></td>
                                        <td style="text-align: left;"></td>
                                        <!-- CRM Name Fetch -->
                                        <td style="text-align: left;">

                                        </td>
                                        <!-- CRM Name Fetch -->

                                        <td></td>

                                        <td></td>

                                        <td></td>
                                        <td></td>
                                        <td>
                                            <a href="">
                                                <i class="ft-edit text-success"></i>
                                            </a>
                                            <a href="" onclick="return confirm('Are you sure?')">
                                                <i class="ft-trash-2 ml-1 text-warning"></i>
                                            </a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <a href="viewclient"><button type="button" class="btn btn-primary">Back</button></a>
            </div>
            <!-- Form wizard with icon tabs section end -->

        </div>
    </div>

    @stop