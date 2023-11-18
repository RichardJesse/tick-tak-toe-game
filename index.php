<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Home Page</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='mine.css'>
    <link href="https://fonts.googleapis.com/css2?family=Finger+Paint&family=Roboto:wght@300&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/91ef6306c9.js" crossorigin="anonymous"></script>

</head>
<body>
    <header>
        <h2 class="Tic">Tick-Tac-Toe</h2>
         <nav class="navigation">
            <a href="#">About</a>
            <a href="#">Sign up</a>
            <button class="btn">Login</button>
         </nav>
    </header>
     
     <div class="logs">
        <span class="ic"> <i class="fa-solid fa-xmark"></i></span>
        <div class= "form-box login">
         <h2>Login</h2>


        <form action="">
            <div class="inputbox">
            <i class="fa-solid fa-envelope fa-lg" ></i>
            <input type="email" name="email">
            <label>Email</label>
        </div>
        <div class="inputbox">
            <i class="fa-solid fa-lock fa-lg"></i>
            <input type="password" name="password">
            <label>Password</label>
            
        </div>
        <div class="remember">
            <label><input type="checkbox">Remember me</label>
        <a href="#">Forgot password?</a>
        </div>
        <button type="submit" class="butn">Login</button>
        <div class="register">
        <p>Don't have an account?<a href="#" class="register-link">Register</a></p>
       </div>
        

        </form>
    </div>
    <div class= "form-box register">
        <h2>Registration</h2>


       <form action="">
        <div class="inputbox">
            <i class="fa-solid fa-user"></i>
            <input type="text" name="username" required>
            <label>Username</label>
        </div>
           <div class="inputbox">
           <i class="fa-solid fa-envelope fa-lg" ></i>
           <input type="email" name="email" required>
           <label>Email</label>
       </div>
       <div class="inputbox">
           <i class="fa-solid fa-lock fa-lg"></i>
           <input type="password" name="password" required>
           <label>Password</label>
           
       </div>
       <div class="remember">
           <label><input type="checkbox">I agree to the terms & conditions</label>
       </div>
       <button type="submit" class="butn">Login</button>
       <div class="register">
       <p>Already have an account?<a href="#" class="login-link">Login</a></p>
      </div>
       

       </form>
   </div>
    
    </div>
<script>
    const logs = document.querySelector('.logs');
    const loginLink = document.querySelector('.login-link');
    const registerLink = document.querySelector('.register-link');
    const btnPopup = document.querySelector('.btn');
    const iconClose = document.querySelector('.ic');

registerLink.addEventListener('click', ()=> {
    logs.classList.add('active');
});
loginLink.addEventListener('click', ()=> {
    logs.classList.remove('active');
});
btnPopup.addEventListener('click', ()=> {
    logs.classList.add('active-popup');
});
iconClose.addEventListener('click', ()=> {
    logs.classList.remove('active-popup');
});
</script>
    

</body>
</html>