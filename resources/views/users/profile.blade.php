@extends('layouts.app')

@section('content')
<div class="row">
    <aside id="profile" class="col-lg-3 border text-center pt-4">
        <img class="rounded-circle fluid border" style="width:250px; height=250px;" src="/uploads/avatars/{{$user->avatar}}" alt="avatar">
        <h3 class="mt-4 font-weight-bold">{{$user->name}}</h3>
        <div>
            <h4 class="text-muted font-thin">{{$user->username}}</h4>
        </div>
        <a class="btn-link"  href="https://github.com/automateeverythingM">automateeverythingM</a>
        <div class="d-flex my-4 flex-wrap">
            @foreach ($user->skills as $skill)
            <span class="btn-sm btn-secondary  mb-2  cursor-pointer mr-1">{{$skill->name}}</span>
            @endforeach
        </div>

        <div class="text-left my-4">
            <h4>About:</h4>
            <p>{{$user->about}}</p>
            @if (!Auth::guest())
            <a class="pull-right" href="{{ route('users.edit',$user->id) }}"><i class="fas fa-edit"></i></a>
            @endif
    </aside>
    <section class="col-lg-9">
        <nav>
            <div class="nav nav-tabs" id="nav-tab" role="tablist">
                <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Projects</a>
                <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Teams</a>
                <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">Notifications</a>
            </div>
        </nav>


            <div class="tab-content" id="nav-tabContent">
            <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                @if(Auth::user())
                   <a class="btn btn-success" href="projects.create">Create project</a> 
                @endif
                
                <div class="d-flex flex-wrap p-3">
                   
                    @foreach ($projects as $project)

                    <div class="d-flex margin-r-b word-wrap w-45 border">
                        <div class="border-drag mr-3"></div>
                        <div class="p-3">
                            <h5>{{$project->title}}</h5>
                            <a href="">{{$project->github_link}}</a>
                            <p class="text-muted my-0">{{$project->description}}</p>
                            <a href="">Readme</a>
                            <ul class="language-ul">
                                <li class="text-info mr-2">Javascript</li>
                                <li class="text-info mr-2">React</li>
                                <li class="text-info mr-2">Php</li>
                            </ul>
                        </div>

                    </div>
                    @endforeach
                  
                    {{-- <div class="d-flex margin-r-b word-wrap w-45 border">
                        <div class="border-drag mr-3"></div>
                        <div class="p-3">
                            <h5>Project name</h5>
                            <a href="">https://github.com/automateeverythingM/buddyCode</a>
                            <p class="text-muted my-0">About No description, website, or topics provided.</p>
                            <a href="">Readme</a>
                            <ul class="language-ul">
                                <li class="text-info mr-2">Javascript</li>
                                <li class="text-info mr-2">React</li>
                                <li class="text-info mr-2">Php</li>
                            </ul>
                        </div>

                    </div>

                    <div class="d-flex margin-r-b word-wrap w-45 border">
                        <div class="border-drag mr-3"></div>
                        <div class="p-3">
                            <h5>Project name</h5>
                            <a href="">https://github.com/automateeverythingM/buddyCode</a>
                            <p class="text-muted my-0">About No description, website, or topics provided.</p>
                            <a href="">Readme</a>
                            <ul class="language-ul">
                                <li class="text-info mr-2">Javascript</li>
                                <li class="text-info mr-2">React</li>
                                <li class="text-info mr-2">Php</li>
                            </ul>
                        </div>

                    </div> --}}



                </div>




                
            </div>
            <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                marko
            </div>
            <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
               <div>
                   <div class="d-flex">
                       <img class="rounded-circle" src="https://picsum.photos/50/50" alt="avatar">
                   </div>
               </div>
            </div>
            </div>
            
    </section>



        </div>

@endsection

@section('css')
    <link href="{{'css/register.css'}}" rel="stylesheet">
@stop
