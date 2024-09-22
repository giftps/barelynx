{include file='_head.tpl'}
{include file='_header.tpl'}

<div class="container-fluid">
  <div>
    <h2 class="auth-title">Log in to access your account</h2>
    <div class="container" id="container">
      <div class="form-container sign-up-container">
        <form class="auth-form" action="#">
          <h1>Create Account</h1>
          <div class="social-container">
            <a href="#" class="social auth-link"><i class="fab fa-facebook-f"></i></a>
            <a href="#" class="social auth-link"><i class="fab fa-google-plus-g"></i></a>
            <a href="#" class="social auth-link"><i class="fab fa-linkedin-in"></i></a>
          </div>
          <span class="auth-span">or use your email for registration</span>
          <input class="auth-input" type="text" placeholder="Name" />
          <input class="auth-input" type="email" placeholder="Email" />
          <input class="auth-input" type="password" placeholder="Password" />
          <button class="auth-button">Sign Up</button>
        </form>
      </div>
      <div class="form-container sign-in-container">
        <form class="auth-form" action="#">
          <h1>Sign in</h1>
          <div class="social-container">
            <a href="#" class="social auth-link"><i class="fab fa-facebook-f"></i></a>
            <a href="#" class="social auth-link"><i class="fab fa-google-plus-g"></i></a>
            <a href="#" class="social auth-link"><i class="fab fa-linkedin-in"></i></a>
          </div>
          <span class="auth-span">or use your account</span>
          <input class="auth-input" type="email" placeholder="Email" />
          <input class="auth-input" type="password" placeholder="Password" />
          <a class="auth-link" href="#">Forgot your password?</a>
          <button class="auth-button">Sign In</button>
        </form>
      </div>
      <div class="overlay-container">
        <div class="overlay">
          <div class="overlay-panel overlay-left">
            <h1>Welcome Back!</h1>
            <p class="auth-text">To keep connected with us please login with your personal info</p>
            <button class="ghost auth-button" id="signIn">Sign In</button>
          </div>
          <div class="overlay-panel overlay-right">
            <h1>Hello, Friend!</h1>
            <p class="auth-text">Enter your personal details and start journey with us</p>
            <button class="ghost auth-button" id="signUp">Sign Up</button>
          </div>
        </div>
      </div>
    </div>
    
    <footer>
      <p class="auth-text">
        Created with <i class="fa fa-heart"></i> by
        <a target="_blank" class="auth-link" href="https://florin-pop.com">Florin Pop</a>
        - Read how I created this and how you can join the challenge
        <a target="_blank" class="auth-link" href="https://www.florin-pop.com/blog/2019/03/double-slider-sign-in-up-form/">here</a>.
      </p>
    </footer>
  </div>
  <script>
    const signUpButton = document.getElementById("signUp");
    const signInButton = document.getElementById("signIn");
    const container = document.getElementById("container");
    
    signUpButton.addEventListener("click", () => {
      container.classList.add("right-panel-active");
    });
    
    signInButton.addEventListener("click", () => {
      container.classList.remove("right-panel-active");
    });
    
  </script>
</div>

{include file='_footer.tpl'}