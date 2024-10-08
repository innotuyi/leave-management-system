@extends('Frontend.master')
@section('content')


<div class="item">
    <div class="container">
        <div class="login-card card">
            <div class="card-body">
                <h5 class="card-title">Login</h5>
                {{-- "{{ route('login') }}" --}}
                <form action="" method="POST">
                    @csrf
                    <div class="form-group">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-user"></i></span>
                            </div>
                            <input type="email" class="form-control" name="email" placeholder="Email" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-lock"></i></span>
                            </div>
                            <input type="password" class="form-control" name="password" placeholder="Password" required>
                        </div>
                    </div>
                    <div class="form-group text-center">
                        <button type="submit" class="btn btn-primary btn-block">Login</button>
                    </div>
                    <div class="form-group text-center">
                        <a href="#" class="text-secondary">Forgot Password?</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

</div>
<style>
 
    .login-card {
        max-width: 400px;
        margin: 50px auto;
        padding: 30px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }
    .login-card .card-title {
        margin-bottom: 30px;
        font-size: 24px;
        text-align: center;
        color: #054D6F;
    }
    .login-card .input-group-text {
        background-color: #054D6F;
        color: #fff;
    }
    .login-card .btn-primary {
        background-color: #054D6F;
        border: none;
    }
    .login-card .btn-primary:hover {
        background-color: #033c57;
    }
</style>
@endsection