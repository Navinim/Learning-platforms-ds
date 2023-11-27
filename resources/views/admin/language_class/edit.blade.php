@extends('admin.layouts.app')
@section('content')
    <section id="main-content">
        <section class="wrapper">
            <!-- page start-->
            <div class="row">
                <div class="col-sm-12">
                    <section class="card">
                        <div class="card-header">
                             <h5>Edit Language Class</h5>
                        </div>
                        <div class="card-body">
                            <form role="form" action="{{ route('classes.update',$class->id) }}" enctype="multipart/form-data" method="POST">@csrf
                                @method('PUT')
                                <div class="form-group">
                                    <label for="title">Title</label>
                                    <input type="text" class="form-control" required name="title" id="title" placeholder="e.g. PTE or IELTS" value="{{$class->title}}">
                                </div>         
                                <div class="form-group">
                                    <label for="overview">Overview</label>
                                    <div class="">
                                        <textarea class="form-control" name="overview" id="overview">{{$class->overview}}</textarea>
                                    </div>
                                </div>                                
                                <div class="form-group writing">
                                    <label for="benefit">Benefits</label>
                                    <div class="">
                                        <textarea class="form-control" name="benefit" id="benefit">{{$class->benefit}}</textarea>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <label for="reading">What you need to know</label>
                                    <div class="">
                                        <div id="trial-container" class="row">
                                            @foreach($class->topics as $index => $trial)
                                            <div class="col-10 trial">
                                                <label class="form-label" for="topics[{{ $index }}][title]">Title</label>
                                                <input type="text" class="form-control" name="topics[{{ $index }}][title]" value="{{ $trial['title'] }}"><br>
                                                <label class="form-label" for="topics[{{ $index }}][details]">Details</label>
                                                <textarea class="form-control" name="topics[{{ $index }}][details]" id="details{{ $index }}">{{ $trial['details'] }}</textarea><br>
                                                
                                            </div>
                                            <div class="col-2">
                                                {{-- <button class="btn btn-danger m-2">Delete</button> --}}
                                            </div>
                                            
                                            @endforeach
                                        </div>
                                        <button type="button" id="add-trial" class="btn btn-primary">Add Topics</button>
                                    </div>
                                </div>                                                               
                                <div class="form-group ">
                                    <label for="score">Scoring Format</label>
                                    <div class="">
                                        <textarea class="form-control" name="score" id="score">{{$class->score}}</textarea>
                                    </div>
                                </div>                              
                                <div class="form-group">
                                    <label for="image">Banner Image</label>
                                    <input type="file" class="form-control" id="image" name="image">
                                </div> 
                                <button type="submit" class="btn btn-info mt-2">Submit</button>
                            </form>

                        </div>
                    </section>
                </div>
            </div>
        </section>
    </section>
@endsection

@section('js')
<script>
   $(document).ready(function() {
        var trialCount = 1;
        $('#add-trial').on('click', function() {
            trialCount++;
            var newTrial = `
                <div id="trial-container">
                        <div class="trial">
                            <div class="row">
                                <div class="col-lg-8 col-md-8">
                                    <label class="form-label" for="topics[${trialCount}][title]">Title</label>
                                    <input type="text" class="form-control" name="topics[${trialCount}][title]" placeholder="Reading"><br>
                                </div>
                                <div class="col-lg-4 col-md-4">
                                    <button type="button" class="remove-trial btn btn-danger mt-4" data-textarea-id="trial-details-${trialCount}">Remove</button><br>
                                </div>
                            </div>
                            
                            <label class="form-label" for="topics[${trialCount}][details]">Details</label>
                            <textarea class="form-control" name="topics[${trialCount}][details]" id="trial-details-${trialCount}"></textarea><br>
                            
                        </div>
                    </div>
            `;

            $('#trial-container').append(newTrial);
            CKEDITOR.replace(`trial-details-${trialCount}`); 
                      
        });
        $(document).on('click', '.remove-trial', function() {
            var textareaId = $(this).data('textarea-id');
            CKEDITOR.instances[textareaId].destroy(); 
            $(`#${textareaId}`).parent('.trial').remove();
        });
    });
</script>

    
<script>
    function deleteTopic(button, index) {
        // Remove the topic's HTML container
        button.closest('.trial').remove();
    }
</script>

    <script>
        CKEDITOR.replace( 'overview');
        CKEDITOR.replace( 'score');
        CKEDITOR.replace( 'benefit');
        CKEDITOR.replace( 'details');
        CKEDITOR.replace( 'speaking');
        CKEDITOR.replace( 'vocabulary');
        CKEDITOR.replace( 'details0');
        CKEDITOR.replace( 'details1');
        CKEDITOR.replace( 'details2');
        CKEDITOR.replace( 'details3');
        CKEDITOR.replace( 'details4');
        CKEDITOR.replace( 'details5');

    </script>
@endsection