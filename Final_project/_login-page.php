<!-- Login Page (START)-->
    <div class="upper-login" id="upperLogin">
        <div class="container" id="container">
            <div class="form-container sign-up-container">
                <form action='registerprocess.php' method="post">
                    <h1>Create Account</h1>
                    <input type="text" name="name" placeholder="Name">
                    <input type="email" name="email" placeholder="Email">
                    <input type="password" name="password" placeholder="Password">
                    <input type="hostelno" name="hostelno" placeholder="Hostel Number">
                    <button type="submit" name="submit">SignUp</button>
                </form>
            </div>
            <div class="form-container sign-in-container">
                <form action='loginProcess.php' method="post">
                    <h1>Sign In</h1>
                    <div class="social-container">
                        <a href="#" class="food_icon" onClick="return false;"><i class="fas fa-hamburger"></i></a>
                        <a href="#" class="food_icon" onClick="return false;"><i class="fas fa-ice-cream"></i></a>
                        <a href="#" class="food_icon" onClick="return false;"><i class="fas fa-pizza-slice"></i></a>
                    </div>
                    <span>use your account</span>
                    <input type="email" name="email" placeholder="Email">
                    <input type="password" name="password" placeholder="Password">

                    <button type="submit" name="submit">Sign In</button>
                </form>
            </div>
            <div class="overlay-container">
                <div class="overlay">
                    <div class="overlay-panel overlay-left">
                        <h1>Welcome Back!</h1>
                        <p>Login with your personal info and order food now</p>
                        <button class="ghost" id="signIn">Sign In</button>
                    </div>
                    <div class="overlay-panel overlay-right">
                        <h1>HUNGRY !</h1>
                        <p>Enter your details and order food now</p>
                        <button class="ghost" id="signUp">Sign Up</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Login Page (END)-->