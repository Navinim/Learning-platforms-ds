@extends('admin.layouts.app')
@section('content')
    <div class="card mb-4">
        <h5 class="card-header">Add New</h5>
        <form action="{{ route('dream.store') }}" method="POST" enctype="multipart/form-data">
            @csrf            
            <div class="card-body demo-vertical-spacing demo-only-element">               

                <div class="form-password-toggle">
                    <label class="form-label" for="title">Title</label>
                    <div class="input-group input-group-merge">
                        <input type="text" class="form-control" name="title"  />
                    </div>
                </div>         
               
                <div class="form-password-toggle">
                    <label class="form-label" for="description">Desription</label>
                    <div class="input-group input-group-merge">
                        <textarea type="file" class="form-control" id="description" name="detail" ></textarea>                        
                    </div>
                </div>
                <div class="form-password-toggle">
                    <label class="form-label" for="package"> [banner over text]</label>
                    <div class="input-group input-group-merge">
                        <textarea type="text" class="form-control" id="package" name="slogan" ></textarea>                        
                    </div>
                </div>
                <div class="form-password-toggle">
                    <label class="form-label" for="package">Deals</label>
                    <div id="trial-container">
                        <div class="trial">
                            <label class="form-label" for="deals[0][title]">Title</label>
                            <input type="text" class="form-control" name="deals[0][title]" placeholder="title"><br>
                            <label class="form-label" for="deals[0][icon]">Icon</label>
                            <input class="form-control" name="deals[0][icon]" placeholder="Fa icon"><br>
                            <label class="form-label" for="deals[0][detail]">Short Details</label>
                            <textarea class="form-control" name="deals[0][detail]" placeholder="Short details"></textarea><br>
                        </div>
                    </div>
                    <button type="button" id="add-trial" class="btn btn-primary">Add Deals</button>
                </div>
                
                <div class="form-password-toggle">
                    <label class="form-label" for="gallery">Banner</label>
                    <div class="input-group input-group-merge">
                        <input type="file" class="form-control" id="banner" name="banner" />                        
                    </div>
                </div>
                <button type="submit" class="btn rounded-pill btn-primary">
                    <span class="tf-icons bx bx-pie-chart-alt"></span>&nbsp; Save
                </button>
                
            </div>
        </form>
    </div>
  
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
                                    <label class="form-label" for="deals[${trialCount}][title]">Title</label>
                                    <input type="text" class="form-control" name="deals[${trialCount}][title]"><br>
                                    <label class="form-label" for="deals[${trialCount}][icon]">Icon</label>
                            <input class="form-control" name="deals[${trialCount}][icon]"></input><br>
                            <label class="form-label" for="deals[${trialCount}][detail]">Short Detail</label>
                            <textarea class="form-control" name="deals[${trialCount}][detail]" placeholder="Short details"></textarea><br>
                                </div>
                                <div class="col-lg-4 col-md-4">
                                    <button type="button" class="remove-trial btn btn-danger mt-4" data-textarea-id="trial-details-${trialCount}">Remove</button><br>
                                </div>
                            </div>
                            
                           
                            
                        </div>
                    </div>
            `;

            $('#trial-container').append(newTrial);
           
        });
        $(document).on('click', '.remove-trial', function() {            
            $(this).closest('.trial').remove();
        });
    });
</script>
<script>
    CKEDITOR.replace( 'description');  
    CKEDITOR.replace( 'package'); 
    CKEDITOR.replace( 'dresscode'); 
    CKEDITOR.replace( 'backpacks'); 
    CKEDITOR.replace( 'details'); 
     
</script>
@endsection
