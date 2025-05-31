
@extends('theme.master')

@section('title','register')

@section('content')
    <section class="section-margin--small section-margin">
        <div class="container">
        <div class="row">
            <div class="col-12">
                <form action="{{ route('register.post') }}" class="form-contact contact_form" method="post" novalidate="novalidate">
                    @csrf
                    <div class="row">
                        <div class="col-6">
                            <!-- Name -->
                            <div class="form-group">
                                <x-input-label for="name" :value="__('Name')" />
                                <input class="form-control border" name="name" id="name" type="text" placeholder="Enter your name" :value="old('name')">
                                <x-input-error :messages="$errors->get('name')" class="mt-2" />
                            </div>

                            <!-- Email -->
                            <div class="form-group">
                                <x-input-label for="email" :value="__('Email')" />
                                <input class="form-control border" name="email" id="email" type="email" placeholder="Enter email address">
                                <x-input-error :messages="$errors->get('email')" class="mt-2" />
                            </div>

                        </div>

                        <div class="col-6">
                            <!-- Password -->
                            <div class="form-group">
                                <x-input-label for="password" :value="__('Password')" />
                                <input class="form-control border" name="password" id="name" type="password" placeholder="Enter your password" required autocomplete="new-password" >
                                <x-input-error :messages="$errors->get('password')" class="mt-2" />
                            </div>


                            <!-- Confirm Password -->
                            <div class="form-group">
                                <x-input-label for="password_confirmation" :value="__('Confirm Password')" />
                                <input class="form-control border" name="password_confirmation" type="password" placeholder="Enter your password confirmation">
                                <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                            </div>
                        </div>

                    </div>
                    <div class="form-group text-center text-md-right mt-3">
                    <button type="submit" class="button button--active button-contactForm">Register</button>

                    <a href="{{ route('login') }}">already register ?</a>
                    </div>
                </form>
            </div>
        </div>
        </div>
  </section>
@endsection




