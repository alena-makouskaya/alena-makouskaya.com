@extends('layouts.main')
@section('content')

<!-- Main -->
<main class="main">
    <div class="main-container">
        <!-- Main Header-->
        <header class="author-header">
            <h1 class="author-header__heading-01">Admin Registration</h1>
        </header>

        <!-- Main Content-->
        <div class="author">
            <form action="{{route('register')}}" method="POST" novalidate class="author-content">
                @csrf

                <div class="form-input">
                    <label for="" class="form-label">Name</label>
                    <input name="name" type="text" class="form-control" placeholder="Enter your name" value="{{old('name')}}" autofocus>
                </div>

                <div class="form-input">
                    <label for="" class="form-label">Email</label>
                    <input name="email" type="text" class="form-control" placeholder="Enter your email" value="{{old('name')}}">
                </div>


                <div class="form-input">
                    <label for="" class="form-label">Password</label>
                    <input name="password" type="password" class="form-control" placeholder="Enter your LogIn">
                </div>

                <div class="form-input">
                    <label for="" class="form-label">Password</label>
                    <input name="password_confirmation" type="text" class="form-control" placeholder="Enter your LogIn">
                </div>

                <div class="set-btns">
                    <button type="submit" class="btn btn-primary">Sign Up</button>
                    <a href="" class="header-menu__link">Log In</a>
                </div>

            </form>


        </div>

        </aside>
    </div>
    </div>

</main>

@endsection
