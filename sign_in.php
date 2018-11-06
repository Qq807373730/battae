<?php
/**
 * Created by PhpStorm.
 * User: mac
 * Date: 11/5/2018
 * Time: 2:20 PM
 */?>
<!DOCTYPE html>
<html >
<head>
    <meta charset="UTF-8">
    <title>logn lnterface</title>
    <style>
        body{ margin: 0;}
        input{outline:none;}
        .a_1{ width:500px; heigth:200px; margin:80px 60% auto 40%; position: fixed; top: 100px;}
        h1{ margin: 0 0 20px 85px;}
        .a_4{ border-radius: 8px; margin:15px 0 0 200px;background-color: RGBA(255,235,153,.5);}
        .a_3{ float: right; line-height:30px;color: red; width:200px; height: 30px; margin: 0 40px 0 0;}
        .a_2{ border: darkgray 1px solid; border-radius: 5px; width: 200px; height: 25px;}
    </style>
</head>
<body>
<div>
    <video  width="100%" height="100%" loop="loop" muted="muted" poster="video/video.png" autoplay="autoplay" >
        <source src="video/movie_1.mp4" type="video/mp4">
    </video>
</div>
<div class="a_1">
    <h1>LOGN</h1>
    <form >
        账号:&nbsp;<input id="admin_name" class="a_2" type="text"  placeholder="  Please input administrator account."  >
        <div class="a_3"></div>
        <br/>
       <br/> 密码:&nbsp;<input id="admin_password" class="a_2" type="password" placeholder="  Please input a password">
        <div class="a_3"></div>
        <br/><br/>
        <input  id="c1" type="submit" value="登录" class="a_4">
    </form>
<script>
    //action="index_1.php" method="post"
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
   //var submission=document.getElementById("c1");
   //var c1=document.getElementById("c1");
   var admin=document.getElementsByClassName("a_2");
   var admin_xianshi=document.getElementsByClassName("a_3");
   /*function a1(){
       c2.value="我已经点击了";
   }
   c2.onclick=a1;*/
   //obtain 获取 <input> element元素 的集合aggregate;
   var a=253;
   var b=150;
   var c=115;
   //submission是提交按钮的id   onclick单击事件点击它的时候执行下面函数
   /*submission.onclick=function () {
       //判断如果admin的value的值为空的 话 那么久提升用户输入账户名或者密码
       if(admin[0].value==""){
           admin_xianshi[0].style.display="block";
           admin_xianshi[0].innerHTML="请输入用户名";
       }else if(admin[1].value=="") {
           admin_xianshi[1].style.display="block";
           admin_xianshi[1].innerHTML="请输入密码";
       }
   };*/

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
                admin[0].oninput=function () {
                    if(admin[0].value.replace(/\s+/g,"")==="")
                    {
                        admin_xianshi[0].innerHTML="请输入用户名!!!!!!!!";
                    }else if(admin[0].value!=""){
                        admin_xianshi[0].innerHTML="";
                    }
                    admin[1].oninput=function () {
                        if (admin[1].value.replace(/\s+/g, "") === "") {
                            admin_xianshi[1].innerHTML = "请输入密码!!!!!!!!";
                        } else if (admin[1].value != "") {
                            admin_xianshi[1].innerHTML = "";
                        }
                    }
                };
                this.style.border="RGB("+a+","+b+","+c+") 1px solid";

                //然后this代表当前的改变style
            };
            admin[i].onmouseout=function(){
               /* admin[1].oninput=function () {
                    if(admin[1].value.replace(/\s+/g,"")==="")
                    {
                        admin_xianshi[1].innerHTML="请输入密码";
                    }else if(admin[1].value!=""){
                        admin_xianshi[1].innerHTML="";
                    }

                };*/
                //当鼠标移出admin的范围的时候,执行函数
                this.style.border="darkgray 1px solid";
                admin_xianshi[0].innerHTML="";
                admin_xianshi[1].innerHTML="";
                //然后this代表当前的改变style
            };
        }
</script>
</div>
</body>
</html>


