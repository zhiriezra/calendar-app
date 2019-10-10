@extends('layouts.back')

@section('content')

<div class="row">
    <div class="col-xs-12">
        <div class="page-title-box">
            <h4 class="page-title">Dashboard</h4>
            <ol class="breadcrumb p-0 m-0">
                <li>
                    <a href="{{ route('home') }}">Dashboard</a>
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
                    @include('includes.flash_messages')
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
                            @php $count = 1; @endphp
                            @foreach($events as $event)
                            <tr>    
                                <td>{{ $count++ }}</td>
                                <td>
                                    <a href="{{ route('edit.event', ['id' => $event->id]) }}">{{ $event->name }}</a>
                                </td>
                                <td>{{ $event->email }}</td>
                                <td>{{ $event->title }}</td>
                                <td>{{ $event->description }}</td>
                                <td>{{ $event->deadline->diffForHumans() }}</td>
                                <td>
                                    @if($event->deadline < Carbon\Carbon::now())
                                        <p class="text-success">deadline passed</p>
                                    @else
                                        <p class="text-danger">pending</p>
                                    @endif
                                </td>
                                <td>
                                    <a href="{{ route('remove.event', ['id' => $event->id ]) }}" onclick="return confirm('are you sure you want to remove this event?')">
                                        <i class="fa fa-remove text-danger"></i>
                                    </a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end row -->
@endsection
