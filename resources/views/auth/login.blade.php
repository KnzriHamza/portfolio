<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Classic Login Form Example</title>
  <link href="https://fonts.googleapis.com/css?family=Assistant:400,700" rel="stylesheet">

<style>

body {
  background: #ABCDEF;
  font-family: Assistant, sans-serif;
  display: flex;
  min-height: 90vh;
}
.login {
  color: white;
  background: background: #136a8a;
  background: 
    -webkit-linear-gradient(to right, #267871, #136a8a);
  background: 
    linear-gradient(to right, #267871, #136a8a);
  margin: auto;
  box-shadow: 
    0px 2px 10px rgba(0,0,0,0.2), 
    0px 10px 20px rgba(0,0,0,0.3), 
    0px 30px 60px 1px rgba(0,0,0,0.5);
  border-radius: 8px;
  padding: 50px;
}
.login .head {
  display: flex;
  align-items: center;
  justify-content: center;
}
.login .head .company {
  font-size: 2.2em;
}
.login .msg {
  text-align: center;
}
.login .form input[type=text].text {
  border: none;
  background: none;
  box-shadow: 0px 2px 0px 0px white;
  width: 100%;
  color: white;
  font-size: 1em;
  outline: none;
}
.login .form .text::placeholder {
  color: #D3D3D3;
}
.login .form input[type=password].password {
  border: none;
  background: none;
  box-shadow: 0px 2px 0px 0px white;
  width: 100%;
  color: white;
  font-size: 1em;
  outline: none;
  margin-bottom: 20px;
  margin-top: 20px;
}
.login .form .password::placeholder {
  color: #D3D3D3;
}
.login .form .btn-login {
  background: none;
  text-decoration: none;
  color: white;
  box-shadow: 0px 0px 0px 2px white;
  border-radius: 3px;
  padding: 5px 2em;
  transition: 0.5s;
}
.login .form .btn-login:hover {
  background: white;
  color: dimgray;
  transition: 0.5s;
}
.login .forgot {
  text-decoration: none;
  color: white;
  float: right;
}
footer {
  position: absolute;
  color: #136a8a;
  bottom: 10px;
  padding-left: 20px;
}
footer p {
  display: inline;
}
footer a {
  color: green;
  text-decoration: none;
}
footer a:hover {
  text-decoration: underline;
}
footer .heart {
  color: #B22222;
  font-size: 1.5em
}
</style>

</head>
<body>
<!-- partial:index.partial.html -->
<section class='login' id='login'>
  <div class='head'>
  <h1 class='company'>Universe Explorer</h1>
  </div>
 @if (session('status'))
            <p class='msg'>{{ session('status') }}</p>

        @endif

  
  <div class='form'>
    
   

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <input name="email" type="text" value='admin@admin.com' class='text' id='email' required><br>

            <input name="password" type="password" value='12345678' class='password'><br>

            <div class="block mt-4">
                <label for="remember_me" class="flex items-center">
                    <input type='checkbox' id="remember_me" name="remember" />
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Remember me') }}</span>
                </label>
            </div>

            <div class="flex items-center justify-end mt-4">
                @if (Route::has('password.request'))
                    <a href="{{ route('password.request') }}" class='forgot'>{{ __('Forgot?') }}</a>
                @endif

                <input id='do-login' class='btn-login' type='submit' />
            </div>
        </form>
    
    
    
    <form>
 
  
  
    </form>
  </div>
</section>
<footer>
  <p>Made with <span class='heart'>&hearts;</span> by Bridges(<a href='https://github.com/pxntxs'>@pxntxs</a>)</p>
  <p>Gradient: <a href='https://uigradients.com/#Turquoiseflow'>https://uigradients.com/#Turquoiseflow</a></p>
</footer>
<!-- partial -->

</body>


<script>
    var btnLogin = document.getElementById('do-login');
    var idLogin = document.getElementById('login');
    var email = document.getElementById('email');
    
</script>
</html>

