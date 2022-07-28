@extends('admin.layouts.layouts')
@section('title','Enquiries')
@section('content')
    <div class="content-page">
        <div class="content">

            <!-- Start Content-->
            <div class="container-fluid">

                <!-- start page title -->
                <div class="row">
                    <div class="col-12">
                        <div class="page-title-box">

                            <h4 class="page-title">Enquiries</h4>
                        </div>
                    </div>
                </div>
                <!-- end page title -->

                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-centered table-striped" id="products-datatable">
                                        <thead>
                                        <tr>
                                            <th style="width: 20px;">#</th>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Phone</th>
                                            <th>Message</th>
                                            <th>Date</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($messages as $count=>$message)
                                            <tr>
                                                <td>{{ ++$count }}</td>

                                                <td>{{ $message->name }}</td>
                                                <td>{{ $message->email }}</td>
                                                <td>{{ $message->phone }}</td>
                                                <td>{{ $message->message}}</td>
                                                <th>{{ $message->created_at }}</th>
                                                <th>
                                                    @if($message->status == 1)
                                                        <span  class="btn btn-xs btn-outline-success">Complete</span>
                                                    @else
                                                        <span class="btn btn-xs btn-outline-info">New</span>
                                                    @endif
                                                </th>
                                                <td>
                                                     <span>
                                                       <button id="{{$message->id}}_button" class="btn btn-info btn-xs" onclick="requestDetails({{$message->id}})">Details</button>
                                                    </span>
                                                </td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                </div>

                                <ul class="pagination pagination-rounded justify-content-end mb-0">
                                    {{ $messages->links() }}
                                </ul>

                            </div> <!-- end card-body-->
                        </div> <!-- end card-->
                    </div> <!-- end col -->
                </div>
                <!-- end row -->

            </div> <!-- container -->

        </div> <!-- content -->

    </div>
    <div class="modal fade" id="requestDetailsModal" tabindex="-1" role="dialog"
         aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalScrollableTitle">Enquiry Details</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <input type="hidden" id="enquiryId" value="0" name="enquiryId">
                    <p><strong>Name : </strong><span id="name"></span></p>
                    <p><strong>Email : </strong><span id="email"></span></p>
                    <p><strong>Phone : </strong><span id="phone"></span></p>
                    <p><strong>Subject : </strong><span id="subject"></span></p>
                    <h5>Message</h5>
                    <hr>
                    <blockquote><span id="message"></span></blockquote>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" id="markAsReadButton" onclick="markAsComplete()" class="btn btn-success">Mark Complete</button>
                </div>
            </div>
        </div>
    </div>
    <script>
        function requestDetails(requestId) {
            $('#markAsReadButton').text('');
            $("#markAsReadButton").attr("disabled", false);
            $('#markAsReadButton').append("Mark As Complete <i class='fa fa-check'></i>");
            var data = {'requestId': requestId};

            console.log(data);


            $('#'+requestId+'_button').text('');
            $('#'+requestId+'_button').append("Please wait...<i class='fa fa-spinner'></i>");

            $.ajax({
                type: "POST",
                dataType:'json',
                url: '{{ route('admin.contacts.details') }}',
                data: data,
                headers: {'X-CSRF-TOKEN': $('meta[name="csrf_token"]').attr('content')},
                success: function(response) {
                    if (response.response == true)
                    {
                        console.log(response);
                        $('#name').html(response.details.name);
                        $('#email').html(response.details.email);
                        $('#phone').html(response.details.phone);
                        $('#message').html(response.details.message);
                        $('#subject').html(response.details.subject);
                        $('#enquiryId').val(requestId);

                        if(response.details.status == 1)
                        {
                            $('#markAsReadButton').text('');
                            $("#markAsReadButton").attr("disabled", true);
                            $('#markAsReadButton').append("Complete <i class='fa fa-check'></i>");
                        }

                        $('#requestDetailsModal').modal('show');
                    }else{
                        console.log('Error adding');
                    }
                    $('#'+requestId+'_button').text('');
                    $('#'+requestId+'_button').append("Details");

                }
            });
        }
        function markAsComplete() {
            var enquiryId = $('#enquiryId').val();
            swal({
                title: "Are you sure?",
                text: "You cant undo this action.!",
                icon: "warning",
                buttons: true,
                dangerMode: true,
            })
                .then((willDelete) => {
                    if (willDelete) {
                        var url = '{{ route("admin.contacts.complete", ":id") }}';

                        url = url.replace(':id', enquiryId);

                        window.location.href=url;

                    }
                });
        }
    </script>



@endsection
