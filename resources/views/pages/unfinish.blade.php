@extends('layouts.success')

@section('title')
    Checkout Success
@endsection

@section('content')
<main>
    <div class="section-success d-flex align-items-center">
        <div class="col text-center">
        <img src="{{url('frontend/Images/ic_mail.png') }}" />
            <h1>Oops!</h1>
            <p>
                Your Transaction Unfinished!
            </p>
            <a href="{{ url('/') }}" class="btn btn-home-page mt-3 px-5">
                Home Page
            </a>
            </div>
    </div>
</main>
@endsection