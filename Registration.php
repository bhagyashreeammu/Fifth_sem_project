


<html>

<head>
    <title>Project for fifth sem</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <link rel="stylesheet" href="Reg.css">
    <center>
        <h1 style="font-size:40px"><i>Online Examination</i></h1>
    </center>

    <ul>
        <li><a href="home.html" class="fa fa-home" style="font-size:19px"></a></li>
        <li><a href="Registration.html">Registration</a></li>
        <li><a href="Login.html">Login</a></li>
        <li><a href="Course.html">Course</a></li>
        <li><a href="Instru.html">Exam Instructions</a></li>
        <div class="search">
            <li><a href="contact.html"><i class="fa fa-fw fa-envelope"></i> Contact us</a></li>
            <li><a href="#"><i class="  "></i> </a></li>
        </div>
    </ul>

    <br>

    <blockquote>

        <div class="col-lg-6 offset-md-2">
            <form method="POST" action="back.php" style="max-width:800px;margin:auto">
                <form action="Login.html">
                    <fieldset class="border p-2">
                        <legend class="w-auto">
                            <h2><strong>Registration Form</strong></h2>
                        </legend>

                        <div class="container">
                            <label style=color:black;>First name</label><br>
                            <input type="text" placeholder="Enter Fname" name="First_name" required>
                            <br><br>
                            <label style=color:black;>Last name</label><br>
                            <input type="text" placeholder="Enter Lname" name="Last_name" required>
                            <br><br>
                            <label style=color:black;>Mobile number</label><br>
                            <input type="text" placeholder="Enter Mobile number" name="mobile_number" size="50">
                            <br><br>
                            <label style=color:black;>Username</label><br>
                            <input type="text" placeholder="Enter Username" name="Username" required>
                            <br><br>
                            <label style=color:black;>Email address</label><br>
                            <input type="text" placeholder="Enter Email" name="Email_address" required>
                            <br><br>



                            <label style=color:black;>Password</label><br>
                            <input type="password" placeholder="Password" id="password" required><br>


                            <label style=color:black;>Confirm Password</label><br>
                            <input type="password" placeholder="Confirm Password" id="confirm_password" required>
                            <br>


                            <!--
                            <label style=color:black;>Password</label><br>
                            <input type="password" placeholder="Password" name="Password1" id=" password" required>
                            <br><br>
                            <label style=color:black;>Confirm Password</label><br>
                            <input type="password" placeholder="Confirm Password" name="confirm_password" id="confirm_password" required>
                            <br><br>
-->


                            <label for="birthday" style=color:black;>Date Of Birth<br>
                                <input type="date" placeholder="Eneter Date Of Birth" name="Date_Of_Birth" required>
                                <span id='message'></span>
                            </label>
                            <br><br>

                            <input type="checkbox" checked="checked" name="remember" required>I agree</label>
                            <br>


                            <button type="submit" id="Submit">Submit</button>


                            <!--
        <a href="/index.html" class="primary">Exit</a>
-->


    </blockquote>
    </fieldsets>

    </div>
    </form>
    </form>
    </div>

    <script src="Regist.js"></script>


    <script>
        var password = document.getElementById("password"),
            confirm_password = document.getElementById("confirm_password");

        function validatePassword() {
            if (password.value != confirm_password.value) {
                confirm_password.setCustomValidity("Passwords Don't Match");
            } else {
                confirm_password.setCustomValidity('');
            }
        }

        password.onchange = validatePassword;
        confirm_password.onkeyup = validatePassword;
    </script>


</body>

</html>