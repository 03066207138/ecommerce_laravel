@extends("layout")

@section("content")

<div class="container custom-login mt-5">
    <div class="row justify-content-center">
        <div class="col-sm-6 col-md-4">

            {{-- Display error from session --}}
            @if(session('error'))
                <div class="alert alert-danger">
                    {{ session('error') }}
                </div>
            @endif

            <form action="login" method="POST">
                @csrf

                <div class="form-group mb-3">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email" name="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email" required>
                </div>

                <div class="form-group mb-3">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password" required>
                </div>

                <button class="btn btn-primary w-100" type="submit">
                    Login
                </button>
            </form>
        </div>
    </div>
</div>

@endsection
