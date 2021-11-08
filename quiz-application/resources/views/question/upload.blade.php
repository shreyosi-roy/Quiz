@include('includes.header')
<div class="container bg-indigo">
  <div class="row text-white">
    <div class="col-md-12">
      <label>Enter Quiz question</label>
      <input type="text" name="quiz_question" class="form-control" />
    </div>
    <!-- quiz option one -->
    <div class="col-md-6">
      <label>Enter Option One</label>
      <input type="text" name="quiz_question" class="form-control" />
    </div>
    <!-- quiz option two -->
    <div class="col-md-6">
      <label>Enter Option Two</label>
      <input type="text" name="quiz_question" class="form-control" />
    </div>
    <!-- quiz option three -->
    <div class="col-md-6">
      <label>Enter Option three</label>
      <input type="text" name="quiz_question" class="form-control" />
    </div>
    <!-- quiz option four -->
    <div class="col-md-6">
      <label>Enter Option Four</label>
      <input type="text" name="quiz_question" class="form-control" />
    </div>
    <!-- correct quiz option -->
    <div class="col-md-6">
      <label>Correct Option</label>
      <div>
        <div class="col-md-12">

          <input type="radio" id="correctChoice1" name="correct" value="Option One">
          <label for="Choice1">Option One</label>
          <input type="radio" id="correctChoice2" name="correct" value="Option Two">
          <label for="Choice2">Option Two</label>
          <input type="radio" id="correctChoice3" name="correct" value="Option Three">
          <label for="Choice3">Option Three</label>
          <input type="radio" id="correctChoice4" name="correct" value="Option Four">
          <label for="Choice3">Option Four</label>
        </div>
        <div class="row">
          <div class="col-md-6">
            <button type="button" class="btn btn-primary btn-lg" style="padding-left: 2.5rem; padding-right: 2.5rem;">Submit</button>

          </div>
        </div>
      </div>




      </form>
      @include('includes.footer')