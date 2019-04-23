<?php
header('Content-type: text/css; charset: UTF-8');
?>
@charset "utf-8";

body {
    font-family: "Lato", sans-serif;
    transition: background-color .5s;
    background-image: url("Background.png");   
}
.logo{
    height:65%;
    width: 60%;
    margin-left: 21%;
}
.container img {
        margin: auto;
        float: none;
        display: block;
    }

h2{
    text-align: center;
    margin-bottom: 30px;
    color: white;
}
.buttonav {
    background-color: black; /* Green */
    border: none;
    color: #111;
    padding: 13px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
}
.container1{

border: 1px solid #c54;
    background-color: #eee;
    width : 50%;
    padding: 10px;
    margin-left: 25%;

}
.button1, .button2 {
    margin-top: 5%;
    margin-left: 44%;
    border-radius: 12px;
    list-style: none;
}
.link1 {
    text-decoration: none;
    color: white;
    }
.sidenav {
    height: 100%;
    width: 0;
    position: fixed;
    z-index: 1;
    top: 0;
    left: 0;
    background-image: url("Sidenav.png");
    overflow-x: hidden;
    transition: 0.5s;
    padding-top: 60px;
}
.sidenav a {
    padding: 8px 8px 8px 32px;
    text-decoration: none;
    font-size: 25px;
    color: #111;
    display: block;
    transition: 0.3s;
}

.sidenav a:hover {
    color: #f1f1f1;
}

.sidenav .closebtn {
    position: absolute;
    top: 0;
    right: 25px;
    font-size: 36px;
    margin-left: 50px;
}

#main {
    transition: margin-left .5s;
    padding: 16px;
}
input[type=text],input[type = password]{
    width:100%;
    padding: 14px 18px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
} 
button{
    background-color: #4ACF50;
    color: red;
    padding: 14px 18px;
    margin: 8px 0;
    cursor: pointer;
    width: 100%;
}
button:hover{
    opacity: 0.8;
}
.cancelbtn{
    width: auto;
    padding: 10px 18px;
    background-color: #f44336;
}
.imgcontainer{
    margin-left: 42%;
    position: relative;
}
img.avatar{
    width: 15%;
}
h1{
    text-align: center;
    margin-bottom: 70px;
    color: white;
}
span.psw{
    float: right;
    padding-top: 16px;
}
.modal{
    display: none;
    position: fixed;
    z-index: 1;
    left: 0;
    top:0;
    width: 100%;
    height: 100%;
    overflow: auto;
    background-color:rgb(15,30,30);
    
    padding-top: 60px;
}
.modal- content{
    background-color: #fefefe;
    margin: 5% auto 15% auto;
    border : 1px solid #888;
    width: 80%;
}
.close{
    position: absolute;
    right: 25px;
    top: 0;
    color: #000;
    font-size: 35px;
    font-weight: bold;
}
.close:hover,.close:focus{
    color: red;
    cursor: pointer;
}
.animated{
    -webkit-animation:animatezoom 0.6s;
    animation: animatezoom 0.6s;
}
@-webkit-keyframes animatezoom{
    from{-webkit-transform:scale(0)}
    to{transform:scale(1)}
}
@keyframes animatezoom{
    from{transform: scale(0)}
    to{transform: scale(1)}
}
#login{
margin-bottom:1%;
float: right;
}
.container {
    border: 1px solid #c54;
    background-color: #eee;
    margin: 4px 0;
    width : 40%;
    padding: 10px;
    margin-left: 25%;
    
}
.container::after{
    content:"";
    clear: both;
    display:table;
}
.container img{
    float: left;
    margin-right: 20px;
    border-radius: 50%;
}
.TextBox{
    border: 1px solid #c54;
    background-color: #eee;
    padding: 2px;
    width: 36%;
    margin-left: 30%;
    background-image: url("Background.png");
    background-blend-mode: multiply;
    
}
.footers{
 margin-left: 44%;
}
@media(max-width: 400px){
    .container{
        text-align: center;
    }
  
}
@media(max-width: 1050px){
    .container{
        text-align: center;
    }
  
}