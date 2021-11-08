@include('includes.header')
<div class="container bg-indigo">
    <form method="POST" action="{{ route('quizsubmit')}}">
    @csrf
    @foreach($quiz  As $qz)

        <div class="row">
           
            <!-- question number -->
            <div class="col-md-2">
            {{$qz->id}}
            <input type="hidden" name="{{$qz->id}}" value="{{$qz->id}}">
            </div>
            <!-- question -->
            <div class="col-md-4">
                <label>{{$qz->Question}}</label>
            </div>
            <!-- options -->
            <div class="col-md-6">

                <input type="radio" id="correctChoice1" name="correct{{$qz->id}}" value="1">
                <label for="correctChoice1">{{$qz->Option_one}}</label>
                <input type="radio" id="correctChoice2" name="correct{{$qz->id}}" value="2">
                <label for="correctChoice2">{{$qz->Option_two}}</label>
                <input type="radio" id="correctChoice3" name="correct{{$qz->id}}" value="3">
                <label for="correctChoice4">{{$qz->Option_three}}</label>
                <input type="radio" id="correctChoice4" name="correct{{$qz->id}}" value="4">
                <label for="correctChoice5">{{$qz->Option_four}}</label>
            </div>
        </div>
        @endforeach

        <input type="submit" value="Submit" name="submit"/>
    </form>
</div>
@include('includes.footer')