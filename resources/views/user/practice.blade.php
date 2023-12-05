@extends('user.layouts.app')
@push('css')
    <!--contact-->
    <<link rel="stylesheet" href="{{asset('user/css/interview.css')}}">
@endpush
@section('content')
 <!--page title area start-->
 <section class="page__title-area page__title-height page__title-overlay d-flex align-items-center" data-background="assets/img/page-title/page-title.jpg" style="background-image: url('{{asset('user/images/page-tittle/contact.png')}}');">
    <div class="container">
       <div class="row">
          <div class="col-xxl-12">
             <div class="page__title-wrapper mt-110">
                <h3 class="page__title">General Practice Question</h3>                         
                <nav aria-label="breadcrumb">
                   <ol class="breadcrumb">
                      <li class="breadcrumb-item"><a href="#">Resources</a></li>
                      <li class="breadcrumb-item active" aria-current="page">Interview Question Lists</li>
                   </ol>
                </nav>
             </div>
          </div>
       </div>
    </div>
 </section>
<!--page title area ends-->
<div class="container mt-50 mb-70">
    <h3>Frequently asked Questions in Interview</h3>
    <p style="text-align: justify;">Engaging in regular practice with interview questions is a crucial step in preparing for successful job interviews. Practice not only helps you become familiar with the types of questions you might encounter, but it also sharpens your ability to communicate effectively and showcase your skills. Whether you're practicing technical questions related to your field or behavioral questions that assess your soft skills, consistent practice empowers you to formulate thoughtful responses, manage nervousness, and demonstrate your qualifications confidently. Utilizing a variety of resources, such as mock interviews, online platforms, or study groups, can provide a well-rounded preparation experience that enhances your interview performance and increases your chances of securing the desired position.</p>
    <div class="interview__wrapper mt-50">
        <div class="interview__tab-2 mb-45">
            <h4>Question Categories</h4>
            <ul class="nav nav-tabs flex-column" id="interviewTab" role="tablist">
                @foreach ($practiceCate as $item)
                <li class="nav-item" role="presentation">
                    <button class="nav-link{{ $loop->first ? ' active' : '' }}" id="{{ $item->slug }}-tab" data-bs-toggle="tab" data-bs-target="#{{ $item->slug }}" type="button" role="tab" aria-controls="{{ $item->slug }}" aria-selected="{{ $loop->first ? 'true' : 'false' }}">
                        <span>{{ $item->name }}</span>
                    </button>
                </li>
                @endforeach
                
            </ul>
        </div>
        <div class="interview__tab-content mb-50">
            <div class="tab-content" id="interviewTabContent">
                @foreach ($practiceCate as $category)
                <div class="tab-pane fade {{ $loop->first ? ' active show' : '' }}" id="{{ $category->slug }}" role="tabpanel" aria-labelledby="{{ $category->slug }}-tab">
                    <div class="question">
                        <div class="accordion-widget">
                            <div class="accordion" id="accordion{{ $category->slug }}">
                                @foreach ($category->practices as $question)
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="heading{{ $question->id }}">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse{{ $question->id }}" aria-expanded="false" aria-controls="collapse{{ $question->id }}">
                                            {{ $question->question }}
                                        </button>
                                    </h2>
                                    <div id="collapse{{ $question->id }}" class="accordion-collapse collapse" aria-labelledby="heading{{ $question->id }}" data-bs-parent="#accordion{{ $category->slug }}">
                                        <div class="accordion-body">
                                            {{-- <form>
                                                <label for="textbox">Enter Answer:</label>
                                                <input type="text" id="textbox" name="textbox">
                                                <br>
                                                <button class="default-btn" type="submit" id="submitButton">Submit</button>
                                            </form> --}}
                                            =>>{{ $question->answer }}
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                               
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
                
            </div>
        </div>
    </div>
</div>
@endsection
@section('js')
<script>
    document.addEventListener('DOMContentLoaded', function () {
        document.querySelectorAll('#submitButton').forEach(function (button) {
            button.addEventListener('click', function () {
                const textBox = this.closest('form').querySelector('input[name="textbox"]');
                const questionId = textBox.dataset.questionId;
                const correctAnswer = textBox.dataset.correctAnswer;
                const userAnswer = textBox.value.trim();

                // Compare the user's answer with the correct answer
                const result = userAnswer.toLowerCase() === correctAnswer.toLowerCase() ? 'Correct' : 'Incorrect';

                // Display the result (you can modify this based on your needs)
                alert(result);
            });
        });
    });
</script>

@endsection