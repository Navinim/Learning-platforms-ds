@extends('admin.layouts.app')
@push('css')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
@endpush
@section('content')
    <section id="main-content">
        <section class="wrapper">
            <!-- page start-->
            <div class="row">
                <div class="col-sm-12">
                    <section class="card">
                        <div class="card-header">
                            <h5>Inquiry Form JoinUs</h5>
                            
                        </div>
                        <div class="card-body">
                            {{-- <a href="{{route('admin.feature.add')}}" class="btn btn-success" style="margin-bottom: 10px">Add New <i class="fa fa-plus px-2"></i></a> --}}

                            <div class="adv-table">
                                <table class="display table table-bordered table-striped" id="dynamic-table">
                                    <thead>
                                        <tr>
                                            <th>Full Name</th>                                            
                                            <th>Subject</th>
                                            <th>Email</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($inquiry as $item)   
                                        <tr class="gradeX">
                                            <td>{{$item->name}}</td>                                           
                                            <td>{{$item->course_type}}</td>
                                            <td>{{$item->email}}</td>
                                            <td>
                                                <button data-contact-id="{{ $item->id }}" data-bs-toggle="modal" id="showbtn"
                                                    data-bs-target="#editModal" class="btn btn-primary mx-2"><i class="bx bx-bullseye"></i></button>
                                                <a href="{{route('inquiries.destroy',$item->id)}}" onclick="return confirm('Are you sure you want to delete this item?')" class="btn btn-danger mx-2"><i class="bx bx-trash"></i></a>
                                            </td>
                                        </tr>
                                        @endforeach

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
            @if (!empty($item->id))              
            <div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">                
                <div class="modal-dialog ">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">Message Details</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <p><strong>Full Name:</strong> <span id="contactName"></span></p>
                            <p><strong>Email:</strong> <span id="contactEmail"></span></p>
                            <p><strong>Phone:</strong> <span id="contactPhone"></span></p>
                            <strong><p>Subject: <span id="contactSubject"></span></p></strong>
                            <p><strong>Message:</strong></p> 
                            <span id="contactMessage"></span>                          
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>                            
                        </div>
                    </div>
                </div>
            </div>
            @endif
            <!-- page end-->
        </section>
    </section>
@endsection
@section('js')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    
    <script>
        $(document).ready(function() {

            // When the modal is shown
            $('#editModal').on('show.bs.modal', function(event) {
                var button = $(event.relatedTarget);
                var contactId = button.data('contact-id'); 
                // console.log(contactId)               
                $.ajax({
                    url: `{{ route('show', ['id' => ':id']) }}` .replace(':id', contactId), 
                    type: 'GET',
                    success: function(response) {
                        // console.log(response)
                        $('#contactName').text(response.name);
                        $('#contactEmail').text(response.email);
                        $('#contactPhone').text(response.phone);
                        $('#contactSubject').text(response.course_type);
                        $('#contactMessage').text(response.content);
                    },
                    error: function(error) {
                        console.error('Error fetching data:', error);
                    }
                });
            });
        });
    </script>
    
@endsection
