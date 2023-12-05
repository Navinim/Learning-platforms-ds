@extends('admin.layouts.app')

@section('content')
    <div class="card">
        <div class="card-header d-flex justify-between">
            <h5>Transit Your Career</h5>
            {{-- <a href="{{route('dream.create')}}" class="btn rounded-pill btn-primary">
                <span class="tf-icons bx bx-pie-chart-alt"></span>&nbsp; Add New
              </a> --}}
        </div>        
        <div class="table-responsive text-nowrap">
            <table class="table">
                <thead>
                    <tr class="text-nowrap">
                        
                        <th>Title</th>
                        <th>Description</th>                                                                    
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>                    
                    <tr>
                       
                        <td>
                            {{$dream->title}}
                        </td>
                        
                        <td>{!! Str::limit($dream->detail, 100) !!}</td>                        
                        
                        <td>
                            <a href="{{route('dream.edit',$dream->id)}}" class="btn rounded-pill btn-primary">
                                <span class="tf-icons bx bx-comment-edit"></span>&nbsp; edit
                              </a> 
                              {{-- <form action="{{route('dream.destroy',$dream->id)}}" method="POST">@csrf
                                @method('DELETE')
                                <button class="btn rounded-pill btn-danger mt-2" onclick="return confirm('Are you sure you want to delete this item')">
                                    <span class="tf-icons bx bx-trash-alt"></span>&nbsp; Delete
                                  </button>
                            </form>
                            --}}

                        </td>
                        
                    </tr> 
                    
                                       
                </tbody>
            </table>
        </div>
    </div>
@endsection
