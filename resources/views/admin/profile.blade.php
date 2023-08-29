@extends('admin.dashboard')
@section('content')
    <div class="page-content">
        <div class="row">
            <div class="col-12 grid-margin">
                <div class="card">
                    <div class="position-relative">
                        <figure class="overflow-hidden mb-0 d-flex justify-content-center">
                            <img src="{{$user->profile->header_image}}" class="rounded-top" alt="profile cover">
                        </figure>
                        <div
                            class="d-flex justify-content-between align-items-center position-absolute top-90 w-100 px-2 px-md-4 mt-n4">
                            <div>
                                <img src="{{$user->profile->profile_image}}"
                                     alt="profile" class="wd-100 rounded-circle profile-image">
                                <span class="h4 ms-2 text-dark ">{{$user->name}}</span>
                            </div>
                            <div class="d-none d-md-block">
                                <button class="btn btn-primary btn-icon-text mb-4 border-transition edit br-8">
                                    <i data-feather="edit" class="btn-icon-prepend"></i> Edit profile
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="d-flex align-items-center justify-content-between mb-2">
                            <h6 class="card-title mb-0">About</h6>
                            <div class="dropdown">
                                <a type="button" id="dropdownMenuButton" data-bs-toggle="dropdown"
                                   aria-haspopup="true" aria-expanded="false">
                                    <i class="icon-lg text-muted pb-3px" data-feather="more-horizontal"></i>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <a class="dropdown-item d-flex align-items-center" href="javascript:;"><i
                                            data-feather="edit-2" class="icon-sm me-2"></i> <span
                                            class="">Edit</span></a>
                                    <a class="dropdown-item d-flex align-items-center" href="javascript:;"><i
                                            data-feather="git-branch" class="icon-sm me-2"></i> <span
                                            class="">Update</span></a>
                                    <a class="dropdown-item d-flex align-items-center" href="javascript:;"><i
                                            data-feather="eye" class="icon-sm me-2"></i> <span
                                            class="">View all</span></a>
                                </div>
                            </div>
                        </div>
                        <p>{{$user->profile->about}}</p>
                        <div class="mt-3">
                            <label class="tx-11 fw-bolder mb-0 text-uppercase">Joined:</label>
                            <p class="text-muted">{{$user->created_at->format('M d,Y')}}</p>
                        </div>
                        <div class="mt-3">
                            <label class="tx-11 fw-bolder mb-0 text-uppercase">Address:</label>
                            <p class="text-muted">{{$user->profile->address}}</p>
                        </div>
                        <div class="mt-3">
                            <label class="tx-11 fw-bolder mb-0 text-uppercase">Email:</label>
                            <p class="text-muted">{{$user->email}}</p>
                        </div>
                        <div class="mt-3">
                            <label class="tx-11 fw-bolder mb-0 text-uppercase">Website:</label>
                            @if($user->profile->github)
                                <p class="text-muted">{{$user->profile->github}}</p>
                            @endif
                            @if($user->profile->instagram)
                                <p class="text-muted">{{$user->profile->instagram}}</p>
                            @endif
                            @if($user->profile->tweeter)
                                <p class="text-muted">{{$user->profile->tweeter}}</p>
                            @endif
                        </div>
                        <div class="mt-3 d-flex social-links">
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
