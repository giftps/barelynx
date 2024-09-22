<?php
/* Smarty version 4.3.4, created on 2024-09-22 15:47:52
  from '/Applications/XAMPP/xamppfiles/htdocs/barelynx/content/themes/default/templates/index.landing.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_66f03c28320701_12615596',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '31a222841bcba130d8ea037912d259be6dd5ac5f' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/barelynx/content/themes/default/templates/index.landing.tpl',
      1 => 1727020068,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:_head.tpl' => 1,
    'file:_header.tpl' => 1,
    'file:_footer.tpl' => 1,
  ),
),false)) {
function content_66f03c28320701_12615596 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:_head.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender('file:_header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="auth-container-fluid">
  <div>
    <div class="auth-error-container">
      <?php if ((isset($_smarty_tpl->tpl_vars['highlight']->value))) {?><div class="alert alert-warning"><?php echo $_smarty_tpl->tpl_vars['highlight']->value;?>
</div><?php }?>
    </div>
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
        <form class="auth-form js_ajax-forms" data-url="core/signin.php" method="POST">
          <h4 class="card-title"><?php echo __("Sign In to your Account");?>
</h4>
          <p><?php echo __("Welcome back! please enter your detail");?>
</p>
          <div class="social-container">
            <a href="#" class="social auth-link"><i class="fab fa-facebook-f"></i></a>
            <a href="#" class="social auth-link"><i class="fab fa-google-plus-g"></i></a>
            <a href="#" class="social auth-link"><i class="fab fa-linkedin-in"></i></a>
          </div>
          <span class="auth-span">or use your account</span>
          <input class="auth-input"  placeholder='<?php echo __("Email");?>
 <?php echo __("or");?>
 <?php echo __("Username");?>
' name="username_email" required />
          <input class="auth-input" type="password" placeholder='<?php echo __("Password");?>
' name="password" required />
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
  <?php echo '<script'; ?>
>
    const signUpButton = document.getElementById("signUp");
    const signInButton = document.getElementById("signIn");
    const container = document.getElementById("container");
    
    signUpButton.addEventListener("click", () => {
      container.classList.add("right-panel-active");
    });
    
    signInButton.addEventListener("click", () => {
      container.classList.remove("right-panel-active");
    });
    
  <?php echo '</script'; ?>
>
</div>

<?php $_smarty_tpl->_subTemplateRender('file:_footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
