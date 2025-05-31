@extends('theme.master')

@section('title','Login')

@section('content')
  <section class="section-margin--small section-margin">
    <div class="container">
      <div class="row">
        <div class="col-6 mx-auto">
          <form action="{{ route('login') }}" class="form-contact contact_form" action="contact_process.php" method="post" id="contactForm" novalidate="novalidate">
            @csrf
            <div class="form-group">
                <x-input-label for="email" :value="__('Email')" />
                <input class="form-control border" name="email" id="email" type="email" placeholder="Enter email address"  :value="old('email')" required autofocus autocomplete="username" >
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>


            <div class="form-group">
                <x-input-label for="password" :value="__('Password')" />
                <input class="form-control border" name="password" id="name" type="password" placeholder="Enter your password">
                <x-input-error :messages="$errors->get('password')" class="mt-2"  required autocomplete="current-password"/>


            </div>


            <div class="form-group text-center text-md-right mt-3">
              <button type="submit" class="button button--active button-contactForm">Login</button>
            </div>

          </form>
        </div>
      </div>
    </div>
  </section>
@endsection
