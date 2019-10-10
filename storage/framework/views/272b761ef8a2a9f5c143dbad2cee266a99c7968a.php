<div>
	<h1><?php echo e($event->title); ?></h1>
	<p>Hello <b><?php echo e($event->email); ?></b>,</p>
	<p>Please be informed that the deadline for <b><?php echo e($event->title); ?></b> deliverable is <b><?php echo e($event->deadline->toFormattedDateString()); ?></b>, this is just a reminder notification. Thank you</p>
	<p><b>Description: </b><?php echo e($event->description); ?></p>
</div>