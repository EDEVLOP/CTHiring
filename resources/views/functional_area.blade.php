@extends('layout.admin_layout')
@section('content')
<div class="app-content content">
    <div class="content-wrapper">
        <div class="content-header row">
            <div class="content-header-left col-md-6 col-12 mb-2 breadcrumb-new">
                <h3 class="content-header-title mb-0 d-inline-block">Functional Area</h3></br>
                <div class="row breadcrumbs-top d-inline-block">
                    <div class="breadcrumb-wrapper col-12">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Settings</a>
                            </li>
                            <li class="breadcrumb-item"><a href="#">Branch</a>
                            </li>
                            <li class="breadcrumb-item active">Functional Area
                            </li>
                        </ol>
                    </div>
                </div>
            </div>
            <div class="content-header-right col-md-6 col-12">
                <div class="dropdown float-md-right">
                    <button class="btn btn-danger dropdown-toggle round btn-glow px-2" id="dropdownBreadcrumbButton"
                        type="button" data-target="#info" data-toggle="modal" aria-haspopup="true">Actions</button>

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
        <!-- for delete -->
        @if(session()->has('delt'))
        <div class="alert alert-danger alert-dismissible bg-danger text-white border-0 fade show" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            {{session('delt')}}
        </div>
        @endif

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">

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
                        <div class="card-body card-dashboard">

                            <table class="table table-striped table-bordered dataex-html5-selectors">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Functional Area</th>
                                        <th>Status</th>
                                        <th>Created At</th>
                                        <th>Modified At</th>
                                        <th>Action</th>

                                    </tr>
                                </thead>

                                <tbody>
                                    @php
                                    $i=1;
                                    @endphp
                                    @foreach($view as $loc)
                                    <tr>
                                        <td>{{ $i }}</td>
                                        <td style="text-align: left;">{{$loc->function}}</td>

                                        @if ($loc->status == 1)
                                        <td><span class="badge badge-default badge-success">Active</span></td>

                                        @else

                                        <td><span class="badge badge-default badge-danger">Inactive</span></td>

                                        @endif

                                        <td>{{ date('j F-Y', strtotime($loc->created_at)) }} </td>

                                        <td>{{ $loc->modified_at}}</td>

                                        <td><a><i class="ft-edit text-success" data-toggle="modal"
                                                    data-target="#edit{{ $loc->id }}"></i></a>
                                            <a href="{{url('/delete_functional',$loc->id)}}"
                                                onclick="return confirm('Are you sure?')"><i
                                                    class="ft-trash-2 ml-1 text-warning"></i></a>
                                        </td>

                                    </tr>
                                    @php
                                    $i++;
                                    @endphp

                                    <!-- edit model -->

                                    <div class="col-lg-4 col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <div class="modal fade text-left" id="edit{{ $loc->id }}" tabindex="-1"
                                                role="dialog" aria-labelledby="myModalLabel11" aria-hidden="true">
                                                <div class="modal-dialog" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header bg-info white">
                                                            <h4 class="modal-title white" id="myModalLabel11">Edit
                                                                FunctionalArea</h4>
                                                            <button type="button" class="close" data-dismiss="modal"
                                                                aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="card-content collpase show">
                                                            <div class="card-body">
                                                                <form action="edit_functional/{{$loc->id}}"
                                                                    method="post" class="form">
                                                                    @csrf
                                                                    @method('put')
                                                                    <div class="form-body">
                                                                        <div class="row">
                                                                            <div class="form-group col-12 mb-2">
                                                                                <label for="timesheetinput1">Functional
                                                                                    Area
                                                                                    :</label>
                                                                                <div
                                                                                    class="position-relative has-icon-left">
                                                                                    <input type="text"
                                                                                        id="timesheetinput1"
                                                                                        class="form-control"
                                                                                        name="functional"
                                                                                        value="{{$loc->function}}"
                                                                                        placeholder="Enter Functional Area">
                                                                                    <div class="form-control-position">
                                                                                        <i class="ft-map"></i>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>


                                                                        <div class="row">
                                                                            <div class="form-group col-12 mb-2">
                                                                                <label for="issueinput6">Status</label>
                                                                                <select id="issueinput6" name="status"
                                                                                    class="form-control"
                                                                                    data-toggle="tooltip"
                                                                                    data-trigger="hover"
                                                                                    data-placement="top"
                                                                                    data-title="Status">
                                                                                    <option>Please Select Status
                                                                                    </option>
                                                                                    <option value="1" @if($loc->
                                                                                        status=='1')selected
                                                                                        @endif>Active
                                                                                    </option>

                                                                                    <option value="2" @if($loc->
                                                                                        status=='2')
                                                                                        selected @endif>Inactive
                                                                                    </option>
                                                                                </select>
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                            </div>
                                                        </div>

                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-warning mr-1"
                                                                data-dismiss="modal">
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
                                    </div>

                                    @endforeach

                                    <!-- -- Edit Modal End -- -->



                                </tbody>




                                <tfoot>
                                    <tr>
                                        <th>#</th>
                                        <th>Functional Area</th>
                                        <th>Status</th>
                                        <th>Created At</th>
                                        <th>Modified At</th>
                                        <th>Action</th>
                                    </tr>
                                </tfoot>

                            </table>

                            <!-- Add Modal for FORM FIELD -->
                            <div class="col-lg-4 col-md-6 col-sm-12">
                                <div class="form-group">
                                    <div class="modal fade text-left" id="info" tabindex="-1" role="dialog"
                                        aria-labelledby="myModalLabel11" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header bg-info white">
                                                    <h4 class="modal-title white" id="myModalLabel11">Add Functional
                                                        Area
                                                    </h4>
                                                    <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="card-content collpase show">
                                                    <div class="card-body">


                                                        <form action="addfunctional" method="post" class="form">
                                                            @csrf
                                                            <div class="form-body">
                                                                <div class="row">
                                                                    <div class="form-group col-12 mb-2">
                                                                        <label for="timesheetinput1">Functional Area
                                                                            :</label>
                                                                        <div class="position-relative has-icon-left">
                                                                            <input type="text" id="timesheetinput1"
                                                                                class="form-control"
                                                                                name="function_area"
                                                                                placeholder="Enter Functional Area Name">

                                                                            <div class="form-control-position">
                                                                                <i class="ft-map"></i>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="form-group col-12 mb-2">
                                                                        <label for="issueinput6">Status</label>
                                                                        <select id="issueinput6" name="status"
                                                                            class="form-control" data-toggle="tooltip"
                                                                            data-trigger="hover" data-placement="top"
                                                                            data-title="Status">
                                                                            <option value="not started" selected>Please
                                                                                Select Status</option>
                                                                            <option value="1">Active</option>
                                                                            <option value="2">Inactive</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                    </div>
                                                </div>

                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-warning mr-1"
                                                        data-dismiss="modal">
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
                            </div>




                            <!---- Add Modal End -- -->




                        </div>
                    </div>
                </div>
            </div>
        </div>
        </section>

    </div>
</div>

@stop
