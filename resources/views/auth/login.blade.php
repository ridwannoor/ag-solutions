<!DOCTYPE html>
<!-- 
Template Name: Metronic - Responsive Admin Dashboard Template build with Twitter Bootstrap 4
Author: KeenThemes
Website: http://www.keenthemes.com/
Contact: support@keenthemes.com
Follow: www.twitter.com/keenthemes
Dribbble: www.dribbble.com/keenthemes
Like: www.facebook.com/keenthemes
Purchase: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes
Renew Support: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes
License: You must have a valid license purchased only from themeforest(the above link) in order to legally use the theme for your project.
-->
<html lang="en" >
    <!-- begin::Head -->
    
<!-- Mirrored from keenthemes.com/metronic/preview/?page=snippets/pages/user/login-3&demo=default by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 16 Mar 2019 09:53:05 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
        <meta charset="utf-8" />
        
        <title>{{ $generals->title . " | " . $judul }}</title>
        <meta name="description" content="Latest updates and statistic charts"> 
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">

        <!--begin::Web font -->
        <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.16/webfont.js"></script>
        <script>
          WebFont.load({
            google: {"families":["Poppins:300,400,500,600,700","Roboto:300,400,500,600,700"]},
            active: function() {
                sessionStorage.fonts = true;
            }
          });
        </script>
        <!--end::Web font -->

        <!--begin::Global Theme Styles -->
                    <link href="{{ asset('back/assets/vendors/base/vendors.bundle.css') }}" rel="stylesheet" type="text/css" />
                    <link href="{{ asset('back/assets/demo/default/base/style.bundle.css') }}" rel="stylesheet" type="text/css" />
                <!--end::Global Theme Styles -->

        
        
        
        <link rel="shortcut icon" href="{{ asset('back/assets/demo/default/media/img/logo/favicon.ico') }}" />
    </head>
    <!-- end::Head -->

    
    <!-- begin::Body -->
    <body  class="m--skin- m-header--fixed m-header--fixed-mobile m-aside-left--enabled m-aside-left--skin-dark m-aside-left--fixed m-aside-left--offcanvas m-footer--push m-aside--offcanvas-default"  >

        
        
    	<!-- begin:: Page -->
<div class="m-grid m-grid--hor m-grid--root m-page">
    
			
				<div class="m-grid__item m-grid__item--fluid m-grid m-grid--hor m-login m-login--signin m-login--2 m-login-2--skin-2" id="m_login" style="background-image: url({{ asset('') }}back/assets/app/media/img/bg/bg-3.jpg);">
	<div class="m-grid__item m-grid__item--fluid m-login__wrapper">
		<div class="m-login__container">
			<div class="m-login__logo">
				<a href="#">
				<img src="{{ url('data_file/'.$generals->image) }}" width="200px">   	
				</a>
			</div>
			<div class="m-login__signin">
				{{-- <div class="m-login__head">
					<h3 class="m-login__title">Sign In To Admin</h3>
				</div> --}}
				<form class="m-login__form m-form" method="POST" action="{{ route('login') }}">
					@csrf
					<div class="form-group m-form__group">
						<input class="form-control m-input" type="text" placeholder="Email" name="email" autocomplete="email">
					</div>
					<div class="form-group m-form__group">
						<input class="form-control m-input " type="password" placeholder="Password" name="password">
					</div>
					<div class="row m-login__form-sub">
						<div class="col m--align-left m-login__form-left">
							<label class="m-checkbox  m-checkbox--focus">
							<input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}> Remember me
							<span></span>
							</label>
						</div>
						{{-- <div class="col m--align-right m-login__form-right">
							<a href="javascript:;" id="m_login_forget_password" class="m-link">Forget Password ?</a>
						</div> --}}
					</div>
					<div class="m-login__form-action">
						<button type="submit" class="btn btn-focus m-btn m-btn--pill m-btn--custom m-btn--air m-login__btn m-login__btn--primary">Sign In</button>
					</div>
				</form>
			</div>
			{{-- <div class="m-login__signup">
				<div class="m-login__head">
					<h3 class="m-login__title">Sign Up</h3>
					<div class="m-login__desc">Enter your details to create your account:</div>
				</div>
				<form class="m-login__form m-form" action="#">
					<div class="form-group m-form__group">
						<input class="form-control m-input" type="text" placeholder="Fullname" name="fullname" >
					</div>
					<div class="form-group m-form__group">
						<input class="form-control m-input" type="text" placeholder="Email" name="email" autocomplete="off">
					</div>
					<div class="form-group m-form__group">
						<input class="form-control m-input" type="password" placeholder="Password" name="password">
					</div>
					<div class="form-group m-form__group">
						<input class="form-control m-input m-login__form-input--last" type="password" placeholder="Confirm Password" name="rpassword">
					</div>
					<div class="row form-group m-form__group m-login__form-sub">
						<div class="col m--align-left">
							<label class="m-checkbox m-checkbox--focus">
							<input type="checkbox" name="agree">I Agree the <a href="#" class="m-link m-link--focus">terms and conditions</a>.
							<span></span>
							</label>
							<span class="m-form__help"></span>
						</div>
					</div>
					<div class="m-login__form-action">
						<button id="m_login_signup_submit" class="btn btn-focus m-btn m-btn--pill m-btn--custom m-btn--air  m-login__btn">Sign Up</button>&nbsp;&nbsp;
						<button id="m_login_signup_cancel" class="btn btn-outline-focus m-btn m-btn--pill m-btn--custom  m-login__btn">Cancel</button>
					</div>
				</form>
			</div> --}}
			{{-- <div class="m-login__forget-password">
				<div class="m-login__head">
					<h3 class="m-login__title">Forgotten Password ?</h3>
					<div class="m-login__desc">Enter your email to reset your password:</div>
				</div>
				<form class="m-login__form m-form" action="#">
					<div class="form-group m-form__group">
						<input class="form-control m-input" type="text" placeholder="Email" name="email" id="m_email" autocomplete="off">
					</div>
					<div class="m-login__form-action">
						<button id="m_login_forget_password_submit" class="btn btn-focus m-btn m-btn--pill m-btn--custom m-btn--air  m-login__btn m-login__btn--primaryr">Request</button>&nbsp;&nbsp;
						<button id="m_login_forget_password_cancel" class="btn btn-outline-focus m-btn m-btn--pill m-btn--custom m-login__btn">Cancel</button>
					</div>
				</form>
			</div> --}}
			{{-- <div class="m-login__account">
				<span class="m-login__account-msg">
				Don't have an account yet ?
				</span>&nbsp;&nbsp;
				<a href="javascript:;" id="m_login_signup" class="m-link m-link--light m-login__account-link">Sign Up</a>
			</div> --}}
		</div>	
	</div>
</div>				
		

</div>
<!-- end:: Page -->


        <!--begin::Global Theme Bundle -->
                    <script src="{{ asset('back/assets/vendors/base/vendors.bundle.js') }}" type="text/javascript"></script>
                    <script src="{{ asset('back/assets/demo/default/base/scripts.bundle.js') }}" type="text/javascript"></script>
                <!--end::Global Theme Bundle -->

        
                    <!--begin::Page Scripts -->
                            <script src="{{ asset('back/assets/snippets/custom/pages/user/login.js') }}" type="text/javascript"></script>
                        <!--end::Page Scripts -->
        
                    </body>
    <!-- end::Body -->

<!-- Mirrored from keenthemes.com/metronic/preview/?page=snippets/pages/user/login-3&demo=default by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 16 Mar 2019 09:53:26 GMT -->
</html>