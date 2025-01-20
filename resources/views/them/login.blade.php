@extends('them.master')
@section('title', 'Login')
@section('content')

    @include('them.partials.hero', ['title' => 'Login'])

    <!-- ================ contact section start ================= -->
    <section class="section-margin--small section-margin">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8 col-lg-6">
                    <div class="card shadow-lg border-0" style="background: linear-gradient(135deg, #f8f9fa, #e9ecef);">
                        <div class="card-body p-5">
                            <!-- نموذج تسجيل الدخول -->
                            <h2 class="text-center mb-4" style="color: #007bff; font-weight: bold;">Login</h2>
                            <form action="{{ route('login') }}" class="form-contact contact_form" method="post"
                                novalidate="novalidate">
                                @csrf

                                <!-- حقل البريد الإلكتروني -->
                                <div class="mb-4">
                                    <label for="email" class="form-label" style="color: #495057;">Email Address</label>
                                    <div class="input-group">
                                        <span class="input-group-text bg-primary text-white">
                                            <i class="fas fa-envelope"></i>
                                        </span>
                                        <input class="form-control" name="email" id="email" type="email"
                                            placeholder="Enter email address" value="{{ old('email') }}"
                                            style="border-color: #007bff;">
                                    </div>
                                    <x-input-error :messages="$errors->get('email')" class="mt-2 text-danger small" />
                                </div>

                                <!-- حقل كلمة المرور -->
                                <div class="mb-4">
                                    <label for="password" class="form-label" style="color: #495057;">Password</label>
                                    <div class="input-group">
                                        <span class="input-group-text bg-primary text-white">
                                            <i class="fas fa-lock"></i>
                                        </span>
                                        <input class="form-control" name="password" id="password" type="password"
                                            placeholder="Enter your password" style="border-color: #007bff;">
                                    </div>
                                    <x-input-error :messages="$errors->get('password')" class="mt-2 text-danger small" />
                                </div>

                                <!-- روابط وتسجيل الدخول -->
                                <div class="text-center mt-4">
                                    <p class="mb-3" style="color: #6c757d;">Don't have an account?
                                        <a href="{{ route('register') }}" class="text-decoration-none"
                                            style="color: #007bff;">Sign up instead</a>
                                    </p>
                                    <button type="submit" class="btn btn-primary btn-lg shadow-sm w-100"
                                        style="background-color: #007bff; border: none;">
                                        Login
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ================ contact section end ================= -->
@endsection
