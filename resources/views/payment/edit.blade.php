
@extends('layouts.app')

@section('content')
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
                                <input type="hidden" name="payment_id" id="payment_id" value="{{$payment->id}}">
                                <div class="form-row mb-4">
                                    <div class="form-group col-md-6">
                                        <label for="customer_id">Customer</label>
                                        <select class="form-control" id="customer_id" name="customer_id">
                                            @foreach($customers as $customer)
                                                <option value="{{ $customer->id }}" {{ $payment->customer_id == $customer->id ? 'selected' : '' }}>{{ $customer->first_name }} {{ $customer->last_name }}</option>
                                            @endforeach
                                        </select>
                                        <span class="text-danger error-message" id="gateway_id_error"></span>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="gateway_id">Gateway</label>
                                        <select class="form-control" id="gateway_id" name="gateway_id">
                                            @foreach($gateways as $gateway)
                                                <option value="{{ $gateway->id }}" {{ $payment->gateway_id == $gateway->id ? 'selected' : '' }}>{{ $gateway->name }}</option>
                                            @endforeach
                                        </select>
                                        <span class="text-danger error-message" id="gateway_id_error"></span>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="brand_id">Brand</label>
                                        <select class="form-control" id="brand_id" name="brand_id">
                                            @foreach($brands as $brand)
                                                <option value="{{ $brand->id }}" {{ $payment->brand_id == $brand->id ? 'selected' : '' }}>{{ $brand->name }}</option>
                                            @endforeach
                                        </select>
                                        <span class="text-danger error-message" id="brand_id_error"></span>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="invoice_number">Invoice Number</label>
                                        <input type="text" class="form-control" id="invoice_number" name="invoice_number" placeholder="Invoice Number" value="{{ $payment->invoice_number }}" readonly>
                                        <span class="text-danger error-message" id="invoice_number_error"></span>
                                    </div>
                                </div>
                                <div class="form-row mb-4">
                                    <div class="form-group col-md-6">
                                        <label for="package_name">Package Name</label>
                                        <input type="text" class="form-control" id="package_name" name="package_name" placeholder="Package Name" value="{{ $payment->package_name }}">
                                        <span class="text-danger error-message" id="package_name_error"></span>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="description">Description</label>
                                        <input type="text" class="form-control" id="description" name="description" placeholder="Description" value="{{ $payment->description }}">
                                        <span class="text-danger error-message" id="description_error"></span>
                                    </div>
                                </div>
                                <div class="form-row mb-4">
                                    <div class="form-group col-md-6">
                                        <label for="currency">Currency</label>
                                        <input type="text" class="form-control" id="currency" name="currency" placeholder="Currency" value="{{ $payment->currency }}">
                                        <span class="text-danger error-message" id="currency_error"></span>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="price">Price</label>
                                        <input type="number" class="form-control" id="price" name="price" placeholder="Tax" value="{{ $payment->price }}">
                                        <span class="text-danger error-message" id="price_error"></span>
                                    </div>
                                </div>
                                <div class="form-row mb-4">
                                    <div class="form-group col-md-6">
                                        <label for="tax">Tax</label>
                                        <input type="number" class="form-control" id="tax" name="tax" placeholder="Tax" value="{{ $payment->tax }}">
                                        <span class="text-danger error-message" id="tax_error"></span>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="remaining">Remaining</label>
                                        <input type="number" class="form-control" id="remaining" name="remaining" placeholder="Remaining" value="{{ $payment->remaining }}">
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
@endsection

@section('script')
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
@endsection