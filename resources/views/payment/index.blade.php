
@extends('layouts.app')

@section('content')
<div id="content" class="main-content">
    <div class="layout-px-spacing">
        <div class="row layout-spacing layout-top-spacing" id="cancel-row">
            <div class="col-lg-12">
                <div class="widget-content searchable-container list">
                    <div class="row">
                        <div class="col-xl-4 col-lg-5 col-md-5 col-sm-7 filtered-list-search layout-spacing align-self-center"></div>
                        <div class="col-xl-8 col-lg-7 col-md-7 col-sm-5 text-sm-right text-center layout-spacing align-self-center">
                            <div class="d-flex justify-content-sm-end justify-content-center">
                                <div class="switch align-self-center">
                                    <a href="{{url('/payments/create')}}" class="btn" style="background-color: #191e3a;color:white;">Create</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row layout-top-spacing" id="cancel-row">
        
            <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
                <div class="widget-content widget-content-area br-6">
                    <div class="table-responsive mb-4 mt-4">
                        <table id="table" class="table table-hover" style="width:100%">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Customer</th>
                                    <th>User</th>
                                    <th>Gateway</th>
                                    <th>Brand</th>
                                    <th>Invoice Number</th>
                                    <th>Description</th>
                                    <th>Currency</th>
                                    <th>Tax</th>
                                    <th>Remaining</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($payments as $key => $payment)
                                <tr>
                                    <td>{{ $key + 1 }}</td>
                                    <td>{{ $payment->customer->first_name }} {{ $payment->customer->last_name }}</td>
                                    <td>{{ $payment->user->name }}</td>
                                    <td>{{ $payment->gateway->name }}</td>
                                    <td>{{ $payment->brand->name }}</td>
                                    <td>{{ $payment->invoice_number }}</td>
                                    <td>{{ $payment->description }}</td>
                                    <td>{{ $payment->currency }}</td>
                                    <td>{{ $payment->tax }}</td>
                                    <td>{{ $payment->remaining }}</td>
                                    <td><span class="badge {{$payment->status == 'unpaid' ? 'bg-danger' : 'bg-success'}}">{{ $payment->status }}</span></td>
                                    <td>
                                        <!-- Edit Button -->
                                        <a href="/proceed/{{$payment->invoice_number}}" class="btn btn-primary">Link</a>
                                        <a href="{{ route('payments.edit', $payment->id) }}" class="btn btn-primary">Edit</a>
                                        
                                        <!-- Delete Button -->
                                        <form action="{{ route('payments.destroy', $payment->id) }}" method="POST" style="display: inline;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this payment?')">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>#</th>
                                    <th>Customer</th>
                                    <th>User</th>
                                    <th>Gateway</th>
                                    <th>Brand</th>
                                    <th>Invoice Number</th>
                                    <th>Description</th>
                                    <th>Currency</th>
                                    <th>Tax</th>
                                    <th>Remaining</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </tfoot>
                        </table>
                        
                        
                    </div>
                </div>
            </div>

        </div>

        </div>
</div>
@endsection

@section('script')



@endsection