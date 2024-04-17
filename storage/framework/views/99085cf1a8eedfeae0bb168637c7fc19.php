


<?php $__env->startSection('content'); ?>
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
                                    <a href="<?php echo e(url('/payments/create')); ?>" class="btn" style="background-color: #191e3a;color:white;">Create</a>
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
                                <?php $__currentLoopData = $payments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $payment): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td><?php echo e($key + 1); ?></td>
                                    <td><?php echo e($payment->customer->first_name); ?> <?php echo e($payment->customer->last_name); ?></td>
                                    <td><?php echo e($payment->user->name); ?></td>
                                    <td><?php echo e($payment->gateway->name); ?></td>
                                    <td><?php echo e($payment->brand->name); ?></td>
                                    <td><?php echo e($payment->invoice_number); ?></td>
                                    <td><?php echo e($payment->description); ?></td>
                                    <td><?php echo e($payment->currency); ?></td>
                                    <td><?php echo e($payment->tax); ?></td>
                                    <td><?php echo e($payment->remaining); ?></td>
                                    <td><span class="badge <?php echo e($payment->status == 'unpaid' ? 'bg-danger' : 'bg-success'); ?>"><?php echo e($payment->status); ?></span></td>
                                    <td>
                                        <!-- Edit Button -->
                                        <a href="/proceed/<?php echo e($payment->invoice_number); ?>" class="btn btn-warning">Link</a>
                                        <a href="<?php echo e(route('payments.edit', $payment->id)); ?>" class="btn btn-primary">Edit</a>
                                        
                                        <!-- Delete Button -->
                                        <form action="<?php echo e(route('payments.destroy', $payment->id)); ?>" method="POST" style="display: inline;">
                                            <?php echo csrf_field(); ?>
                                            <?php echo method_field('DELETE'); ?>
                                            <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this payment?')">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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
<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>



<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\DELL\OneDrive\Desktop\payment-portal\app\resources\views/payment/index.blade.php ENDPATH**/ ?>