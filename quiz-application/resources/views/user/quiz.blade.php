@include('includes.header')
<div class="container bg-indigo">
    <form>
        <div class="row">
            <!-- question number -->
            <div class="col-md-2">
                1
            </div>
            <!-- question -->
            <div class="col-md-4">
                <label>Write Question Here?</label>
            </div>
            <!-- options -->
            <div class="col-md-6">

                <input type="radio" id="correctChoice1" name="correct" value="Option One">
                <label for="Choice1">Option One</label>
                <input type="radio" id="correctChoice2" name="correct" value="Option Two">
                <label for="Choice2">Option Two</label>
                <input type="radio" id="correctChoice3" name="correct" value="Option Three">
                <label for="Choice3">Option Three</label>
                <input type="radio" id="correctChoice4" name="correct" value="Option Four">
                <label for="Choice3">Option Four</label>
            </div>
        </div>

    </form>
</div>
@include('includes.footer')