@extends('admin.dashboard')
@section('content')
    <div class="page-content">
        <div class="row">
            <div class="col-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h6 class="card-title">Change Password</h6>

                        <form class="forms-sample" action="{{ route('admin.changePass') }}" method="post">
                            @csrf
                            <div class="mb-3">
                                <label for="oldPass" class="form-label">Old Password</label>
                                <input type="password" class="form-control" id="oldPass" name="oldPass">
                                @error('oldPass')
                                <p style="color: red">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="newPass" class="form-label">New Password</label>
                                <input type="password" class="form-control" id="newPass" name="newPass">
                                @error('newPass')
                                <p style="color: red">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="confirmPass" class="form-label">Confirm Password</label>
                                <input type="password" class="form-control" id="confirmPass" name="confirmPass">
                                @error('confirmPass')
                                <p style="color: red">{{ $message }}</p>
                                @enderror
                            </div>

                            <button type="submit" class="btn btn-outline-primary me-2 w-rem-5">Submit</button>
                        </form>
                        <a href="{{ route('admin.profile') }}"><button class="btn btn-outline-secondary mt-2 w-rem-5">Back</button></a>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
