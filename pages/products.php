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
        <h5>>Products</h5>
        <table id="tblProducts">
            <tr>
                <td><span>Voodoo HUM0001<br />Php 30.00<br />available</span><br /><img src="../images/voodoo/00.jpg" /></td>
                <td><span>Voodoo OWL0010<br />Php 50.00<br />sold</span><br /><img src="../images/voodoo/01.jpg" /></td>
                <td><span>Voodoo KIT0011<br />Php 25.00<br />available</span><br /><img src="../images/voodoo/02.jpg" /></td>
            </tr>
            <tr>
                <td><span>Voodoo HUM0001<br />Php 30.00<br />available</span><br /><img src="../images/voodoo/03.jpg" /></td>
                <td><span>Voodoo OWL0010<br />Php 50.00<br />sold</span><br /><img src="../images/voodoo/04.jpg" /></td>
                <td><span>Voodoo KIT0011<br />Php 25.00<br />available</span><br /><img src="../images/voodoo/05.jpg" /></td>
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
<input type="hidden" id="currUsername" value=""/>
<div title="Confirmation:" id="divAddToCart">Add to Cart?</div>
</body>
</html>