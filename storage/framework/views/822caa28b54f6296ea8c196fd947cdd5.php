<?php $__env->startSection('content'); ?>
<div id="content" class="main-content">
    <div class="layout-px-spacing">

        <div class="page-header">
            <div class="page-title">
                <h3>Dashboard</h3>
            </div>
            <form action="<?php echo e(route('dashboard')); ?>" method="GET">
                <div class="row align-items-end">
                    <div class="col-md-3">
                        <label for="start_date" class="form-label">From:</label>
                        <input value="<?php echo e(request()->start_date); ?>" class="form-control" type="date" name="start_date" id="start_date">
                    </div>
                    <div class="col-md-3">
                        <label for="end_date" class="form-label">To:</label>
                        <input value="<?php echo e(request()->end_date); ?>" class="form-control" type="date" name="end_date" id="end_date">
                    </div>
                    <div class="col-md-3">
                        <label for="status" class="form-label">Status</label>
                        <select name="status" id="status" class="form-control">
                            <option value="all" <?php echo e(request()->input('status') == 'all' ? 'selected' : ''); ?>>All</option>
                            <option value="paid" <?php echo e(request()->input('status') == 'paid' ? 'selected' : ''); ?>>Paid</option>
                            <option value="unpaid" <?php echo e(request()->input('status') == 'unpaid' ? 'selected' : ''); ?>>Unpaid</option>
                        </select>
                    </div>
                    <div class="col-md-3">
                        <button type="submit" class="btn btn-primary mt-3">Apply Filters</button>
                    </div>
                </div>
            </form>
        </div>
        
        

        <div class="row layout-top-spacing">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 layout-spacing">
                <div class="row widget-statistic">
                    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col-12">
                        <div class="widget widget-one_hybrid widget-engagement">
                            <div class="widget-heading">
                                <div class="w-icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                        <text x="5" y="15" font-family="Arial, sans-serif" font-size="16px">$</text>
                                    </svg>
                                      
                                </div>
                                <p class="w-value">$<?php echo e($usPaidAmount); ?></p>
                                <h5 class="">Paid USD</h5>
                            </div>
                            
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col-12">
                        <div class="widget widget-one_hybrid widget-referral">
                            <div class="widget-heading">
                                <div class="w-icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                        <text x="5" y="15" font-family="Arial, sans-serif" font-size="16px">£</text>
                                    </svg>
                                      
                                </div>
                                <p class="w-value">$<?php echo e($usUnpaidAmount); ?></p>
                                <h5 class="">Remaining USD</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col-12">
                        <div class="widget widget-one_hybrid widget-engagement">
                            <div class="widget-heading">
                                <div class="w-icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-message-circle"><path d="M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5z"></path></svg>
                                </div>
                                <p class="w-value">£<?php echo e($gbpPaidAmount); ?></p>
                                <h5 class="">Paid GBP</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col-12">
                        <div class="widget widget-one_hybrid widget-referral">
                            <div class="widget-heading">
                                <div class="w-icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-message-circle"><path d="M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5z"></path></svg>
                                </div>
                                <p class="w-value">£<?php echo e($gbpUnpaidAmount); ?></p>
                                <h5 class="">Remaining GBP</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Hasnat Khan\Desktop\mypayportal\mypayportal\resources\views/dashboard.blade.php ENDPATH**/ ?>