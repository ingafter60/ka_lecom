@extends('admin.admin_layouts')

@section('admin_content')
  
  <!-- ==========LOGIN TEMPLATE========== -->
  <div class="d-flex align-items-center justify-content-center bg-sl-primary ht-100v">

    <!-- ========lOGIN WRAPPER======== -->
    <div class="login-wrapper wd-300 wd-xs-350 pd-25 pd-xs-40 bg-white">
      
      <!-- ========LOGIN LOGO/TITLE======== -->
      <div 
        class="signin-logo tx-center tx-24 tx-bold tx-inverse">
        <span style="color:#5B93D3;">ANJEL</span>
        <span class="tx-info tx-normal" 
          style="padding: 5px; 
                border: 1px solid #E95420; 
                font-weight: bold; 
                color: #E95420">ECOMMERCE</span>
      </div>
      <div class="tx-center mg-b-60">Professional Admin Template Design</div>
      <!-- ======== end LOGIN LOGO/TITLE======== -->      

      <!-- =========lOGIN FORM========= -->
      <form action="{{ route('admin.login') }}" method="POST">
        @csrf
        <!-- email input end error -->
        <div class="form-group">
          <input 
            type="email" 
            class="form-control @error('email') is-invalid @enderror" 
            name="email" 
            value="{{ old('email') }}" 
            required autocomplete="email" 
            autofocus placeholder="Email Address">
        </div><!-- form-group -->
        @error('email')
          <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
          </span>
        @enderror

        <!-- password input end error -->
        <div class="form-group">
          <input 
            type="password" 
            class="form-control @error('password') is-invalid @enderror" 
            name="password" 
            required autocomplete="current-password" 
            placeholder="Password">
          <a 
            href="{{ route('admin.password.request') }}" 
            class="tx-info tx-12 d-block mg-t-10">Forgot password?</a>
        </div><!-- form-group -->
        @error('password')
          <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
          </span>
        @enderror        

        <button 
          type="submit" 
          class="btn btn-info btn-block">Sign In</button>
      </form>
      <!-- =========end lOGIN FORM========= -->
    
    </div>
    <!-- ======== end lOGIN WRAPPER======== -->
  
  </div>
  <!-- ========== end LOGIN TEMPLATE========== -->
@endsection
