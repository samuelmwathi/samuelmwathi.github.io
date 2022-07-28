@extends('admin.layouts.layouts')
@section('title','Users')

@section('content')
    <div class="content-page">
        <div class="content">

            <!-- Start Content-->
            <div class="container-fluid">

                <!-- start page title -->
                <div class="row">
                    <div class="col-12">
                        <div class="page-title-box">
                            <h4 class="page-title">Users List</h4>
                        </div>
                    </div>
                </div>
                <!-- end page title -->


                <div class="row">
                    <div class="col-12">
                        @include('partials.info')
                        <div class="card">
                            <div class="card-body">
                                <div class="row mb-2">
                                    <div class="col-sm-12">
                                        <div class="text-sm-right">
                                            <a href="{{ route('admin.users.create') }}" class="btn btn-success waves-effect waves-light">
                                                New User <i data-feather="plus-circle"></i>
                                            </a>
                                        </div>
                                    </div><!-- end col-->
                                </div>

                                <div class="table-responsive">
                                    <table class="table table-centered table-striped" id="products-datatable">
                                        <thead>
                                        <tr>
                                            <th style="width: 20px;">#</th>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Phone</th>
{{--                                            <th>Role</th>--}}
                                            <th style="width: 85px;">Action</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($users as $count=>$user)
                                            <tr>
                                                <td>{{ ++$count }}</td>

                                                <td> <a href="{{ route('admin.users.details',$user->id) }}">{{ $user->firstName." ".$user->midName." ".$user->lastName }}</a> </td>
                                                <td>{{ $user->email }}</td>
                                                <td>{{ $user->phone }}</td>
{{--                                                <td>{{ $user->roles->name }}</td>--}}
                                                <td><span>
                                                        <a  href="{{ route('admin.users.details',$user->id) }}" class="btn btn-success btn-sm"> Details </a>
                                                    </span>
                                                </td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                </div>

                                <ul class="pagination pagination-rounded justify-content-end mb-0">
                                    {{ $users->links() }}
                                </ul>

                            </div> <!-- end card-body-->
                        </div> <!-- end card-->
                    </div> <!-- end col -->
                </div>
                <!-- end row -->

            </div> <!-- container -->

        </div> <!-- content -->
    </div>

@endsection
