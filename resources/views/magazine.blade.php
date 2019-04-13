@extends('layouts.app_home_articles')
@section('content')


<div class="content-wrap">
    <article  style="padding:100px 0;" class="single-article">
        <iframe src="{{ asset('files/Eye-EEE-Magazine-Issue2.pdf') }}" type="application/pdf" width="100%" height="1000px" ></iframe>
        <p class="pdf">Please download the article to view it: <a href="{{ asset('files/Eye-EEE-Magazine-Issue2.pdf') }}" target="blank">Download the issue</a>.</p>
    </article>
</div>
@endsection