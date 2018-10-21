$(document).ready(function() {

    displayProducts();
    $("#divCUSendMess").dialog({
        autoOpen: false,
        modal: true,
        show: "clip",
        hide: "clip"
    });
    $("#divAddToCart").dialog({
        autoOpen: false,
        modal: true,
        show: "clip",
        hide: "clip",
        buttons: {
            "Yes": function() {
                var username = $("#currUsername").val();
                if(username == "") {
                    alert("You must log-in first!\n Go to My Cart page.");
                    $("#divAddToCart").dialog("close");
                }
            },
            "No": function() {
                $("#divAddToCart").dialog("close");
            }
        }
    });

    $("#navDiv ul li #prodA").hover(function() {
        //alert($("#prodSumMenu").html());
       $("#navDiv ul li #prodA #prodSumMenu").css("visibility: visible");
    });

    $("#navDiv ul li").click(function(e) {
    });

    $("#btnRegister").click(function() {
        $.ajax({
            type: "POST",
            url: "../server/obj/addUser.php",
            data: {"fname": $("input[name='firstname']").val(),
                   "lname": $("input[name='lastname']").val(),
                   "address": $("input[name='address']").val(),
                   "gender": $("input[name='gender']").val(),
                   "username": $("input[name='username']").val(),
                   "password": $("input[name='password']").val(),
                   "cpassword": $("input[name='cpassword']").val()},
            success: function(data) {

            },
            error: function(data) {
                console.log(JSON.stringify(data));
            }
        })
    })
})

function CUSendMess() {
    $("#divCUSendMess").dialog("open");
}

function displayProducts() {
    $.ajax({
        type: "POST",
        url: "../server/obj/displayProducts.php",
        success: function(data) {
            $("#tblProducts").html(data);
        },
        error: function(data) {
            console.log("displayiing products error : " + JSON.stringify(data));
        }
    })
}

function addToCart(id) {
    $("#divAddToCart").dialog("open");
}