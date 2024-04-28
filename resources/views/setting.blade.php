
@extends('layouts.app')

@section('content')
<div id="content" class="main-content">
    <div class="container">
        <div class="container">
            <!-- resources/views/livewire/customer-create-or-edit.blade.php -->
            <div class="row">
                <div id="flFormsGrid" class="col-lg-12 layout-spacing layout-top-spacing">
                    <div class="statbox widget box box-shadow">
                        <div class="widget-header">
                            <div class="row">
                                <div class="col-xl-10 col-md-10 col-sm-10 col-10">
                                    <h4>Create Customer</h4>
                                </div>      
                                <div class="col-xl-2 col-md-2 col-sm-2 col-2 d-flex justify-content-end">
                                    <a class="btn btn-primary my-2" href="{{url('/customers')}}">View</a>
                                </div>                                                                      
                            </div>
                        </div>
                        <div class="widget-content widget-content-area">
                            <form id="createCustomerForm">
                                <div class="form-row mb-4">
                                    <div class="form-group col-md-6">
                                        <label for="first_name">First Name</label>
                                        <input type="text" class="form-control" id="first_name" name="first_name" placeholder="First Name">
                                        <span class="text-danger error-message" id="first_name_error"></span>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="last_name">Last Name</label>
                                        <input type="text" class="form-control" id="last_name" name="last_name" placeholder="Last Name">
                                        <span class="text-danger error-message" id="last_name_error"></span>
                                    </div>
                                </div>
                                <div class="form-row mb-4">
                                    <div class="form-group col-md-6">
                                        <label for="date_of_birth">Date of Birth</label>
                                        <input type="date" class="form-control" id="date_of_birth" name="date_of_birth">
                                        <span class="text-danger error-message" id="date_of_birth_error"></span>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="email">Email Address</label>
                                        <input type="email" class="form-control" id="email" name="email" placeholder="Email Address">
                                        <span class="text-danger error-message" id="email_error"></span>
                                    </div>
                                </div>
                                <div class="form-row mb-4">
                                    <div class="form-group col-md-6">
                                        <label for="phone_number">Phone Number</label>
                                        <input type="text" class="form-control" id="phone_number" name="phone_number" placeholder="Phone Number">
                                        <span class="text-danger error-message" id="phone_number_error"></span>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="address_line_1">Address Line 1</label>
                                        <input type="text" class="form-control" id="address_line_1" name="address_line_1" placeholder="Address Line 1">
                                        <span class="text-danger error-message" id="address_line_1_error"></span>
                                    </div>
                                </div>
                                <div class="form-row mb-4">
                                    <div class="form-group col-md-6">
                                        <label for="address_line_2">Address Line 2</label>
                                        <input type="text" class="form-control" id="address_line_2" name="address_line_2" placeholder="Address Line 2">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="city">City</label>
                                        <input type="text" class="form-control" id="city" name="city" placeholder="City">
                                        <span class="text-danger error-message" id="city_error"></span>
                                    </div>
                                </div>
                                <div class="form-row mb-4">
                                    <div class="form-group col-md-6">
                                        <label for="state_province">State/Province</label>
                                        <input type="text" class="form-control" id="state_province" name="state_province" placeholder="State/Province">
                                        <span class="text-danger error-message" id="state_province_error"></span>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="postal_code">Postal/ZIP Code</label>
                                        <input type="text" class="form-control" id="postal_code" name="postal_code" placeholder="Postal/ZIP Code">
                                        <span class="text-danger error-message" id="postal_code_error"></span>
                                    </div>
                                </div>
                                <div class="form-row mb-4">
                                    <div class="form-group col-md-6">
                                        <label for="country">Country</label>
                                        <input type="text" class="form-control" id="country" name="country" placeholder="Country">
                                        <span class="text-danger error-message" id="country_error"></span>
                                    </div>
                                </div>
                                <button type="button" id="CreateCustomerSubmitBtn" class="btn btn-primary mt-3">Save Customer</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- resources/views/livewire/brands-create-or-edit.blade.php -->
            <div class="row">
                <div id="flFormsGrid" class="col-lg-12 layout-spacing layout-top-spacing">
                    <div class="statbox widget box box-shadow">
                        <div class="widget-header">
                            <div class="row">  
                                <div class="col-xl-10 col-md-10 col-sm-10 col-10">
                                    <h4>Create Brand</h4>
                                </div>      
                                <div class="col-xl-2 col-md-2 col-sm-2 col-2 d-flex justify-content-end">
                                    <a class="btn btn-primary my-2" href="{{url('/brands')}}">View</a>
                                </div>                                                                       
                            </div>
                        </div>
                        <div class="widget-content widget-content-area">
                            <form id="createBrandForm" enctype="multipart/form-data">
                                <div class="form-row mb-4">
                                    <div class="form-group col-md-12">
                                        <label for="name">Name</label>
                                        <input type="text" class="form-control" id="name" name="name" placeholder="Name">
                                        <span class="text-danger error-message" id="name_error"></span>
                                    </div>
                                </div>
                                <div class="form-row mb-4">
                                    <div class="form-group col-md-12">
                                        <label for="name">Redirect Url</label>
                                        <input type="text" class="form-control" id="redirect_url" name="redirect_url" placeholder="Redirect Url">
                                        <span class="text-danger error-message" id="redirect_url_error"></span>
                                    </div>
                                </div>
                                <div class="form-row mb-4">
                                    <div class="form-group col-md-12">
                                        <label for="logo_path">Logo</label>
                                        <input type="file" class="form-control" id="logo_path" name="logo_path">
                                        <span class="text-danger error-message" id="logo_path_error"></span>
                                    </div>
                                </div>
                                <button type="button" id="CreateBrandSubmitBtn" class="btn btn-primary mt-3">Save Brand</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- resources/views/livewire/gateways-create-or-edit.blade.php -->
            <div class="row">
                <div id="flFormsGrid" class="col-lg-12 layout-spacing layout-top-spacing">
                    <div class="statbox widget box box-shadow">
                        <div class="widget-header">
                            <div class="row">            
                                <div class="col-xl-10 col-md-10 col-sm-10 col-10">
                                    <h4>Create Gateway</h4>
                                </div>      
                                <div class="col-xl-2 col-md-2 col-sm-2 col-2 d-flex justify-content-end">
                                    <a class="btn btn-primary my-2" href="{{url('/gateways')}}">View</a>
                                </div>                                                             
                            </div>
                        </div>
                        <div class="widget-content widget-content-area">
                            <form id="createGatewayForm">
                                <div class="form-row mb-4">
                                    <div class="form-group col-md-12">
                                        <label for="name">Name</label>
                                        <input type="text" class="form-control" id="name" name="name" placeholder="Name">
                                        <span class="text-danger error-message" id="name_error"></span>
                                    </div>
                                </div>
                                <div class="form-row mb-4">
                                    <div class="form-group col-md-12">
                                        <label for="key1">KEY 1</label>
                                        <input type="text" class="form-control" id="key1" name="key1" placeholder="KEY 1">
                                        <span class="text-danger error-message" id="key1_error"></span>
                                    </div>
                                </div>
                                <div class="form-row mb-4">
                                    <div class="form-group col-md-12">
                                        <label for="key2">KEY 2</label>
                                        <input type="text" class="form-control" id="key2" name="key2" placeholder="KEY 2">
                                        <span class="text-danger error-message" id="key2_error"></span>
                                    </div>
                                </div>
                                <button type="button" id="CreateGetwaySubmitBtn" class="btn btn-primary mt-3">Save Gateway</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('script')
<script src="{{env('ASSET_URL')}}/custom/custom.js"></script>
@endsection