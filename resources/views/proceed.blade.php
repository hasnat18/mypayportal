<!DOCTYPE html>
<html>

<head>
    <title>Payment Successful - Invoice Details</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        @import url(https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap);

        *,
        ::after,
        ::before {
            -webkit-box-sizing: border-box;
            box-sizing: border-box
        }

        html {
            line-height: 1.15;
            -webkit-text-size-adjust: 100%
        }

        body {
            margin: 0
        }

        a {
            background-color: transparent
        }

        b {
            font-weight: bolder
        }

        img {
            border-style: none
        }

        button {
            font-family: inherit;
            font-size: 100%;
            line-height: 1.15;
            margin: 0
        }

        button {
            overflow: visible
        }

        button {
            text-transform: none
        }

        button {
            -webkit-appearance: button
        }

        button::-moz-focus-inner {
            border-style: none;
            padding: 0
        }

        button:-moz-focusring {
            outline: 1px dotted ButtonText
        }

        ::-webkit-file-upload-button {
            -webkit-appearance: button;
            font: inherit
        }

        body,
        html {
            color: #777;
            font-family: 'Inter', sans-serif;
            font-size: 14px;
            font-weight: 400;
            line-height: 1.5em;
            overflow-x: hidden;
            background-color: #f5f7ff
        }

        p,
        div {
            margin-top: 0;
            line-height: 1.5em
        }

        p {
            margin-bottom: 15px
        }

        img {
            border: 0;
            max-width: 50%;
            height: auto;
            vertical-align: middle
        }

        a {
            color: inherit;
            text-decoration: none;
            -webkit-transition: all .3s ease;
            transition: all .3s ease
        }

        a:hover {
            color: #2ad19d
        }

        button {
            color: inherit;
            -webkit-transition: all .3s ease;
            transition: all .3s ease
        }

        a:hover {
            text-decoration: none;
            color: inherit
        }

        table {
            width: 100%;
            caption-side: bottom;
            border-collapse: collapse
        }

        th {
            text-align: left
        }

        td {
            border-top: 1px solid #eaeaea
        }

        td,
        th {
            padding: 10px 15px;
            line-height: 1.55em
        }

        b {
            font-weight: bold
        }

        .cs-f16 {
            font-size: 16px
        }

        .cs-semi_bold {
            font-weight: 600
        }

        .cs-bold {
            font-weight: 700
        }

        .cs-m0 {
            margin: 0
        }

        .cs-mb0 {
            margin-bottom: 0
        }

        .cs-mb5 {
            margin-bottom: 5px
        }

        .cs-mb10 {
            margin-bottom: 10px
        }

        .cs-mb25 {
            margin-bottom: 25px
        }

        .cs-width_1 {
            width: 8.33333333%
        }

        .cs-width_2 {
            width: 16.66666667%
        }

        .cs-width_3 {
            width: 25%
        }

        .cs-width_4 {
            width: 33.33333333%
        }

        .cs-primary_color {
            color: #111
        }

        .cs-focus_bg {
            background: #f6f6f6
        }

        .cs-container {
            max-width: 880px;
            padding: 30px 15px;
            margin-left: auto;
            margin-right: auto
        }

        .cs-text_right {
            text-align: right
        }

        .cs-border_top_0 {
            border-top: 0
        }

        .cs-border_top {
            border-top: 1px solid #eaeaea
        }

        .cs-border_left {
            border-left: 1px solid #eaeaea
        }

        .cs-round_border {
            border: 1px solid #eaeaea;
            overflow: hidden;
            border-radius: 6px
        }

        .cs-border_none {
            border: none
        }

        .cs-invoice.cs-style1 {
            background: #fff;
            border-radius: 10px;
            padding: 50px
        }

        .cs-invoice.cs-style1 .cs-invoice_head {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-pack: justify;
            -ms-flex-pack: justify;
            justify-content: space-between
        }

        .cs-invoice.cs-style1 .cs-invoice_head.cs-type1 {
            -webkit-box-align: end;
            -ms-flex-align: end;
            align-items: flex-end;
            padding-bottom: 25px;
            border-bottom: 1px solid #eaeaea
        }

        .cs-invoice.cs-style1 .cs-invoice_footer {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex
        }

        .cs-invoice.cs-style1 .cs-invoice_footer table {
            margin-top: -1px
        }

        .cs-invoice.cs-style1 .cs-left_footer {
            width: 55%;
            padding: 10px 15px
        }

        .cs-invoice.cs-style1 .cs-right_footer {
            width: 46%
        }

        .cs-invoice.cs-style1 .cs-note {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-align: start;
            -ms-flex-align: start;
            align-items: flex-start;
            margin-top: 40px
        }

        .cs-invoice.cs-style1 .cs-note_left {
            margin-right: 10px;
            margin-top: 6px;
            margin-left: -5px;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex
        }

        .cs-invoice.cs-style1 .cs-note_left svg {
            width: 32px
        }

        .cs-invoice.cs-style1 .cs-invoice_left {
            max-width: 55%
        }

        .cs-invoice_btns {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            justify-content: center;
            margin-top: 30px
        }

        .cs-invoice_btns .cs-invoice_btn:first-child {
            border-radius: 5px 0 0 5px
        }

        .cs-invoice_btns .cs-invoice_btn:last-child {
            border-radius: 0 5px 5px 0
        }

        .cs-invoice_btn {
            display: -webkit-inline-box;
            display: -ms-inline-flexbox;
            display: inline-flex;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            border: none;
            font-weight: 600;
            padding: 8px 20px;
            cursor: pointer
        }

        .cs-invoice_btn svg {
            width: 24px;
            margin-right: 5px
        }

        .cs-invoice_btn.cs-color1 {
            color: #111;
            background: rgba(42, 209, 157, .15)
        }

        .cs-invoice_btn.cs-color1:hover {
            background-color: rgba(42, 209, 157, .3)
        }

        .cs-invoice_btn.cs-color2 {
            color: #fff;
            background: #2ad19d
        }

        .cs-invoice_btn.cs-color2:hover {
            background-color: rgba(42, 209, 157, .8)
        }

        .cs-table_responsive {
            overflow-x: auto
        }

        .cs-table_responsive>table {
            min-width: 600px
        }

        .cs-bar_list li:not(:last-child) {
            margin-bottom: 10px
        }

        .cs-table.cs-style2 tr:not(:first-child) {
            border-top: 1px dashed #eaeaea
        }

        .cs-list.cs-style1 li:not(:last-child) {
            border-bottom: 1px dashed #eaeaea
        }

        .cs-table.cs-style1 .cs-table.cs-style1 tr:not(:first-child) td {
            border-color: #eaeaea
        }

        @media (max-width:767px) {
            .cs-mobile_hide {
                display: none
            }

            .cs-invoice.cs-style1 {
                padding: 30px 20px
            }

            .cs-invoice.cs-style1 .cs-right_footer {
                width: 100%
            }
        }

        @media (max-width:500px) {
            .cs-invoice.cs-style1 .cs-logo {
                margin-bottom: 10px
            }

            .cs-invoice.cs-style1 .cs-invoice_head {
                -webkit-box-orient: vertical;
                -webkit-box-direction: normal;
                -ms-flex-direction: column;
                flex-direction: column
            }

            .cs-invoice.cs-style1 .cs-invoice_head.cs-type1 {
                -webkit-box-orient: vertical;
                -webkit-box-direction: reverse;
                -ms-flex-direction: column-reverse;
                flex-direction: column-reverse;
                -webkit-box-align: center;
                -ms-flex-align: center;
                align-items: center;
                text-align: center
            }

            .cs-invoice.cs-style1 .cs-invoice_head .cs-invoice.cs-style1 .cs-invoice_left {
                max-width: 100%
            }

        }

        .badge-unpaid {
            background-color: red;
            color: white;
            padding: 4px 8px;
            text-align: center;
            border-radius: 5px;
        }

        .badge-paid {
            background-color: #8dbf42 !important;
            color: white;
            padding: 4px 8px;
            text-align: center;
            border-radius: 5px;
        }

        .custom-button {
            width: 100%;
            display: inline-block;
            background-color: #333;
            color: white;
            text-decoration: none;
            padding: 10px 20px;
            margin-top: 10px;
            border-radius: 8px;
            font-size: 16px;
            font-weight: bold;
            text-align: center;
            transition: background-color 0.3s, transform 0.2s;
        }

        .custom-button:hover {
            background-color: #555;
            transform: translateY(-2px);
        }

        .custom-button:active {
            background-color: #222;
            transform: translateY(0);
        }

    </style>

