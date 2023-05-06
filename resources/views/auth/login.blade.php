<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status :status="session('status')" />
    <!--begin::Wrapper-->
    <div class="w-lg-500px bg-body rounded shadow-sm p-10 p-lg-15 mx-auto">
    <!--begin::Form-->
    <form class="form w-100" novalidate="novalidate" id="kt_sign_in_form" method="POST" action="{{ route('login') }}">
        @csrf
        <!--begin::Heading-->
        <div class="text-center mb-10">
            <!--begin::Title-->
            <h1 class="text-dark mb-3">Авторизация</h1>
            <!--end::Title-->
            <!--begin::Link-->
            <!--
            <div class="text-gray-400 fw-bold fs-4">New Here?
            <a href="../../demo1/dist/authentication/layouts/basic/sign-up.html" class="link-primary fw-bolder">Create an Account</a></div>
            -->
            <!--end::Link-->
        </div>
        <!--begin::Heading-->
        <!--begin::Input group-->
		<div class="fv-row mb-10">
			<!--begin::Label-->
            <x-input-label for="email" :value="__('Email')" class="form-label fs-6 fw-bolder text-dark"/>
			<!--end::Label-->
			<!--begin::Input-->
            <x-text-input id="email" class="form-control form-control-lg form-control-solid" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
			<!--end::Input-->
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
		</div>
		<!--end::Input group-->

        <!--begin::Input group-->
		<div class="fv-row mb-10">
			<!--begin::Wrapper-->
			<div class="d-flex flex-stack mb-2">
				<!--begin::Label-->
                <x-input-label for="password" :value="__('Пароль')" class="form-label fw-bolder text-dark fs-6 mb-0"/>
				<!--end::Label-->
				<!--begin::Link-->
				@if (Route::has('password.request'))
                <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
                    {{ __('Забыли пароль?') }}
                </a>
                @endif
				<!--end::Link-->
			</div>
			<!--end::Wrapper-->
			<!--begin::Input-->
            <x-text-input id="password" class="form-control form-control-lg form-control-solid"
                            type="password"
                            name="password"
                            required autocomplete="current-password" />
			<!--end::Input-->
            <x-input-error :messages="$errors->get('password')" class="mt-2" />
		</div>
		<!--end::Input group-->

        <!-- Remember Me -->
        <div class="fv-row mb-10">
            <label for="remember_me" class="form-control form-control-lg form-control-solid">
                <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">
                <span class="ml-2 text-sm text-gray-600">{{ __('Запомнить меня') }}</span>
            </label>
        </div>

        <!--begin::Actions-->
		<div class="text-center">
			<!--begin::Submit button-->
			<x-primary-button type="submit" id="kt_sign_in_submit" class="btn btn-lg btn-primary w-100 mb-5">
				<span class="indicator-label">{{ __('Войти') }}</span>
				<span class="indicator-progress">Пожалуйста подождите...
				<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
			</x-primary-button>
        </div>
        <!--end::Actions-->
    </form>
    <!--end::Form-->
</div>
<!--end::Wrapper-->
</x-guest-layout>
