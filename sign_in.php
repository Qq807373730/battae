<?php
/**
 * Created by PhpStorm.
 * User: mac
 * Date: 11/5/2018
 * Time: 2:20 PM
 */?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>logn lnterface</title>
    <style>
        input{outline:none;}
        .a_1{ width:500px; heigth:200px; margin:200px 57% 0 43%;}
        h1{ margin: 0 0 20px 85px;}
        .a_2{ border: darkgray 1px solid; border-radius: 5px; width: 200px; height: 25px;}
    </style>
</head>
<body>
<div class="a_1">
    <h1>LOGN</h1>
    <form>
        账号:&nbsp;<input id="admin_name" class="a_2" type="text"  placeholder="  Please input administrator account."><br/>
       <br/> 密码:&nbsp;<input id="admin_password" class="a_2" type="password" placeholder="  Please input a password"><br/><br/>
        <input  id="c1" type="button" value="Submission">
    </form>
<script>
   /* var admin_name=document.getElementById("admin_name");
    var admin_password=document.getElementById("admin_password");
    admin_name.onmouseover=function () {
        this.style.border="red 2px solid";
    };
    admin_password.onmouseover=function () {
        this.style.border="red 2px solid";
    };
    admin_name.onmouseout=function () {
        this.style.border="darkgray 1px solid";
    };
    admin_password.onmouseout=function () {
        this.style.border="darkgray 1px solid";
    };*/
   var c1=document.getElementById("c1");
   var admin=document.getElementsByClassName("a_2");
   //obtain 获取 <input> element元素 的集合aggregate;
   var a=160;
   var b=255;
   var c=235;
   /*var zhi=c1.onclick=function () {
     a=a+10;   b=b+6; c=c+15;
   };
   setInterval(zhi,500);*/
        for(var i=0;i<admin.length;i++){
            //使用for循环遍历整个a_2的数组,
            admin[i].onmouseover=function(){
                // 当鼠标移动到admin的范围时候 就执行函数
               /*function i() {
                   a++;
                   b++;
                   c++;
               }      练习使用拼接
             setInterval(i(),100);*/
                this.style.border="RGB("+a+","+b+","+c+") 1px solid";
                //然后this代表当前的改变style
            };
            admin[i].onmouseout=function(){
                //当鼠标移出admin的范围的时候,执行函数
                this.style.border="darkgray 1px solid";
                //然后this代表当前的改变style
            };
        }
</script>
</div>
</body>
</html>


