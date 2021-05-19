

@extends('layouts.layout')
<!-- шаблон -->


<h1>{{$details['title']}}</h1>
<p>{{$details['body']}}</p>


<div>
    <label for="email">Your email</label>
    <input type ="email" class="form-control" id="email">
</div>
<div>
    <label for="message">Your message</label>
    <textarea type ="text" class="form-control" id="message"
    rows="5" name="message">
</div>

@section('layouts.footer')
@endsection
