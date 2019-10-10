<?php $__env->startSection('content'); ?>

<div class="row">
    <div class="col-xs-12">
        <div class="page-title-box">
            <h4 class="page-title">Dashboard</h4>
            <ol class="breadcrumb p-0 m-0">
                <li>
                    <a href="<?php echo e(route('home')); ?>">Dashboard</a>
                </li>
            </ol>
            <div class="clearfix"></div>
        </div>
    </div>
</div>
<!-- end row -->


<div class="row">
    <div class="col-sm-12">
        <div class="card-box">
            <h4 class="m-t-0 header-title text-center">Welcome <b><?php echo e(Auth::user()->name); ?></b> to Reminder App</h4>
            <p class="text-muted m-b-30 font-13">
                
            </p>

            <div class="row">
                <div class="col-md-12">
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end row -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.back', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>