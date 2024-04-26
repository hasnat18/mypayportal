<?php $__env->startSection('content'); ?>
<div id="content" class="main-content">
    <div class="container">
        <div class="container">
        <!-- resources/views/livewire/brands-create-or-edit.blade.php -->
            <div class="row">
                <div id="flFormsGrid" class="col-lg-12 layout-spacing layout-top-spacing">
                    <div class="statbox widget box box-shadow">
                        <div class="widget-header">
                            <div class="row">
                                <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                    <h4>Create Brand</h4>
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
                                        <label for="logo_path">Logo</label>
                                        <input type="file" class="form-control" id="logo_path" name="logo_path">
                                        <span class="text-danger error-message" id="logo_path_error"></span>
                                    </div>
                                </div>
                                <button type="button" id="submitBtn" class="btn btn-primary mt-3">Save Brand</button>
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
            var formData = new FormData($('#createBrandForm')[0]); // Convert form to FormData

            $.ajax({
                type: 'POST',
                url: '/brands',
                data: formData, // Use FormData instead of serialize()
                processData: false, // Prevent jQuery from processing the data
                contentType: false, // Prevent jQuery from setting contentType
                success: function(response) {
                    // Clear form fields
                    $('#createBrandForm')[0].reset();

                    // Show Snackbar notification
                    Snackbar.show({
                        text: 'Brand created successfully.',
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
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Hasnat Khan\Desktop\mypayportal\mypayportal\resources\views/brand/create.blade.php ENDPATH**/ ?>