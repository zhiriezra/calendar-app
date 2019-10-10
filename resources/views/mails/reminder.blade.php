<div>
	<h1>{{ $event->title }}</h1>
	<p>Hello <b>{{ $event->email}}</b>,</p>
	<p>Please be informed that the deadline for <b>{{ $event->title }}</b> deliverable is <b>{{ $event->deadline->toFormattedDateString() }}</b>, this is just a reminder notification. Thank you</p>
	<p><b>Description: </b>{{ $event->description }}</p>
</div>