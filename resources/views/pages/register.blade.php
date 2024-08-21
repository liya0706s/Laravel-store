@extends('layouts.master')
@section('content')
    <section class="login-page">
        <div class="login-form-box">
            <div class="login-title">Register</div>
            <div class="login-form">
                <form action="" method="post">

                    <div class="field">
                        <label for="name">Name</label>
                        <input type="text" id="name" name="name" placeholder="Angie Lee">
                    </div>

                    <div class="field">
                        <label for="email">E-mail</label>
                        <input type="text" id="email" name="email" placeholder="Angie.Lee@gmail.com">
                    </div>

                    <div class="field">
                        <label for="password">Password</label>
                        <input type="text" id="password" name="password" placeholder="*******">
                    </div>

                    <div class="field">
                        <label for="password_confirmation">Confirm Password</label>
                        <input type="text" id="password_confirmation" name="password_confirmation" placeholder="*******">
                    </div>

                    <div class="field">
                        <button type="submit" class="btn btn-primary btn-black">Register</button>
                    </div>

                </form>
            </div>
        </div>
    </section>
@endsection