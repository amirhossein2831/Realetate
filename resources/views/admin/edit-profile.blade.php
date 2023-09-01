@extends('admin.dashboard')
@section('content')
    <div class="page-content">
        <div class="row ">
            <div class="col-12 grid-margin">
                <div class="card">
                    <div class="card-body mt-3">
                        <h6 class="card-title">Profile Info</h6>
                        <form action="{{ route('admin.profile.update') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            @method('PATCH')
                            <div class="mb-3">
                                <label for="name" class="form-label">Name</label>
                                <input type="text" class="form-control" id="name" name="name" value="{{ $user->name }}">
                                @error('name')
                                <p style="color: red">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="username" class="form-label">Username</label>
                                <input type="text" class="form-control" id="username" name="username"
                                       value="{{ $user->username }}">
                                @error('username')
                                <p style="color: red">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="phone" class="form-label">Phone Number</label>
                                <input type="text" class="form-control" id="phone" name="phone"
                                       value="{{ $user->phone }}">
                                @error('phone')
                                <p style="color: red">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="address" class="form-label">Address</label>
                                <input type="text" class="form-control" id="address" name="address"
                                       value="{{ $user->profile->address }}">
                                @error('address')
                                <p style="color: red">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="about" class="form-label">About</label>
                                <textarea class="form-control" style="resize: none" id="about" name="about"
                                          rows="5">{{ $user->profile->about }}</textarea>
                                @error('about')
                                <p style="color: red">{{ $message }}</p>
                                @enderror
                            </div>

                            <p>Website</p>
                            <br>
                            <div>

                                <div class="mb-3 website">
                                    <label for="github" class="form-label site">Github: </label>
                                    <input type="text" class="form-control" id="github" name="github"
                                           value="{{ $user->profile->github }}">
                                </div>
                                @error('github')
                                <div class="mt-n3 mb-3">
                                    <p style="color: red">{{ $message }}</p>
                                </div>
                                @enderror
                            </div>

                            <div>
                                <div class="mb-3 website">
                                    <label for="tweeter" class="form-label site">Twitter: </label>
                                    <input type="text" class="form-control" id="tweeter" name="tweeter"
                                           value="{{ $user->profile->tweeter }}">
                                </div>
                                @error('tweeter')
                                <div class="mt-n3 mb-3">
                                    <p style="color: red">{{ $message }}</p>
                                </div>
                                @enderror
                            </div>

                            <div>
                                <div class="mb-3 website">
                                    <label for="instagram" class="form-label site">Instagram: </label>
                                    <input type="text" class="form-control" id="instagram" name="instagram"
                                           value="{{ $user->profile->instagram }}">
                                </div>
                                @error('instagram')
                                <div class="mt-n3 mb-3">
                                    <p style="color: red">{{ $message }}</p>
                                </div>
                                @enderror
                            </div>


                            <div class="mb-3 input-image">
                                @if(Storage::exists($user->profile->profile_image))
                                    <img class="rounded-circle images"
                                          src="{{ Storage::url($user->profile->profile_image) }}" alt="sdf" id="profile_image_none">
                                @else
                                    <img class="rounded-circle images" style="display: none" id="profile_image_none">
                                @endif
                                <div class="mb-2">
                                    <label class="form-label" for="profile_image">Profile Image</label>
                                    <input class="form-control" type="file" id="profile_image" name="profile_image"
                                           accept="image/*">
                                </div>
                                @error('profile_image')
                                <p style="color: red">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="mb-3 input-image">
                                @if(Storage::exists($user->profile->header_image))
                                    <img class="rounded-circle images"
                                         src="{{ Storage::url($user->profile->header_image) }}" alt="sdf"  id="header_image_none">
                                @else
                                    <img class="rounded-circle images" style="display: none" id="header_image_none">
                                @endif
                                <div class="mb-2">
                                    <label class="form-label" for="header_image">Header Image</label>
                                    <input class="form-control" type="file" id="header_image" name="header_image"
                                           accept="image/*">
                                </div>
                                @error('header_image')
                                <p style="color: red">{{ $message }}</p>
                                @enderror
                            </div>

                            <button class="btn btn-outline-primary mt-3" style="margin-left:1rem" type="submit">Update
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
