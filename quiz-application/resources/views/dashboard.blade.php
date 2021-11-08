@include('includes.header')
<!-- dashboard view -->
<div class="container bg-indigo">
    Welcome 
    <br>
    {{ session('UserName') }}
</div>
@include('includes.footer')