@extends('welcome')
@section('contact')
    <div class="w-100 vh-100 d-flex justify-content-center align-items-center">
        <div class="container-wrapper">
            <div class="w-80 d-flex align-items-center justify-content-center py-4">
                <form action="{{ route('auth.Login') }}" method="POST" class="d-flex col-md-8 flex-column border border-3 forms border-secondary">
                    @csrf
                    <h2>Login</h2>
                    <div class="d-flex flex-column mb-3">
                        <label for="email" class="mb-2">Email</label>
                        <input type="text" id="email" name="email" class="rounded border border-1 px-3 py-2"
                            placeholder="Your Email(example@gmail.com)" />
                    </div>
                    <div class="d-flex flex-column mb-3">
                        <label for="password" class="mb-2 label-txt">Password</label>
                        <input type="password" id="password" name="password" class="rounded border border-1 px-3 py-2"
                            placeholder="Password" />
                    </div>
                    <button class="w-auto border-0 fit-content px-3 py-2 bg-secondary text-light rounded">
                        Login
                    </button>
                </form>
            </div>
        </div>
    </div>
@endsection
