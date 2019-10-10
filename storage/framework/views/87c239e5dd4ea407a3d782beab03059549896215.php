<?php $__env->startSection('content'); ?>

<div class="row">
    <div class="col-xs-12">
        <div class="page-title-box">
            <h4 class="page-title">Dashboard</h4>
            <ol class="breadcrumb p-0 m-0">
                <li>
                    <a href="<?php echo e(route('home')); ?>">Dashboard</a>
                </li>
                <li class="active">
                    Manage Events
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
            <h4 class="m-t-0 header-title"><b>Agents</b></h4>
            <p class="text-muted m-b-30 font-13">
                
            </p>

            <div class="row">
                <div class="col-md-12">
                    <?php echo $__env->make('includes.flash_messages', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                    <div class="table-responsive">
                    <table class="table table-bordered" id="datatable">
                        <thead>
                            <th></th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Title</th>
                            <th>Description</th>
                            <th>Deadline</th>
                            <th>Status</th>
                            <th></th>
                            
                        </thead>
                        <tbody>
                            <?php $count = 1; ?>
                            <?php $__currentLoopData = $events; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $event): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>    
                                <td><?php echo e($count++); ?></td>
                                <td>
                                    <a href="<?php echo e(route('edit.event', ['id' => $event->id])); ?>"><?php echo e($event->name); ?></a>
                                </td>
                                <td><?php echo e($event->email); ?></td>
                                <td><?php echo e($event->title); ?></td>
                                <td><?php echo e($event->description); ?></td>
                                <td><?php echo e($event->deadline->diffForHumans()); ?></td>
                                <td>
                                    <?php if($event->deadline < Carbon\Carbon::now()): ?>
                                        <p class="text-success">deadline passed</p>
                                    <?php else: ?>
                                        <p class="text-danger">pending</p>
                                    <?php endif; ?>
                                </td>
                                <td>
                                    <a href="<?php echo e(route('remove.event', ['id' => $event->id ])); ?>" onclick="return confirm('are you sure you want to remove this event?')">
                                        <i class="fa fa-remove text-danger"></i>
                                    </a>
                                </td>
                            </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                    </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end row -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.back', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>