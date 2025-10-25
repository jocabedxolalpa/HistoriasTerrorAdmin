
<style>
    @import url(https://fonts.googleapis.com/css?family=Open+Sans:400,300,700,600);

* {
  padding:0;
  margin:0;
}

html, body {
  height: 100%;
  width: 100%;
  -webkit-font-smoothing: antialiased;
}

body {
  font-family: 'Open Sans', sans-serif;
  background: url(https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEhP508ceOhs-QxXHJMWpnYCEeGp3zlbKked-3jC-o43s8ThLO7KQ92CLA-hlq1AukyYi7b9L-_tuT5dVHhbKGEkG0d3AYzUfOiMIhTftGe7qpXlJidAEC68OTobdoDihgn5QvIZF-XYgANu/s1600/D%25C3%258DA-DE-LOS-MUERTOS.gif) center center;
  background-size: cover;
  overflow: hidden;
}

.wrapper {
  margin-top: 100px;
  perspective: 800px;
}

.boxes-wrapper {
  position: relative;
  height: 100%;
  width: 100%;
  perspective: 800px;
  
  .inner-table {
    display: table;
    width: 100%;
    height: 100%;
    
    .inner-cell {
      display:table-cell;
      text-align: center;
      vertical-align: middle;
      text-transform: uppercase;
    }
  }
  
  .loading-box {
    position: absolute;
    left:-280px;
    top:50%;
    margin-top: -50px;
    height: 100px;
    width: 280px;
    background: rgba(0,0,0,0.7);
    border-radius: 4px;
    font-size: 16px;
    font-weight: 400;
    color: white;
    
    -webkit-box-sizing: border-box;
    -moz-box-sizing: 	border-box;
    box-sizing: 		border-box;
    
    
    &.in-mid {
      left:50%;
      transition: all 0.3s;
      margin-left: -140px;
    }
    
    &.out-right {
      left: 100%;
      margin-left: 0;
    }
  }
  
  .login-box {
    position: absolute;
    left:50%;
    top:50%;
    margin-left: -140px;
    margin-top: -200px;
    width: 280px;
    height: 400px;
    background: rgba(0,0,0,0.7);
    border-radius: 4px;
    
    color: white;
    font-size: 14px;
    font-weight: 100;
    
    overflow: hidden;
    transform-style: preserve-3d;
    transition: all 0.3s;
    
    &.loading {
      transform: rotate3d(1,0,0,90deg);
      transform-origin: 50% 100%;
      pointer-events: none;
    }
   
    .header {
      font-size: 24px;
      text-transform: uppercase;
      text-align: center;
      padding: 60px 15px 30px 15px;
    }
    
    .content {
      padding: 0px 15px 15px 15px;
      .input-group {
        &:first-child {
          margin-bottom: 6px; 
        }
        
        &:last-child {
          margin-top: 25px;
        }
        
        label {
          display: block;
          width: 100%;
          padding: 6px 0px 6px 0px;
          -webkit-text-overflow: ellipsis;
					-moz-text-overflow: ellipsis;
					text-overflow: ellipsis;
          
					-webkit-box-sizing: border-box;
					-moz-box-sizing: 	border-box;
					box-sizing: 		border-box;
        }
        
        input {
          display: block;
          width: 100%;
          height: 37px;
          font-size: 14px;
          font-width: 400;
          padding-left: 15px;
          padding-right: 15px;
          line-height: 37px;
          
          outline: 0;
          
          border: none;
          color: #555555;
          
					-webkit-box-sizing: border-box;
					-moz-box-sizing: 	border-box;
					box-sizing: 		border-box;
          
          -webkit-appearance: none; /* Safari and Chrome */
          -moz-appearance: none; /* Firefox */
          appearance: none;
          
          transition: all 0.3s;
          
          &[type="submit"] {
            background: #3976A6;
            color: white;
            text-transform: uppercase;
            cursor: pointer;
            
            &:hover {
              background: darken(#3976A6, 5%);
            }
            
            &:active {
              background: darken(#3976A6, 10%);
            }
          }
          
          &::-webkit-input-placeholder { /* WebKit browsers */
						font-family: inherit;
						font-style: normal;
						font-weight: normal;
					  color: #A7A7A7;
					}
          
					&:-moz-placeholder { /* Mozilla Firefox 4 to 18 */
						font-family: inherit;
						font-style: inherit;
						font-weight: inherit;
					  color: #A7A7A7;
						opacity:  1;
					}
          
					&::-moz-placeholder { /* Mozilla Firefox 19+ */
						font-family: inherit;
						font-style: inherit;
						font-weight: inherit;
					  color: #A7A7A7;
						opacity:  1;
					}
          
					&:-ms-input-placeholder { /* Internet Explorer 10+ */
						font-family: inherit;
						font-style: inherit;
						font-weight: inherit;
					  color: #A7A7A7;
					}

					&:required {
					  box-shadow: none;
					}
          
					&:required:focus {
					  border: 0px;
					  outline: none;
					}

					&:required:hover {
					  opacity: 1;
					}
        }
      }
    }
    
    .footer-login, .footer-password {
      position: absolute;
      bottom:0;
      left:0;
      width:100%;
      
      .question {
        position: absolute;
        top:0;
        left:0;
        height: 100%;
        font-size: 12px;
        padding: 15px;
        text-align: center;
        transition: all 0.3s;
        width: 100%;
        z-index: 0;
        
        -webkit-box-sizing: border-box;
				-moz-box-sizing: 	border-box;
				box-sizing: 		border-box;
      }
      
      .button {
        position: relative;
        cursor: pointer;
        font-size: 16px;
        font-weight: 100;
        padding: 12px;
        text-align: center;
        text-transform: uppercase;
        background: #3976A6;
        transition: all 0.3s;
        transform: scale(0,0);
        z-index: 1;
        
        &:hover {
          background: darken(#3976A6, 5%);
        }

        &:active {
          background: darken(#3976A6, 10%);
        }
      }
      
      &:hover {
        .question {
          transform: scale(0,0);
        }
        .button {
          transform: scale(1,1);
        }
      }
    }
    
    .footer-password {
      display: none;
    }
    
    &.password-reset {
      margin-top: -160px;
      height: 320px;
      transform: rotateZ(720deg);
      
      &.loading {
        transform: rotateZ(720deg) rotate3d(1,0,0,90deg);
      }
      
      .password-group {
        display: none;
      }
      
      .footer-login {
        display: none;
      }
      
      .footer-password {
        display: block;
      }
    }
  }
}
</style>
<div id="boxes-wrapper" class="boxes-wrapper">
  <div class="error-box"></div>
  <div class="loading-box">
    <div class="inner-table">
      <div class="inner-cell">
        Doing my job ...
      </div>
    </div>
  </div>
  <div class="login-box">
    <div class="header">
      <span>Iniciar sesion</span>
    </div>
    <div class="content">
      <div class="input-group">
        <label>correo electronico</label>
        <input type="email" placeholder="max@example.com" required />
      </div>
      <div class="input-group password-group">
        <label>contraseña</label>
        <input type="password" placeholder="12345678" required />
      </div>
      <div class="input-group">
        <input type="submit" value="Login" />
      </div>
    </div>
    <div class="footer-password">
      <div class="question">
       Iniciar sesion
      </div>
      <div class="button back-login">
        Back to the Login
      </div>
    </div>
    <div class="footer-login">
      <div class="question">
        ¿olvidaste tu contraseña?
      </div>
      <div class="button request-password">
        request new password
      </div>
    </div>
  </div>
</div>
<script>

    (function(){
  
  // retrieve needed boxes and elements
  var wrapper         = document.getElementById('boxes-wrapper');
  var loginBox        = wrapper.querySelector('.login-box');
  var loadingBox      = wrapper.querySelector('.loading-box');
  var loadingBoxText  = loadingBox.querySelector('.inner-cell');
  var errorBox        = wrapper.querySelector('.error-box');
  var labelHeader     = loginBox.querySelector('.header span');
  var inputEmail      = loginBox.querySelector('input[type="email"]');
  var inputPassword   = loginBox.querySelector('input[type="password"]');
  var inputSubmit     = loginBox.querySelector('input[type="submit"]');
  var buttonPassword  = loginBox.querySelector('.request-password');
  var buttonLogin     = loginBox.querySelector('.back-login');
  var passwordGroup   = loginBox.querySelector('.password-group')
      
  // setup needed variables
  var active    = false;
  var startTime = null;
  var response  = null;
  var error     = null;
  
  var isRequestPassword = false;
      
  // setup needed functions
  function addClass(elm, name)
  {
    elm.className += ' ' + name;
  }
  
  function removeClass(elm, name)
  {
    elm.className = elm.className.replace(name, '').trim();
  }
  
  function hasClass(elm, name)
  {
    return (elm.className.search(name) !== -1);
  }
  
  function startLogin()
  {
    if  (active === true)
      return;
    
    active = true;
    startTime = new Date();
    response = null;
    error = null;
    
    // hide login box
    addClass(loginBox, 'loading');
    
    // waite for hidden login box and show loading view
    setTimeout(function(){
      addClass(loadingBox, 'in-mid');
      
      // waiting until request finished or finish
      
    }, 300);
    
    request(inputEmail.value, inputPassword.value);
  }
  
  function request(email, password) {
    var result = (email == 'max@example.com' && password == '12345678');
    setTimeout(function(){
      finished(null, result);
    }, 2000);
  }
  
  function finished(err, resp)
  {
    error     = err;
    response  = resp;
    
    // remove loading view and show login
    addClass(loadingBox, 'out-right');
    setTimeout(function() {      
      
      // go back to origin state
      removeClass(loadingBox, 'in-mid');
      removeClass(loadingBox, 'out-right');
      removeClass(loginBox, 'loading');
      removeClass(loginBox, 'password-reset');
      isRequestPassword = false;
      
      active = false;
      
    }, 300);
    
  }
  
  
  // initialize onclick event
  inputSubmit.addEventListener('click', function(e){
    e.preventDefault();
    startLogin();
    return false;
  });
  
  buttonPassword.addEventListener('click', function(e){
    addClass(loginBox, 'password-reset');
    inputSubmit.value = 'Restablecer contraseña';
    isRequestPassword = true;
  });
  
  buttonLogin.addEventListener('click', function(e){
    removeClass(loginBox, 'password-reset');
    inputSubmit.value = 'Login';
    isRequestPassword = false;
  });
  
})();
</script>