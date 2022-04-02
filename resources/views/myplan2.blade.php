<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<style>
.dvtext {
    display: none;
}
</style>


@extends('layout.admin_layout')
@section('content')
<div class="app-content content">
    <div class="content-wrapper">
        <div class="content-header row">
            <div class="content-header-left col-md-6 col-12 mb-2 breadcrumb-new">
                <h3 class="content-header-title mb-0 d-inline-block">Qualification</h3></br>
                <div class="row breadcrumbs-top d-inline-block">
                    <div class="breadcrumb-wrapper col-12">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Settings</a>
                            </li>
                            <li class="breadcrumb-item"><a href="#">Branch</a>
                            </li>
                            <li class="breadcrumb-item active">Client Branch
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


                    this is my form



                    <!--give outer divs to seprate-->
                    <div>
                        <input type="radio" name="1" value="" hidden checked>
                        <input type="radio" name="1" value="somethings">somethings <br />
                        <input type="radio" name="1" value="Other">Other
                        <!--use class-->
                        <div class="dvtext">
                            <input type="text" class="txtBox" />
                        </div>
                    </div>
                    <div>
                        <input type="radio" name="2" value="" hidden checked>
                        <input type="radio" name="2" value="somethings">somethings <br />
                        <input type="radio" name="2" value="Other">Other
                        <!--use class here-->
                        <div class="dvtext">
                            <input type="text" class="txtBox" />
                        </div>
                    </div>

                </div>
                <div>
                    <div class="d-inline-block custom-control custom-radio mr-1"><input type="radio"
                            class="custom-control-input" name="colorRadio" id="radio1"><label
                            class="custom-control-label" for="radio1">Current Day Plan</label> </div>
                    <div class="d-inline-block custom-control custom-radio mr-1"> <input type="radio"
                            class="custom-control-input bty" name="colorRadio" value="PreviousDayPlan"
                            id="radio2"><label class="custom-control-label" for="radio2" checked>Previous Day Plan
                        </label></div>
                    <div class="d-inline-block custom-control custom-radio mr-1"><input type="radio"
                            class="custom-control-input" name="colorRadio" id="radio3"><label
                            class="custom-control-label" for="radio3">Long Leave</label></div>
                </div>
                <div>

                    <div id="CarsPreviousDayPlan" class="desc" style="display: none;">
                        Selected
                    </div>
                </div>
                <script>
                $(document).ready(function() {
                    $("input[name$='colorRadio']").click(function() {
                        var test = $(this).val();

                        $("div.desc").hide();
                        $("#Cars" + test).show();
                    });
                });
                </script>
            </div>
        </div>
        </section>

    </div>
</div>

<script>
$("input[type=radio]").on("change", function() {
    //check if radio is checked and value of checked one is `others`
    ($(this).val() == "Other") ? $(this).siblings(".dvtext").show(): $(this).siblings(".dvtext").hide()
})
</script>

@stop