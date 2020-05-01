@extends('layouts.dash')

@section('title', 'User Management')

@section('sidebar')
    @parent
    @stop

    @section('content')
      <div class="container-fluid">
<div class="row">
    <div class="col-lg-12">
        <div class="card card-outline-primary">
            <div class="card-header">
                <h4 class="m-b-0 text-white">Add User</h4>
            </div>
            <div class="card-body">
                <form action="#">
                    <div class="form-body">
                        <h3 class="card-title m-t-15">Person Info</h3>
                        <hr>
                        <div class="row p-t-20">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">First Name</label>
                                    <input type="text" id="firstName" class="form-control" placeholder="John doe">
                                    <small class="form-control-feedback"> This is inline help </small> </div>
                            </div>
                            <!--/span-->
                            <div class="col-md-6">
                                <div class="form-group has-danger">
                                    <label class="control-label">Last Name</label>
                                    <input type="text" id="lastName" class="form-control form-control-danger" placeholder="12n">
                                    <small class="form-control-feedback"> This field has error. </small> </div>
                            </div>
                            <!--/span-->
                        </div>
                        <!--/row-->
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group has-success">
                                    <label class="control-label">Gender</label>
                                    <select class="form-control custom-select">
                                        <option value="">Male</option>
                                        <option value="">Female</option>
                                    </select>
                                    <small class="form-control-feedback"> Select your gender </small> </div>
                            </div>
                            <!--/span-->
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">Date of Birth</label>
                                    <input type="date" class="form-control" placeholder="dd/mm/yyyy">
                                </div>
                            </div>
                            <!--/span-->
                        </div>
                        <!--/row-->
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">Category</label>
                                    <select class="form-control custom-select" data-placeholder="Choose a Category" tabindex="1">
                                        <option value="Category 1">Category 1</option>
                                        <option value="Category 2">Category 2</option>
                                        <option value="Category 3">Category 5</option>
                                        <option value="Category 4">Category 4</option>
                                    </select>
                                </div>
                            </div>
                            <!--/span-->
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">Membership</label>
                                    <div class="form-check">
                                        <label class="custom-control custom-radio">
                                            <input id="radio1" name="radio" type="radio" checked class="custom-control-input">
                                            <span class="custom-control-indicator"></span>
                                            <span class="custom-control-description">Free</span>
                                        </label>
                                        <label class="custom-control custom-radio">
                                            <input id="radio2" name="radio" type="radio" class="custom-control-input">
                                            <span class="custom-control-indicator"></span>
                                            <span class="custom-control-description">Paid</span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <!--/span-->
                        </div>
                        <!--/row-->
                        <h3 class="box-title m-t-40">Address</h3>
                        <hr>
                        <div class="row">
                            <div class="col-md-12 ">
                                <div class="form-group">
                                    <label>Street</label>
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>City</label>
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                            <!--/span-->
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>State</label>
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                            <!--/span-->
                        </div>
                        <!--/row-->
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Post Code</label>
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                            <!--/span-->
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Country</label>
                                    <select class="form-control custom-select">
                                        <option>--Select your Country--</option>
                                        <option>India</option>
                                        <option>Sri Lanka</option>
                                        <option>USA</option>
                                    </select>
                                </div>
                            </div>
                            <!--/span-->
                        </div>
                    </div>
                    <div class="form-actions">
                        <button type="submit" class="btn btn-success"> <i class="fa fa-check"></i> Save</button>
                        <button type="button" class="btn btn-inverse">Cancel</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    {{-- <div class="col-lg-6">
        <div class="card card-outline-info">
            <div class="card-header">
                <h4 class="m-b-0 text-white">Sample Horizontal form</h4>
            </div>
            <div class="card-body">
                <form action="#" class="form-horizontal">
                    <div class="form-body">
                        <h3 class="box-title m-t-15">Person Info</h3>
                        <hr class="m-t-0 m-b-40">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="control-label text-right col-md-3">First Name</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" placeholder="John doe">
                                        <small class="form-control-feedback"> This is inline help </small> </div>
                                </div>
                            </div>
                            <!--/span-->
                            <div class="col-md-6">
                                <div class="form-group has-danger row">
                                    <label class="control-label text-right col-md-3">Last Name</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control form-control-danger" placeholder="12n">
                                        <small class="form-control-feedback"> This field has error. </small> </div>
                                </div>
                            </div>
                            <!--/span-->
                        </div>
                        <!--/row-->
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="control-label text-right col-md-3">Gender</label>
                                    <div class="col-md-9">
                                        <select class="form-control custom-select">
                                            <option value="">Male</option>
                                            <option value="">Female</option>
                                        </select>
                                        <small class="form-control-feedback"> Select your gender. </small> </div>
                                </div>
                            </div>
                            <!--/span-->
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="control-label text-right col-md-3">Date of Birth</label>
                                    <div class="col-md-9">
                                        <input type="date" class="form-control" placeholder="dd/mm/yyyy">
                                    </div>
                                </div>
                            </div>
                            <!--/span-->
                        </div>
                        <!--/row-->
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="control-label text-right col-md-3">Category</label>
                                    <div class="col-md-9">
                                        <select class="form-control custom-select" data-placeholder="Choose a Category" tabindex="1">
                                            <option value="Category 1">Category 1</option>
                                            <option value="Category 2">Category 2</option>
                                            <option value="Category 3">Category 5</option>
                                            <option value="Category 4">Category 4</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <!--/span-->
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="control-label text-right col-md-3">Membership</label>
                                    <div class="col-md-9">
                                        <div class="radio-list">
                                            <label class="custom-control custom-radio">
                                                <input id="radio3" name="radio" type="radio" checked="" class="custom-control-input">
                                                <span class="custom-control-indicator"></span>
                                                <span class="custom-control-description">Free</span>
                                            </label>
                                            <label class="custom-control custom-radio">
                                                <input id="radio4" name="radio" type="radio" class="custom-control-input">
                                                <span class="custom-control-indicator"></span>
                                                <span class="custom-control-description">Paid</span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--/span-->
                        </div>
                        <h3 class="box-title">Address</h3>
                        <hr class="m-t-0 m-b-40">
                        <!--/row-->
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="control-label text-right col-md-3">Address 1</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="control-label text-right col-md-3">Address 2</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="control-label text-right col-md-3">City</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <!--/span-->
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="control-label text-right col-md-3">State</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <!--/span-->
                        </div>
                        <!--/row-->
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="control-label text-right col-md-3">Post Code</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <!--/span-->
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="control-label text-right col-md-3">Country</label>
                                    <div class="col-md-9">
                                        <select class="form-control custom-select">
                                            <option>Country 1</option>
                                            <option>Country 2</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <!--/span-->
                        </div>
                        <!--/row-->
                    </div>
                    <hr>
                    <div class="form-actions">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="row">
                                    <div class="col-md-offset-3 col-md-9">
                                        <button type="submit" class="btn btn-success">Submit</button>
                                        <button type="button" class="btn btn-inverse">Cancel</button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6"> </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div> --}}
</div>
</div>

@stop
