@extends('them.master')
@section('title', 'Register')
@section('content')

    @include('them.partials.hero', ['title' => 'Register'])
    <section class="section-margin--small section-margin">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-10 col-lg-8">
                    <div class="card shadow-lg border-0" style="background: linear-gradient(135deg, #f8f9fa, #e9ecef);">
                        <div class="card-body p-5">
                            <!-- العنوان -->
                            <h2 class="card-title text-center mb-4" style="color: #007bff; font-weight: bold;">Create Your
                                Account</h2>

                            <!-- النموذج -->
                            <form action="{{ route('register.post') }}" method="post" novalidate="novalidate">
                                @csrf

                                <!-- حقل الاسم -->
                                <div class="mb-4">
                                    <label for="name" class="form-label" style="color: #495057;">Full Name</label>
                                    <div class="input-group">
                                        <span class="input-group-text bg-primary text-white">
                                            <i class="fas fa-user"></i>
                                        </span>
                                        <input class="form-control" name="name" id="name" type="text"
                                            placeholder="Enter your name" value="{{ old('name') }}"
                                            style="border-color: #007bff;">
                                    </div>
                                    <x-input-error :messages="$errors->get('name')" class="mt-2 text-danger small" />
                                </div>

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

                                <!-- حقل تأكيد كلمة المرور -->
                                <div class="mb-5">
                                    <label for="password_confirmation" class="form-label" style="color: #495057;">Confirm
                                        Password</label>
                                    <div class="input-group">
                                        <span class="input-group-text bg-primary text-white">
                                            <i class="fas fa-lock"></i>
                                        </span>
                                        <input class="form-control" name="password_confirmation" id="password_confirmation"
                                            type="password" placeholder="Confirm your password"
                                            style="border-color: #007bff;">
                                    </div>
                                    <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2 text-danger small" />
                                </div>

                                <!-- زر التسجيل -->
                                <div class="d-grid gap-2">
                                    <button type="submit" class="btn btn-primary btn-lg shadow-sm"
                                        style="background-color: #007bff; border: none;">
                                        Register
                                    </button>
                                </div>

                                <!-- رابط تسجيل الدخول -->
                                <div class="text-center mt-4">
                                    <p class="mb-0" style="color: #6c757d;">Already Registered?
                                        <a href="{{ route('login') }}" class="text-decoration-none"
                                            style="color: #007bff;">Login Here</a>
                                    </p>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
