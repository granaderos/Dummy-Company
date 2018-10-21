<!DOCTYPE html>
<html>
<head>
    <title>No Specific Product Yet</title>
    <link href="../css/style.css" rel="stylesheet" />
    <link href="../css/jquery-ui.min.css" rel="stylesheet" />
    <?php include_once "javascripts.html"; ?>
</head>
<body>
<?php include_once "header.html"; ?>
<div id="mainContainer">
    <?php include_once "navigator.html"; ?>
    <div id="contentContainer">
        <h5>>Contact Us</h5>
        <table>
            <tr>
                <td valign="top">
                    <h2>Contact us for more information!<br />We'll be delighted to entertain you!</h2>
                    <p>
                        Address:<br/>
                        #58 Maryland St. Cubao, Quezon City Philippines<br/><br/>
                        Mobile Number   : 000 - 1010 - 0110<br />
                        Telephone Number: 101 - 1100<br />
                        Email : <a href="google.gmail.com">voodoo.chains.info@gmail.com</a><br />
                        Facebook: <a href="https://www.facebook.com/IdontWantToThinkMuch">https://www.facebook.com/voodoo.chains</a><br />
                        Twitter:  <a href="https://www.twitter.com/IdontWantToThinkMuch">https://www.twitter.com/voodoo.chains</a><br />
                        <br /><br /><br /><br /><br />

                    </p>
                </td>
                <td valign="top" id="tdCUmap">
                    <!--<iframe src="imageSlide.html"></iframe>-->
                    <input type="button" onclick="CUSendMess()" value="Send us a message!" /><br/><br/>
                    <img src="../images/addressmap.jpg" width="600px" />
                    <div id="divCUSendMess" title="Contact Us">
                        Email: <input type="text" id="CUEmail" /><br />
                        Message: <textarea id="CUMessage"></textarea><br />
                        <input type="button" value="submit" />
                    </div>
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