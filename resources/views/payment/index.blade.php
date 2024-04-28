@extends('layouts.app')

@section('content')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.4.2/css/fontawesome.min.css" integrity="sha384-BY+fdrpOd3gfeRvTSMT+VUZmA728cfF9Z2G42xpaRkUGu2i3DyzpTURDo5A6CaLK" crossorigin="anonymous">
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
                                    <a href="{{ url('/payments/create') }}" class="btn" style="background-color: #191e3a;color:white;">Create</a>
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
                                    <th>Price</th>
                                    <th>Tax</th>
                                    <th>Remaining</th>
                                    <th>Total</th>

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
                                    <td>
                                        {{ $payment->currency }}
                                    </td>
                                    <td>
                                        {{ $payment->price }}
                                    </td>
                                    <td>
                                        {{$payment->currency == 'usd' ? '$' : ''}}
                                        {{$payment->currency == 'gbp' ? '£' : ''}}
                                        {{ $payment->tax }}</td>
                                    <td>
                                        {{$payment->currency == 'usd' ? '$' : ''}}
                                        {{$payment->currency == 'gbp' ? '£' : ''}}
                                        {{ $payment->remaining }}
                                    </td>
                                    <td>
                                        {{$payment->currency == 'usd' ? '$' : ''}}
                                        {{$payment->currency == 'gbp' ? '£' : ''}}
                                        {{ $payment->tax + $payment->price}}

                                    </td>
                                    <td><span class="badge {{ $payment->status == 'unpaid' ? 'bg-danger' : 'bg-success' }}">{{ $payment->status }}</span></td>
                                    <td>
                                        <div class="btn-group">
                                            <a href="/invoice/{{$payment->invoice_number}}" class="btn btn-sm btn-outline-primary">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-printer" viewBox="0 0 16 16">
                                                    <path d="M2.5 8a.5.5 0 1 0 0-1 .5.5 0 0 0 0 1"/>
                                                    <path d="M5 1a2 2 0 0 0-2 2v2H2a2 2 0 0 0-2 2v3a2 2 0 0 0 2 2h1v1a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2v-1h1a2 2 0 0 0 2-2V7a2 2 0 0 0-2-2h-1V3a2 2 0 0 0-2-2zM4 3a1 1 0 0 1 1-1h6a1 1 0 0 1 1 1v2H4zm1 5a2 2 0 0 0-2 2v1H2a1 1 0 0 1-1-1V7a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1v3a1 1 0 0 1-1 1h-1v-1a2 2 0 0 0-2-2zm7 2v3a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1v-3a1 1 0 0 1 1-1h6a1 1 0 0 1 1 1"/>
                                                  </svg>
                                              <span class="visually-hidden">Print</span>
                                            </a>
                                            <a href="{{ url('/proceed/'.$payment->invoice_number) }}" class="btn btn-sm btn-outline-dark copyLink" data-invoice="{{ $payment->invoice_number }}">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-link-45deg" viewBox="0 0 16 16">
                                                    <path d="M4.715 6.542 3.343 7.914a3 3 0 1 0 4.243 4.243l1.828-1.829A3 3 0 0 0 8.586 5.5L8 6.086a1 1 0 0 0-.154.199 2 2 0 0 1 .861 3.337L6.88 11.45a2 2 0 1 1-2.83-2.83l.793-.792a4 4 0 0 1-.128-1.287z"/>
                                                    <path d="M6.586 4.672A3 3 0 0 0 7.414 9.5l.775-.776a2 2 0 0 1-.896-3.346L9.12 3.55a2 2 0 1 1 2.83 2.83l-.793.792c.112.42.155.855.128 1.287l1.372-1.372a3 3 0 1 0-4.243-4.243z"/>
                                                  </svg>
                                              <span class="visually-hidden">Link</span>
                                            </a>
                                            <a href="{{ route('payments.edit', $payment->id) }}" class="btn btn-sm btn-outline-warning ">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil" viewBox="0 0 16 16">
                                                    <path d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325"/>
                                                </svg>
                                              <span class="visually-hidden">Edit</span>
                                            </a>
                                            <form action="{{ route('payments.destroy', $payment->id) }}" method="POST" style="display: inline;">
                                                @csrf
                                                @method('DELETE')
                                            <button  type="submit" class="btn btn-sm btn-outline-danger" onclick="return confirm('Are you sure you want to delete this payment?')">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                                                      <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0z"></path>
                                                      <path d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4zM2.5 3h11V2h-11z"></path>
                                              </svg>
                                                <span class="visually-hidden">Delete</span>
                                              </button>
                                            </form>

                                          </div>
                                    </td>
                                    
                                </tr> @endforeach
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
                                    <th>Price</th>

                                                                                                <th>Tax</th>
                                                                                                <th>Remaining</th>
                                                                                                <th>Total</th>
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
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var copyLinkBtns = document.querySelectorAll('.copyLink');

            copyLinkBtns.forEach(function(copyLinkBtn) {
                copyLinkBtn.addEventListener('click', function(event) {
                    // Prevent the default link behavior
                    event.preventDefault();

                    // Get the URL from the link's href attribute
                    var url = copyLinkBtn.getAttribute('href');

                    // Create a temporary input element to copy the URL
                    var input = document.createElement('input');
                    input.setAttribute('value', url);
                    document.body.appendChild(input);

                    // Select the input element and copy its value to the clipboard
                    input.select();
                    document.execCommand('copy');

                    // Remove the temporary input element
                    document.body.removeChild(input);

                    // Optionally, provide feedback to the user
                    alert('URL copied to clipboard: ' + url);
                });
            });
        });
    </script>
@endsection
