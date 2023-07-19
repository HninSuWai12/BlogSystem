@extends('welcome')
@section('contact')
    <div class="vh-100 w-100 d-flex justify-content-center align-items-center">
        < <div class="container-wrapper">
            <div class="w-80 d-flex align-items-center justify-content-center py-4">
                <form action="{{ route('register.registerUser') }}"
                    class="d-flex col-md-8 flex-column border border-3 forms border-secondary" method="POST">
                    @csrf
                    <h2>Sign Up</h2>
                    <div class="row">
                        <div class="col-md-6 mb-4">
                            <div class="form-outline">
                                <label class="form-label" for="form3Example1m" style="font-size: 1em">Name</label>
                                <input type="text" name="name" id="form3Example1m" class="form-control"
                                    placeholder="Your Name" />
                            </div>

                            @error('name')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror

                        </div>
                        <div class="col-md-6 mb-4">
                            <div class="form-outline">
                                <label class="form-label" for="form3Example1n" style="font-size: 1em">Email</label>
                                <input type="email" name="email" id="form3Example1n" class="form-control"
                                    placeholder="Your Email(example@gmail.com)" />
                            </div>
                            @error('email')
            <span class="text-danger">{{ $message }}</span>
        @enderror
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 mb-4">
                            <div class="form-outline">
                                <label class="form-label" for="form3Example1m" style="font-size: 1em">Password</label>
                                <input type="text" name="password" id="form3Example1m" class="form-control"
                                    placeholder="Password" />
                            </div>
                            @error('password')
            <span class="text-danger">{{ $message }}</span>
        @enderror
                        </div>
                        <div class="col-md-6 mb-4">
                            <div class="form-outline">
                                <label class="form-label" for="form3Example1n" style="font-size: 1em">Confirm
                                    Password</label>
                                <input type="text" name="confirmPassword" id="form3Example1n" class="form-control"
                                    placeholder="Confirm Password" />
                            </div>
                            @error('confirmPassword')
            <span class="text-danger">{{ $message }}</span>
        @enderror
                        </div>
                    </div>
                    <div class="d-flex flex-column mb-3">
                        <label for="bio" style="font-size: 1em" class="mb-2">Bio</label>
                        <input type="text" name="bio" id="bio" name="bio"
                            class="rounded border border-1 px-3 py-2" placeholder="Your Bio" />
                            @error('bio')
            <span class="text-danger">{{ $message }}</span>
        @enderror
                    </div>
                    <button type="submit" class="w-auto border-0 fit-content px-3 py-2 bg-secondary text-light rounded">
                        SignUp
                    </button>
                </form>
            </div>
    </div>
    </div>
@endsection
