<?php $__env->startSection('content'); ?>
<div id="content" class="main-content">
    <div class="container">
        <div class="container">
        <!-- resources/views/livewire/gateways-create-or-edit.blade.php -->
            <div class="row">
                <div id="flFormsGrid" class="col-lg-12 layout-spacing layout-top-spacing">
                    <div class="statbox widget box box-shadow">
                        <div class="widget-header">
                            <div class="row">
                                <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                    <h4>Create Gateway</h4>
                                </div>                                                                        
                            </div>
                        </div>
                        <div class="widget-content widget-content-area">
                            <form id="createGatewayForm">
                                <div class="form-row mb-4">
                                    <div class="form-group col-md-12">
                                        <label for="name">Name</label>
                                        <input type="text" class="form-control" id="name" name="name" placeholder="First Name">
                                        <span class="text-danger error-message" id="name_error"></span>
                                    </div>
                                </div>
                                <div class="form-row mb-4">
                                    <div class="form-group col-md-12">
                                        <label for="key1">KEY 1</label>
                                        <input type="text" class="form-control" id="key1" name="key1" placeholder="First Name">
                                        <span class="text-danger error-message" id="key1_error"></span>
                                    </div>
                                </div>
                                <div class="form-row mb-4">
                                    <div class="form-group col-md-12">
                                        <label for="key2">KEY 2</label>
                                        <input type="text" class="form-control" id="key2" name="key2" placeholder="First Name">
                                        <span class="text-danger error-message" id="key2_error"></span>
                                    </div>
                                </div>
                                <button type="button" id="submitBtn" class="btn btn-primary mt-3">Save Gateway</button>
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
                url: '/gateways',
                data: $('#createGatewayForm').serialize(),
                success: function(response) {
                    // Clear form fields
                    $('#createGatewayForm')[0].reset();

                    // Show Snackbar notification
                    Snackbar.show({
                        text: 'Gateway created successfully.',
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
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Hasnat Khan\Desktop\mypayportal\mypayportal\resources\views/gateway/create.blade.php ENDPATH**/ ?>