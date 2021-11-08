@include('includes.header')
<div class="container bg-indigo">
  <div class="row text-white">
    <div class="col-md-12">
      <!-- include flash msg -->
@include('flash-message')
      <form method="POST" action="{{ route('submit')}}">
        @csrf
      <label>Enter Quiz question</label>
      <input type="text" name="quiz_question" required class="form-control" />
    </div>
    <!-- quiz option one -->
    <div class="col-md-6">
      <label>Enter Option One</label>
      <input type="text" name="quiz_option_one" required class="form-control" />
    </div>
    <!-- quiz option two -->
    <div class="col-md-6">
      <label>Enter Option Two</label>
      <input type="text" name="quiz_option_two" required class="form-control" />
    </div>
    <!-- quiz option three -->
    <div class="col-md-6">
      <label>Enter Option three</label>
      <input type="text" name="quiz_option_three" required class="form-control" />
    </div>
    <!-- quiz option four -->
    <div class="col-md-6">
      <label>Enter Option Four</label>
      <input type="text" name="quiz_option_four" required class="form-control" />
    </div>
    <!-- correct quiz option -->
    <div class="col-md-6">
      <label>Correct Option</label>
      <div>
        <div class="col-md-12">

          <input type="radio" id="correctChoice1" name="correct" value="1">
          <label for="Choice1">Option One</label>
          <input type="radio" id="correctChoice2" name="correct" value="2">
          <label for="Choice2">Option Two</label>
          <input type="radio" id="correctChoice3" name="correct" value="3">
          <label for="Choice3">Option Three</label>
          <input type="radio" id="correctChoice4" name="correct" value="4">
          <label for="Choice3">Option Four</label>
          <span class="text-danger">@error('correct'){{ $message }} @enderror</span>

        </div>
        <div class="row">
          <div class="col-md-6">
            <button type="submit" class="btn btn-primary btn-lg" style="padding-left: 2.5rem; padding-right: 2.5rem;">Submit</button>

          </div>
        </div>
      </div>




      </form>
      @include('includes.footer')