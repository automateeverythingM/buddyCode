@extends('layouts.app')

@section('content')
<section id="root" class=" row">
    <article class="col-sm-12 col-md-8">
        <h1 class="display-3">
            Code Buddy
        </h1>
        <h3 class="display-4">Find somebody to code with.</h3>
        <p class="text-muted my-0">We made this for us</p>
        <p class="text-muted my-0">Faster advancing your knowledge.</p>
        <p class="text-muted mb-0">Practice, ask question and find out together</p>
        <input class="form-control"type="text" id="MainSearch" autocomplete="off">
    </article>
    <article class="col-sm-12 col-md-4">
        <div style="width:400px; height: 400px;" class="font-weight-bold display-2 bg-dark rounded-circle d-flex align-items-center justify-content-center text-white">
            Code
        </div>
    </article>
</section>
@endsection

@section('scripts')
@stop