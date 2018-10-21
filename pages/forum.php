<!DOCTYPE html>
<html>
<head>
    <title>No Specific Product Yet</title>
    <link href="../css/style.css" rel="stylesheet" />
    <?php include_once "javascripts.html"; ?>
</head>
<body>
<?php include_once "header.html"; ?>
<div id="mainContainer">
    <?php include_once "navigator.html"; ?>
    <div id="contentContainer">
        <h5>>Forum</h5>
        <table id="tblForumLoginPage">
            <tr>
                <td valign="top">
                    <h3>Doesn't have an account yet? Create your account now!</h3>
                    <p>
                        <table>
                            <tr>
                                <td>First name</td>
                                <td>:</td>
                                <td><input type="text" name="firstname" required /></td>
                            </tr>
                            <tr>
                                <td>Last name</td>
                                <td>:</td>
                                <td><input type="text" name="lastname" required /></td>
                            </tr>
                            <tr>
                                <td>Address</td>
                                <td>:</td>
                                <td><input type="text" name="address" required /></td>
                            </tr>
                            <tr>
                                <td>Gender</td>
                                <td>:</td>
                                <td><input type="radio" name="gender" value="female" />female &nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="gender" value="male"/>male</td>
                            </tr>
                            <tr>
                                <td>Username</td>
                                <td>:</td>
                                <td><input type="text" name="username" required /></td>
                            </tr>
                            <tr>
                                <td>Password</td>
                                <td>:</td>
                                <td><input type="password" name="password" required /></td>
                            </tr>
                            <tr>
                                <td>Confirm Password</td>
                                <td>:</td>
                                <td><input type="password" name="cpassword" required /></td>
                            </tr>
                        </table>
                        <input type="button" id="btnRegister" value="submit" />
                    </p>
                </td>
                <td id="tdLogin" valign="top">
                    <!--<iframe src="imageSlide.html"></iframe>-->
                    <h3>Login here:</h3>
                    <p>
                        username:<br/>
                        <input type="text" name="usernameEntered" /><br />
                        password:<br />
                        <input type="password" name="passwordEntered" /><br />
                        <input type="button" value="login" id="btnLogin" />

                    </p>
                </td>
            </tr>
        </table>

    </div>
</div>
<div id="footer">
    Copyright 2016<br/>
    created by MGP group of herself<br />
    want a website for you own company?<br />
    email me at: <a href="http://google.mail.com"/>marejeanperpinosa@gmail.com</a>

</div>
</body>
</html>