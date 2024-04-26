
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
    <title>PAY PORTAL</title>
    <link rel="icon" type="image/x-icon" href="<?php echo e(env('ASSET_URL')); ?>/assets/img/favicon.ico"/>
    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href="https://fonts.googleapis.com/css?family=Quicksand:400,500,600,700&display=swap" rel="stylesheet">
    <link href="<?php echo e(env('ASSET_URL')); ?>/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo e(env('ASSET_URL')); ?>/assets/css/plugins.css" rel="stylesheet" type="text/css" />
    <!-- END GLOBAL MANDATORY STYLES -->

    <!--  BEGIN CUSTOM STYLE FILE  -->
    <link href="<?php echo e(env('ASSET_URL')); ?>/assets/css/pages/privacy/privacy.css" rel="stylesheet" type="text/css" />
    <!--  END CUSTOM STYLE FILE  -->
    
</head>
<body>
    

    

    <div id="privacyWrapper" class="">
        <div class="privacy-container">
            <div class="privacyContent">

                <div class="d-flex justify-content-center privacy-head">
                    <div class="privacyHeader">
                        <h1>Payment Details</h1>
                        
                    </div>
    
                </div>
                <div class="widget-content">
                    <div class="invoice-box">
                        <div class="inv-detail">                                        
                            <div class="info-detail-1 mb-5" style="display: flex;justify-content: space-between;">
                                <h6>Customer Name</h6>
                                <h6><?php echo e($payment->customer->first_name); ?> <?php echo e($payment->customer->last_name); ?></h6>
                            </div>
                            <div class="info-detail-2 mb-5" style="display: flex;justify-content: space-between;">
                                <h6>Customer Email</h6>
                                <h6><?php echo e($payment->customer->email); ?></h6>
                            </div>
                            <div class="info-detail-3 info-sub " >
                                <div class="info-detail mb-5" style="display: flex;justify-content: space-between;">
                                    <h6>Invoice</h6>
                                    <h6><?php echo e($payment->invoice_number); ?></h6>
                                </div>
                                <div class="info-detail-sub mb-5" style="display: flex;justify-content: space-between;">
                                    <h6>Package Name</h6>
                                    <h6><?php echo e($payment->description); ?></h6>
                                </div>
                                <div class="info-detail-sub mb-5" style="display: flex;justify-content: space-between;">
                                    <h6>Subtotal</h6>
                                    <h6>$<?php echo e($payment->price); ?></h6>
                                </div>
                                <div class="info-detail-sub mb-5" style="display: flex;justify-content: space-between;">
                                    <h6>Tax</h6>
                                    <h6>$<?php echo e($payment->tax); ?></h6>
                                </div>
                                <div class="info-detail-sub mb-5" style="display: flex;justify-content: space-between;">
                                    <h6>Total</h6>
                                    <?php if(isset($payment->tax) && isset($payment->price)): ?>
                                        <h6>$<?php echo e($payment->tax + $payment->price); ?></h6>
                                    <?php endif; ?>
                                </div>
                                <div class="info-detail-sub mb-5" style="display: flex;justify-content: space-between;">
                                    <h6>Remaining</h6>
                                    <h6>$<?php echo e($payment->remaining); ?></h6>
                                </div>
                            </div>
                        </div>

                        <div class="inv-action d-flex justify-content-center">
                            <a href="<?php echo e(url('/pay/'.$payment->invoice_number)); ?>" class="btn btn-dark">Proceed</a>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- BEGIN GLOBAL MANDATORY SCRIPTS -->
    <script src="<?php echo e(env('ASSET_URL')); ?>/assets/js/libs/jquery-3.1.1.min.js"></script>
    <script src="<?php echo e(env('ASSET_URL')); ?>/bootstrap/js/popper.min.js"></script>
    <script src="<?php echo e(env('ASSET_URL')); ?>/bootstrap/js/bootstrap.min.js"></script>
    <!-- END GLOBAL MANDATORY SCRIPTS -->

    <script>
        // Scroll To Top
        $(document).on('click', '.arrow', function(event) {
          event.preventDefault();
          var body = $("html, body");
          body.stop().animate({scrollTop:0}, 500, 'swing');
        });
    </script>

</body>
</html><?php /**PATH C:\Users\Hasnat Khan\Desktop\mypayportal\mypayportal\resources\views/proceed.blade.php ENDPATH**/ ?>