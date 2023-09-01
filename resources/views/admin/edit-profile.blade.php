@extends('admin.dashboard')
@section('content')
    <div class="page-content">
        <style>
            /* CSS */
            .website {
                display: flex;
                align-items: center;
                margin-bottom: 10px;
            }

            .input-image {
                display: flex;
                align-items: center;
                margin-bottom: 10px;
            }

            .site {
                width: 5rem;
                margin-right: 1rem;
            }

            .images {
                width: 100px;
                height: 100px;
                margin-right: 1rem
            }
        </style>
        <div class="row ">
            <div class="col-12 grid-margin">
                <div class="card">
                    <div class="card-body">
                        <h6 class="card-title">Profile Info</h6>
                        <form>
                            <div class="mb-3">
                                <label for="name" class="form-label">Name</label>
                                <input type="text" class="form-control" id="name" name="name" value=""
                                       placeholder="AmirHossein Motaghian">
                            </div>

                            <div class="mb-3">
                                <label for="username" class="form-label">Username</label>
                                <input type="text" class="form-control" id="username" name="username" value=""
                                       placeholder="admin">
                            </div>

                            <div class="mb-3">
                                <label for="phone" class="form-label">Phone Number</label>
                                <input type="text" class="form-control" id="phone" name="phone" value=""
                                       placeholder="9931912463">
                            </div>

                            <div class="mb-3">
                                <label for="address" class="form-label">Address</label>
                                <input type="text" class="form-control" id="address" name="address"
                                       placeholder="Enter Your Name">
                            </div>

                            <div class="mb-3">
                                <label for="about" class="form-label">About</label>
                                <textarea class="form-control" style="resize: none" id="about" name="about"
                                          rows="5"></textarea>
                            </div>

                            <p>Website</p>
                            <br>
                            <div class="mb-3 website">
                                <label for="github" class="form-label site" style="display: inline">Github: </label>
                                <input type="text" class="form-control" id="github" name="github" value="">
                            </div>
                            <div class="mb-3 website">
                                <label for="tweeter" class="form-label site">Twitter: </label>
                                <input type="text" class="form-control" id="tweeter" name="tweeter" value="">
                            </div>

                            <div class="mb-3 website">
                                <label for="instagram" class="form-label site">Instagram: </label>
                                <input type="text" class="form-control" id="instagram" name="instagram" value="">
                            </div>

                            <div class="mb-3 input-image">
                                <img class="rounded-circle images"
                                     src="https://via.placeholder.com/400x300.png/00dd11?text=people+aut" alt="sdf">
                                <div class="mb-2">
                                    <label class="form-label" for="profile_image">Profile Image</label>
                                    <input class="form-control" type="file" id="profile_image" name="profile_image">
                                </div>
                            </div>
                            <div class="mb-3 input-image">
                                <img class="rounded-circle images"
                                     src="https://via.placeholder.com/1560x370.png/00cc11?text=nature+velit" alt="ss">
                                <div class="mb-2">
                                    <label class="form-label" for="header_image">Header Image</label>
                                    <input class="form-control" type="file" id="header_image" name="header_image">
                                </div>
                            </div>

                            <button class="btn btn-outline-primary" type="submit">Submit form</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
