@extends('layouts.app')

@section('content')


<form enctype="multipart/form-data" action="/profile" method="POST">
    @csrf
    
    <div class="row">

        <aside class="col-lg-3">
            <img class="rounded-circle fluid border mb-4" src="/uploads/avatars/{{$user->avatar}}" alt="avatar">
            <div>
                <label class="">Upload image</label>
            </div>
            
            <input type="file" name="avatar" value="">
            
        </aside>
        <section class="col-lg-9">
            <div class="form-group row">
                <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                <div class="col-md-6">
                    <input id="name" type="text" class="form-control is-invalid  @error('name') @enderror"
                        name="name" value="{{ $user->name }}" required autocomplete="name" autofocus>
                    @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
            </div>

            <div class="form-group row">
                <label for="username"
                    class="col-md-4 col-form-label text-md-right">{{ __('Username') }}</label>

                <div class="col-md-6">
                    <input id="username" type="text"
                        class="form-control @error('username') is-invalid @enderror" name="username"
                        value="{{ $user->username }}" required autocomplete="username" autofocus>

                    @error('username')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
            </div>

            <div class="form-group row">
                <label for="email"
                    class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                <div class="col-md-6">
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                        name="email" value="{{ $user->email }}" required autocomplete="email">

                    @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
            </div>

            <div class="form-group row">
                <label for="expertise"
                    class="col-md-4 col-form-label text-md-right">{{ __('Expertise level') }}</label>

                <div class="col-md-6 mt-2">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="check[]" id="inlineRadio1"
                            value="entry" checked>
                        <label class="form-check-label" for="inlineRadio1">Entry level</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="check[]" id="inlineRadio2"
                            value="intermediate">
                        <label class="form-check-label" for="inlineRadio2">Intermediate</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="check[]" id="inlineRadio3"
                            value="expert">
                        <label class="form-check-label" for="inlineRadio3">Expert</label>
                    </div>
                </div>
            </div>

            <div class="form-group row">
                <label for="skills" class="col-md-4 col-form-label text-md-right">{{ __('Skills') }}</label>
                <div class="col-md-6">
                    <input class="form-control" type="text" value="" name="skills[]" data-role="tagsinput"
                        placeholder="Add tags" />
                </div>

            </div>


            <div class="form-group row">
                <label for="about" class="col-md-4 col-form-label text-md-right">{{ __('Something about yourself') }}</label>

                <div class="col-md-6">
                    <textarea id="about" class="form-control block mt-1 w-full border" rows="8"
                        style="width: 100%" type="text" name="about" :value="old('about')" required
                        autofocus autocomplete="about">{{ $user->about }}</textarea>

                </div>
            </div>
            <input type="submit" class="btn btn-primary pull-right" >
        </section>
    </div>
</form>
@endsection