</head>

<body>
    @if ($payment->gateway->name == 'paypal' && $payment->status !== 'paid')
    <div class="container mt-3">
        <div class="row">
            <div class="col-6">
                <div class="cs-invoice cs-style1">
                    <div class="cs-invoice_in" id="download_section">
                        <div class="cs-invoice_head cs-type1 cs-mb25">
                            <div class="cs-invoice_left">
                                <p class="cs-invoice_number cs-primary_color cs-mb5 cs-f16">Invoice From<b
                                        class="cs-primary_color">
                                        {{ $payment->brand->name }}</b></p><br>
                                <p class="cs-invoice_number cs-primary_color cs-mb5 cs-f16"><b
                                        class="cs-primary_color">Invoice
                                        No:</b> #{{ $payment->invoice_number }}</p>
                                <p class="cs-invoice_number cs-primary_color cs-mb5 cs-f16"><b
                                        class="cs-primary_color">Date:
                                    </b>{{ $payment->created_at->format('d-m-y') }}</p>
                                @php
                                    $inv_status = strtolower($payment->status) === 'paid' ? 'paid' : 'unpaid';
                                @endphp
    
                                <p class="cs-invoice_number cs-primary_color cs-mb5 cs-f16">
                                    <b class="cs-primary_color">Status:</b>
                                    <span
                                        class="{{ $inv_status == 'paid' ? 'badge-paid' : 'badge-unpaid' }}">{{ $payment->status }}</span>
                                </p>
    
                            </div>
                            <div class="cs-invoice_right cs-text_right">
                                <div class="cs-logo cs-mb5">
                                    <a href="{{ url('') }}">
                                        <img src="{{ asset('storage/' . $payment->brand->logo_path) }}" alt="Logo"></a>
                                </div>
                            </div>
                        </div>
    
                        <div class="cs-invoice_head cs-mb10">
    
                            <div class="cs-invoice_left">
    
                                <b class="cs-primary_color">Invoice To:</b>
    
                                <p>Name: {{ $payment->customer->first_name }} {{ $payment->customer->last_name }}<br>
                                    Email: {{ $payment->customer->email }}<br>
                                    Phone Number: {{ $payment->customer->phone_number }}<br>
                                </p>
                            </div>
                            <div style="padding-left:245px;">
                                <b class="cs-primary_color">Pay To:</b>
                                <p>{{ $payment->brand->name }}
                                </p>
                            </div>
                        </div>
                        <div class="cs-table cs-style1">
                            <div class="cs-round_border">
                                <div class="cs-table_responsive">
                                    <table>
                                        <thead>
                                            <tr>
                                                <th class="cs-width_3 cs-semi_bold cs-primary_color cs-focus_bg">Package
                                                    Name
                                                </th>
                                                <th class="cs-width_4 cs-semi_bold cs-primary_color cs-focus_bg">Package
                                                    Description</th>
                                                <th class="cs-width_2 cs-semi_bold cs-primary_color cs-focus_bg">Qty</th>
                                                <th class="cs-width_1 cs-semi_bold cs-primary_color cs-focus_bg">Price</th>
                                                <th
                                                    class="cs-width_2 cs-semi_bold cs-primary_color cs-focus_bg cs-text_right">
                                                    Total</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="cs-width_3">{{ $payment->package_name }}</td>
                                                <td class="cs-width_4">{{ $payment->description }}</td>
                                                <td class="cs-width_2">1</td>
                                                <td class="cs-width_1"> {{ $payment->currency == 'usd' ? '$' : '' }}
                                                    {{ $payment->currency == 'gbp' ? '£' : '' }}
                                                    {{ $payment->price }}
                                                </td>
                                                <td class="cs-width_2 cs-text_right">
                                                    {{ $payment->currency == 'usd' ? '$' : '' }}
                                                    {{ $payment->currency == 'gbp' ? '£' : '' }}
                                                    {{ $payment->price }}
                                                </td>
                                            </tr>
    
    
                                        </tbody>
                                    </table>
                                </div>
                                <div class="cs-invoice_footer cs-border_top">
                                    <div class="cs-left_footer">
    
                                    </div>
                                    <div class="cs-right_footer">
                                        <table>
                                            <tbody>
                                                <tr class="cs-border_left">
                                                    <td class="cs-width_3 cs-semi_bold cs-primary_color cs-focus_bg">
                                                        Subtotal
                                                    </td>
                                                    <td
                                                        class="cs-width_3 cs-semi_bold cs-focus_bg cs-primary_color cs-text_right">
                                                        {{ $payment->currency == 'usd' ? '$' : '' }}
                                                        {{ $payment->currency == 'gbp' ? '£' : '' }}
                                                        {{ $payment->price }}
                                                    </td>
                                                </tr>
                                                <tr class="cs-border_left">
                                                    <td class="cs-width_3 cs-semi_bold cs-primary_color cs-focus_bg">Tax
                                                    </td>
                                                    <td
                                                        class="cs-width_3 cs-semi_bold cs-focus_bg cs-primary_color cs-text_right">
                                                        {{ $payment->currency == 'usd' ? '$' : '' }}
                                                        {{ $payment->currency == 'gbp' ? '£' : '' }}
                                                        {{ $payment->tax }}
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <div class="cs-invoice_footer">
                                <div class="cs-left_footer"></div>
                                <div class="cs-right_footer">
                                    <table>
                                        <tbody>
                                            <tr class="cs-border_none">
                                                <td class="cs-width_3 cs-border_top_0 cs-bold cs-f16 cs-primary_color">Total
                                                </td>
                                                <td
                                                    class="cs-width_3 cs-border_top_0 cs-bold cs-f16 cs-primary_color cs-text_right">
                                                    {{ $payment->currency == 'usd' ? '$' : '' }}
                                                    {{ $payment->currency == 'gbp' ? '£' : '' }}
                                                    {{ $payment->price + $payment->tax }}
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @if ($inv_status == 'unpaid')
                    <div>
                        <a href="{{ url('/pay/' . $payment->invoice_number) }}" class="custom-button">Proceed</a>
                    </div>
                @endif
            </div>
            
            <div class="col-6">
                    <div id="paypal-button-container"></div>
                    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
                    <script src="https://www.paypal.com/sdk/js?client-id={{ $payment->gateway->key1 }}&currency=USD"></script>
                    <script>
                        var appUrl = "{{ env('APP_URL') }}";
                        $.ajaxSetup({
                            headers: {
                                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                            }
                        });
                        paypal.Buttons({
                            createOrder: function(data, actions) {
                                return actions.order.create({
                                    purchase_units: [{
                                        amount: {
                                            value: {{ $payment->price + $payment->tax }} // Replace with the actual amount
                                        }
                                    }],
                                    application_context: {
                                        shipping_preference: 'NO_SHIPPING',
                                        billing_preference: "NO_BILLING"
                                    },
                                    payer: {
                                        name: {
                                            given_name: "{{ $payment->customer->name }}",
                                            surname: "{{ $payment->customer->name }}"
                                        },
                                        email_address: "{{ $payment->customer->email }}",
                                        // address: {
                                        //     address_line_1: '1234 Main Street',
                                        //     admin_area_2: 'Anytown',
                                        //     admin_area_1: 'CA',
                                        //     postal_code: '98765',
                                        //     country_code: 'US'
                                        // }
                                    }
                                });
                            },
                            onApprove: function(data, actions) {
                                return actions.order.capture().then(function(details) {
    
    
                                    var invoice_number = "{{ $payment->invoice_number }}";
    
                                    $.ajax({
                                        url: "{{ route('paypal.success') }}", // Replace with your server URL
                                        method: 'POST',
                                        data: {
                                            invoice_number: invoice_number,
                                            status: 'COMPLETED',
                                        },
                                        success: function(response) {
                                            if (response.status === 'ok') {
                                                window.location.href = appUrl + '/invoice/' + invoice_number;
                                            }
                                        },
    
                                        error: function(xhr, status, error) {
                                            console.error(
                                                'Error sending transaction details to the server: ' +
                                                error);
                                        }
                                    });
    
    
    
                                });
                            },
                            /*application_context: {
                                shipping_preference: "NO_SHIPPING",
                                billing_preference: "NO_BILLING"
                            }*/
                        }).render('#paypal-button-container');
                    </script>
            </div>
        </div>
    </div>
    @else
        <div class="cs-container">
        <div class="cs-invoice cs-style1">
            <div class="cs-invoice_in" id="download_section">
                <div class="cs-invoice_head cs-type1 cs-mb25">
                    <div class="cs-invoice_left">
                        <p class="cs-invoice_number cs-primary_color cs-mb5 cs-f16">Invoice From<b
                                class="cs-primary_color">
                                {{ $payment->brand->name }}</b></p><br>
                        <p class="cs-invoice_number cs-primary_color cs-mb5 cs-f16"><b class="cs-primary_color">Invoice
                                No:</b> #{{ $payment->invoice_number }}</p>
                        <p class="cs-invoice_number cs-primary_color cs-mb5 cs-f16"><b class="cs-primary_color">Date:
                            </b>{{ $payment->created_at->format('d-m-y') }}</p>
                            @php
                                $inv_status = strtolower($payment->status) === 'paid' ? 'paid' : 'unpaid';
                            @endphp

                            <p class="cs-invoice_number cs-primary_color cs-mb5 cs-f16">
                                <b class="cs-primary_color">Status:</b>
                                <span class="{{ $inv_status == 'paid' ? 'badge-paid' : 'badge-unpaid' }}">{{$payment->status}}</span>
                            </p>

                    </div>
                    <div class="cs-invoice_right cs-text_right">
                        <div class="cs-logo cs-mb5">
                            <a href="{{ url('') }}">
                                <img src="{{ asset('storage/' . $payment->brand->logo_path) }}" alt="Logo"></a>
                        </div>
                    </div>
                </div>

                <div class="cs-invoice_head cs-mb10">

                    <div class="cs-invoice_left">

                        <b class="cs-primary_color">Invoice To:</b>

                        <p>Name: {{ $payment->customer->first_name }} {{ $payment->customer->last_name }}<br>
                            Email: {{ $payment->customer->email }}<br>
                            Phone Number: {{ $payment->customer->phone_number }}<br>
                        </p>
                    </div>
                    <div style="padding-left:245px;">
                        <b class="cs-primary_color">Pay To:</b>
                        <p>{{ $payment->brand->name }}
                        </p>
                    </div>
                </div>
                <div class="cs-table cs-style1">
                    <div class="cs-round_border">
                        <div class="cs-table_responsive">
                            <table>
                                <thead>
                                    <tr>
                                        <th class="cs-width_3 cs-semi_bold cs-primary_color cs-focus_bg">Package Name
                                        </th>
                                        <th class="cs-width_4 cs-semi_bold cs-primary_color cs-focus_bg">Package
                                            Description</th>
                                        <th class="cs-width_2 cs-semi_bold cs-primary_color cs-focus_bg">Qty</th>
                                        <th class="cs-width_1 cs-semi_bold cs-primary_color cs-focus_bg">Price</th>
                                        <th class="cs-width_2 cs-semi_bold cs-primary_color cs-focus_bg cs-text_right">
                                            Total</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="cs-width_3">{{ $payment->package_name }}</td>
                                        <td class="cs-width_4">{{ $payment->description }}</td>
                                        <td class="cs-width_2">1</td>
                                        <td class="cs-width_1"> {{ $payment->currency == 'usd' ? '$' : '' }}
                                            {{ $payment->currency == 'gbp' ? '£' : '' }}
                                            {{ $payment->price }}
                                        </td>
                                        <td class="cs-width_2 cs-text_right">
                                            {{ $payment->currency == 'usd' ? '$' : '' }}
                                            {{ $payment->currency == 'gbp' ? '£' : '' }}
                                            {{ $payment->price }}
                                        </td>
                                    </tr>


                                </tbody>
                            </table>
                        </div>
                        <div class="cs-invoice_footer cs-border_top">
                            <div class="cs-left_footer">

                            </div>
                            <div class="cs-right_footer">
                                <table>
                                    <tbody>
                                        <tr class="cs-border_left">
                                            <td class="cs-width_3 cs-semi_bold cs-primary_color cs-focus_bg">Subtotal
                                            </td>
                                            <td
                                                class="cs-width_3 cs-semi_bold cs-focus_bg cs-primary_color cs-text_right">
                                                {{ $payment->currency == 'usd' ? '$' : '' }}
                                                {{ $payment->currency == 'gbp' ? '£' : '' }}
                                                {{ $payment->price }}
                                            </td>
                                        </tr>
                                        <tr class="cs-border_left">
                                            <td class="cs-width_3 cs-semi_bold cs-primary_color cs-focus_bg">Tax</td>
                                            <td
                                                class="cs-width_3 cs-semi_bold cs-focus_bg cs-primary_color cs-text_right">
                                                {{ $payment->currency == 'usd' ? '$' : '' }}
                                                {{ $payment->currency == 'gbp' ? '£' : '' }}
                                                {{ $payment->tax }}
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="cs-invoice_footer">
                        <div class="cs-left_footer"></div>
                        <div class="cs-right_footer">
                            <table>
                                <tbody>
                                    <tr class="cs-border_none">
                                        <td class="cs-width_3 cs-border_top_0 cs-bold cs-f16 cs-primary_color">Total</td>
                                        <td
                                            class="cs-width_3 cs-border_top_0 cs-bold cs-f16 cs-primary_color cs-text_right">
                                            {{ $payment->currency == 'usd' ? '$' : '' }}
                                            {{ $payment->currency == 'gbp' ? '£' : '' }}
                                            {{ $payment->price + $payment->tax }}
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>



            </div>



        </div>
        @if ($inv_status == 'unpaid')      
        <div>
            <a href="{{ url('/pay/' . $payment->invoice_number) }}" class="custom-button">Proceed</a>
        </div>
        @endif

    </div>
    @endif








</body>

</html>
