<?php $__env->startSection('content'); ?>
<div id="content" class="main-content">
    <div class="container">
        <div class="container">
        <!-- resources/views/livewire/payments-create-or-edit.blade.php -->
            <div class="row">
                <div id="flFormsGrid" class="col-lg-12 layout-spacing layout-top-spacing">
                    <div class="statbox widget box box-shadow">
                        <div class="widget-header">
                            <div class="row">
                                <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                    <h4>Create Payment Link</h4>
                                </div>                                                                        
                            </div>
                        </div>
                        <div class="widget-content widget-content-area">
                            <form id="createPaymentForm">
                                <div class="form-row mb-4">
                                    <div class="form-group col-md-6">
                                        <label for="gateway_id">Customer</label>
                                        <select class="form-control" id="customer_id" name="customer_id">
                                            <?php $__currentLoopData = $customers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $customer): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <option value="<?php echo e($customer->id); ?>"><?php echo e($customer->first_name); ?>  <?php echo e($customer->last_name); ?></option>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </select>
                                        <span class="text-danger error-message" id="customer_id_error"></span>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="gateway_id">Gateway</label>
                                        <select class="form-control" id="gateway_id" name="gateway_id">
                                            <?php $__currentLoopData = $brands; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $brand): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <option value="<?php echo e($brand->id); ?>"><?php echo e($brand->name); ?></option>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </select>
                                        <span class="text-danger error-message" id="gateway_id"></span>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="brand_id">Brand</label>
                                        <select class="form-control" id="brand_id" name="brand_id">
                                            <?php $__currentLoopData = $brands; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $brand): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <option value="<?php echo e($brand->id); ?>"><?php echo e($brand->name); ?></option>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </select>
                                        <span class="text-danger error-message" id="brand_id_error"></span>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="invoice_number">Invoice Number</label>
                                        <input value="INV<?php echo e(time()); ?>" type="text" class="form-control" id="invoice_number" name="invoice_number" placeholder="Invoice Number">
                                        <span class="text-danger error-message" id="invoice_number_error"></span>
                                    </div>
                                </div>
                                <div class="form-row mb-4">
                                    <div class="form-group col-md-6">
                                        <label for="package_name">Package Name</label>
                                        <input type="text" class="form-control" id="package_name" name="package_name" placeholder="Package Name">
                                        <span class="text-danger error-message" id="package_name_error"></span>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="description">Description</label>
                                        <input type="text" class="form-control" id="description" name="description" placeholder="Description">
                                        <span class="text-danger error-message" id="description_error"></span>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="currency">Currency</label>
                                        <select class="form-control" id="currency" name="currency">
                                            <option value="usd" selected>USD</option>
                                            <option value="gbp">GBP</option>
                                        </select>
                                        <span class="text-danger error-message" id="currency_error"></span>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="price">Price</label>
                                        <input type="text" class="form-control" id="price" name="price" placeholder="Price">
                                        <span class="text-danger error-message" id="price_error"></span>
                                    </div>
                                </div>
                                <div class="form-row mb-4">
                                    <div class="form-group col-md-6">
                                        <label for="tax">Tax</label>
                                        <input type="number" class="form-control" id="tax" name="tax" placeholder="Tax">
                                        <span class="text-danger error-message" id="tax_error"></span>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="remaining">Remaining</label>
                                        <input type="number" class="form-control" id="remaining" name="remaining" placeholder="Remaining">
                                        <span class="text-danger error-message" id="remaining_error"></span>
                                    </div>
                                    <!-- Include other fields similarly -->
                                </div>
                                <button type="button" id="submitBtn" class="btn btn-primary">Submit</button>
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
<script>
    $(document).ready(function() {
        // Set CSRF token for all AJAX requests
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        
        $('#submitBtn').click(function() {
            $.ajax({
                type: 'POST',
                url: '/payments',
                data: $('#createPaymentForm').serialize(),
                success: function(response) {
                    // Clear form fields
                    $('#createPaymentForm')[0].reset();

                    // Show Snackbar notification
                    Snackbar.show({
                        text: 'Gateway created successfully.',
                        duration: 5000, // 5 seconds
                    });

                    // Clear form fields after a delay of 2 seconds
                    setTimeout(function() {
                        window.location.href = response.link
                    }, 2000);


                },
                error: function(xhr, status, error) {
                    var err = JSON.parse(xhr.responseText);
                    console.log('Error:', err);

                    // Display validation errors
                    $.each(err.errors, function(key, value) {
                        $('#' + key + '_error').text(value);
                    });
                }
            });
        });
    });
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Hasnat Khan\Desktop\mypayportal\mypayportal\resources\views/payment/create.blade.php ENDPATH**/ ?>