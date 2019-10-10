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
                    Create Event
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
            <h4 class="m-t-0 header-title"><b>Create New Event</b></h4>
            <p class="text-muted m-b-30 font-13">
                
            </p>

            <div class="row">
                <div class="col-md-12">
                    <?php echo $__env->make('includes.flash_messages', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                    <form action="<?php echo e(route('store.event')); ?>" class="form-horizontal" method="POST">
                        <?php echo csrf_field(); ?>
                        <div class="form-group">
                            <label class="col-md-2 control-label">Name</label>
                            <div class="col-md-8">
                                <input id="name" type="text" class="form-control<?php echo e($errors->has('name') ? ' is-invalid' : ''); ?>" name="name" value="<?php echo e(old('name')); ?>" required autofocus>

                                <?php if($errors->has('name')): ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($errors->first('name')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-2 control-label" for="example-email">Email</label>
                            <div class="col-md-8">
                                <input id="email" type="email" class="form-control<?php echo e($errors->has('email') ? ' is-invalid' : ''); ?>" name="email" value="<?php echo e(old('email')); ?>" required>

                                <?php if($errors->has('email')): ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($errors->first('email')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-2 control-label" for="example-email">Event Title</label>
                            <div class="col-md-8">
                                <input id="title" type="text" class="form-control<?php echo e($errors->has('title') ? ' is-invalid' : ''); ?>" name="title" value="<?php echo e(old('title')); ?>" required autofocus>

                                <?php if($errors->has('title')): ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($errors->first('title')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-2 control-label" for="example-email">Event Description</label>
                            <div class="col-md-8">
                                <textarea id="description" class="form-control<?php echo e($errors->has('description') ? ' is-invalid' : ''); ?>" name="description" value="<?php echo e(old('description')); ?>" required autofocus></textarea>

                                <?php if($errors->has('description')): ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($errors->first('description')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-2 control-label" for="example-email">Deadline Date</label>
                            <div class="col-md-8">
                                <input id="deadline" type="date" class="form-control<?php echo e($errors->has('deadline') ? ' is-invalid' : ''); ?>" name="deadline" required>

                                <?php if($errors->has('deadline')): ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($errors->first('deadline')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>

                        


                        <div class="form-group">
                            <label class="col-md-2 control-label"></label>
                            <div class="col-md-8">
                                <input type="submit" name="submit" value="Create Event" class="btn btn-primary">
                            </div>
                        </div>

                    </form>


                </div>
            </div>
        </div>
    </div>
</div>
<!-- end row -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.back', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>