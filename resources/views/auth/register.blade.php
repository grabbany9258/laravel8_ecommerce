{{-- <x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
            <x-jet-authentication-card-logo />
        </x-slot>

        <x-jet-validation-errors class="mb-4" />

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <div>
                <x-jet-label for="name" value="{{ __('Name') }}" />
                <x-jet-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            </div>

            <div class="mt-4">
                <x-jet-label for="email" value="{{ __('Email') }}" />
                <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
            </div>

            <div class="mt-4">
                <x-jet-label for="password" value="{{ __('Password') }}" />
                <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
            </div>

            <div class="mt-4">
                <x-jet-label for="password_confirmation" value="{{ __('Confirm Password') }}" />
                <x-jet-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />
            </div>

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <x-jet-button class="ml-4">
                    {{ __('Register') }}
                </x-jet-button>
            </div>
        </form>
    </x-jet-authentication-card>
</x-guest-layout> --}}

{{-- Custom register form --}}

<x-guest-layout>

  <main id="main" class="main-site left-sidebar">

    <div class="container">

      <div class="wrap-breadcrumb">
        <ul>
          <li class="item-link"><a href="/" class="link">home</a></li>
          <li class="item-link"><span>Register</span></li>
        </ul>
      </div>
      <div class="row">
        <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12 col-md-offset-3">
          <div class=" main-content-area">
            <div class="wrap-login-item ">
              <div class="register-form form-item ">

                {{-- for validation --}}

                <x-jet-validation-errors class="mb-4" />

                <form class="form-stl" action="{{ route('register') }}" name="frm-login" method="post">
                  @csrf

                  <fieldset class="wrap-title">
                    <h2 class="text-center"><strong>Create an Account</strong></h2>
                  </fieldset>

                  <fieldset class="wrap-input">
                    <label for="frm-reg-lname">Name*</label>
                    <input type="text" id="frm-reg-lname" name="name":value="old('name')" placeholder="Enter Name"
                      required autofocus autocomplete="name">
                  </fieldset>

                  <fieldset class="wrap-input">
                    <label for="frm-reg-email">Email Address*</label>
                    <input type="email" id="frm-reg-email" name="email":value="old('email')"
                      placeholder="Email address" required>
                  </fieldset>

                  <fieldset class="wrap-input item-width-in-half left-item ">
                    <label for="frm-reg-pass">Password *</label>
                    <input type="password" id="frm-reg-pass" name="password" placeholder="Password" required
                      autocomplete="new-password">
                  </fieldset>

                  <fieldset class="wrap-input item-width-in-half ">
                    <label for="frm-reg-cfpass">Confirm Password *</label>
                    <input type="password" id="frm-reg-cfpass" name="password_confirmation"
                      placeholder="Confirm Password" required autocomplete="new-password">
                  </fieldset>

                  <input type="submit" class="btn btn-sign" value="Register" name="register">

                  <div class="my-2">
                    <span>Already a member? <a href="{{ route('login') }}"><strong>Login</strong></a></span>
                  </div>
                </form>
              </div>
            </div>
          </div>
          <!--end main products area-->
        </div>
      </div>
      <!--end row-->

    </div>
    <!--end container-->

  </main>

</x-guest-layout>
