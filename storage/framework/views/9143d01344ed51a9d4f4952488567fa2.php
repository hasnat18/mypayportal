<?php $__env->startSection('content'); ?>
<div id="content" class="main-content">
    <div class="container">
        <div class="container">
        <!-- resources/views/livewire/customer-create-or-edit.blade.php -->
            <div class="row">
                <div id="flFormsGrid" class="col-lg-12 layout-spacing layout-top-spacing">
                    <div class="statbox widget box box-shadow">
                        <div class="widget-header">
                            <div class="row">
                                <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                    <h4>Create Customer</h4>
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
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>
<script src="<?php echo e(env('ASSET_URL')); ?>/custom/custom.js"></script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Hasnat Khan\Desktop\mypayportal\mypayportal\resources\views\customer\create.blade.php ENDPATH**/ ?>