@extends('admin.dashboard')
@section('content')
    <div class="page-content">
        <div>
            @if(session('success'))
                <div class="alert alert-success" id="flashMessage">
                    {{ session('success') }}
                </div>
            @endif
        </div>
        <div class="row">
            <div class="col-12 grid-margin">
                <div class="card">
                    <div class="position-relative">
                        <figure class="overflow-hidden mb-0 d-flex justify-content-center">
                            <img src="
                                      @if(Storage::exists($user->profile->header_image))
                                        {{ Storage::url($user->profile->header_image) }}
                                      @else
                                        https://via.placeholder.com/1560x370
                                      @endif
                                        "class="rounded-top" alt="profile cover" style="width:100%;height: 40vh;object-fit: cover">
                        </figure>
                        <div
                            class="d-flex justify-content-between align-items-center position-absolute top-90 w-100 px-2 px-md-4 mt-n4">
                            <div>
                                <img src="
                                      @if(Storage::exists($user->profile->profile_image))
                                        {{ Storage::url($user->profile->profile_image) }}
                                      @else
                                        https://via.placeholder.com/1560x370
                                      @endif
                                      " alt="profile" class="wd-100 rounded-circle profile-image">

                                <span class="h4 ms-2 text-dark" style=";font-size: 2rem">{{$user->name}}</span>
                            </div>
                            <div class="d-md-block">
                                <a href="{{ route('admin.profile.edit') }}">
                                    <button class="btn btn-primary btn-icon-text mb-4 border-transition edit br-8">
                                        <i data-feather="edit" class="btn-icon-prepend"></i> Edit profile
                                    </button>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <x-profile-info label="About:" value="{{$user->profile->about}}"/>
                        <x-profile-info label="Joined:" value="{{$user->created_at->format('M d,Y')}}"/>
                        <x-profile-info label="Address:" value="{{$user->profile->address}}"/>
                        <x-profile-info label="Email:" value="{{$user->email}}"/>
                        <div class="mt-3">
                            <label class="tx-11 fw-bolder mb-0 text-uppercase ml-20">Website:</label>
                            @if($user->profile->github)
                                <p class="text-muted ml-25 mtp-5">{{$user->profile->github}}</p>
                            @endif
                            @if($user->profile->instagram)
                                <p class="text-muted ml-25 mtp-5">{{$user->profile->instagram}}</p>
                            @endif
                            @if($user->profile->tweeter)
                                <p class="text-muted ml-25 mtp-5">{{$user->profile->tweeter}}</p>
                            @endif
                        </div>
                        <div class="mt-3 d-flex social-links ml-20">
                            <x-social-media-link url="{{$user->profile->github}}" name="github"/>
                            <x-social-media-link url="{{$user->profile->tweeter}}" name="twitter"/>
                            <x-social-media-link url="{{$user->profile->instagram}}" name="instagram"/>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
