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
                            <form id="editPaymentForm">
                                <input type="hidden" name="payment_id" id="payment_id" value="<?php echo e($payment->id); ?>">
                                <div class="form-row mb-4">
                                    <div class="form-group col-md-6">
                                        <label for="customer_id">Customer</label>
                                        <select class="form-control" id="customer_id" name="customer_id">
                                            <?php $__currentLoopData = $customers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $customer): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <option value="<?php echo e($customer->id); ?>" <?php echo e($payment->customer_id == $customer->id ? 'selected' : ''); ?>><?php echo e($customer->first_name); ?> <?php echo e($customer->last_name); ?></option>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </select>
                                        <span class="text-danger error-message" id="gateway_id_error"></span>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="gateway_id">Gateway</label>
                                        <select class="form-control" id="gateway_id" name="gateway_id">
                                            <?php $__currentLoopData = $gateways; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $gateway): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <option value="<?php echo e($gateway->id); ?>" <?php echo e($payment->gateway_id == $gateway->id ? 'selected' : ''); ?>><?php echo e($gateway->name); ?></option>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </select>
                                        <span class="text-danger error-message" id="gateway_id_error"></span>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="brand_id">Brand</label>
                                        <select class="form-control" id="brand_id" name="brand_id">
                                            <?php $__currentLoopData = $brands; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $brand): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <option value="<?php echo e($brand->id); ?>" <?php echo e($payment->brand_id == $brand->id ? 'selected' : ''); ?>><?php echo e($brand->name); ?></option>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </select>
                                        <span class="text-danger error-message" id="brand_id_error"></span>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="invoice_number">Invoice Number</label>
                                        <input type="text" class="form-control" id="invoice_number" name="invoice_number" placeholder="Invoice Number" value="<?php echo e($payment->invoice_number); ?>" readonly>
                                        <span class="text-danger error-message" id="invoice_number_error"></span>
                                    </div>
                                </div>
                                <div class="form-row mb-4">
                                    <div class="form-group col-md-6">
                                        <label for="package_name">Package Name</label>
                                        <input type="text" class="form-control" id="package_name" name="package_name" placeholder="Package Name" value="<?php echo e($payment->package_name); ?>">
                                        <span class="text-danger error-message" id="package_name_error"></span>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="description">Description</label>
                                        <input type="text" class="form-control" id="description" name="description" placeholder="Description" value="<?php echo e($payment->description); ?>">
                                        <span class="text-danger error-message" id="description_error"></span>
                                    </div>
                                </div>
                                <div class="form-row mb-4">
                                    <div class="form-group col-md-6">
                                        <label for="currency">Currency</label>
                                        <select class="form-control" id="currency" name="currency">
                                            <option <?php echo e($payment->currency == 'usd' ? 'selected' : ''); ?> value="usd" selected>USD</option>
                                            <option <?php echo e($payment->currency == 'gbp' ? 'selected' : ''); ?> value="gbp">GBP</option>
                                        </select>
                                        <span class="text-danger error-message" id="currency_error"></span>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="price">Price</label>
                                        <input type="number" class="form-control" id="price" name="price" placeholder="Tax" value="<?php echo e($payment->price); ?>">
                                        <span class="text-danger error-message" id="price_error"></span>
                                    </div>
                                </div>
                                <div class="form-row mb-4">
                                    <div class="form-group col-md-6">
                                        <label for="tax">Tax</label>
                                        <input type="number" class="form-control" id="tax" name="tax" placeholder="Tax" value="<?php echo e($payment->tax); ?>">
                                        <span class="text-danger error-message" id="tax_error"></span>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="remaining">Remaining</label>
                                        <input type="number" class="form-control" id="remaining" name="remaining" placeholder="Remaining" value="<?php echo e($payment->remaining); ?>">
                                        <span class="text-danger error-message" id="remaining_error"></span>
                                    </div>
                                </div>
                                <button type="button" id="updateBtn" class="btn btn-primary">Update</button>
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
        
        $('#updateBtn').click(function() {
            var paymentId = $('#payment_id').val(); // Get payment ID from hidden field
            console.log(paymentId)
            $.ajax({
                type: 'PUT', // Use PUT method for update
                url: '/payments/' + paymentId, // Update the URL to include payment ID
                data: $('#editPaymentForm').serialize(),
                success: function(response) {
                    // Show Snackbar notification
                    Snackbar.show({
                        text: 'Payment updated successfully.',
                        duration: 5000, // 5 seconds
                    });
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
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Hasnat Khan\Desktop\mypayportal\mypayportal\resources\views\payment\edit.blade.php ENDPATH**/ ?>