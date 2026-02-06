<?php
require 'config/init.php';
if(islogged()) {
  redirect('/Home.aspx');
}
if($_SERVER['REQUEST_METHOD'] == 'POST') {
  if(login($_POST['CharacterNameIn'],$_POST['PasswordIn'])){
    redirect('/Home.aspx');
  }
}
?>
<html xmlns="http://www.w3.org/1999/xhtml"><head>
<title>
  <?=$name2?> Login
</title>
    <style type="text/css">
        .auto-style2 {
            font-family: "Comic Sans MS";
        }
        .auto-style3 {
            font-size: small;
        }
        .auto-style6 {
            font-size: large;
        }
        .auto-style7 {
            font-size: large;
            color: #FFFFFF;
            font-family: "Comic Sans MS";
        }
        .auto-style5 {
            font-size: xx-small;
            font-family: "Comic Sans MS";
        }
        .auto-style8 {
            margin-top: 9px;
        }
        .auto-style9 {
            font-family: "Comic Sans MS";
            font-size: x-small;
        }
        .auto-style10 {
            font-size: x-small;
        }
        .auto-style11 {
            font-size: 8pt;
        }
        .auto-style12 {
            margin-top: 0px;
        }
        .auto-style13 {
            margin-left: 230px;
            margin-top: 6px;
        }
        .auto-style20 {
            color: #FFFFFF;
        }
        .auto-style23 {
            text-decoration: none;
        }
        .auto-style33 {
            margin-left: 507px;
        }
        .auto-style34 {
            margin-bottom: 0px;
        }
    </style>
</head>
<body>
    <form method="post" action="./Signin.aspx" id="form1">
<div class="aspNetHidden">
<input type="hidden" name="__VIEWSTATE" id="__VIEWSTATE" value="peEly2Mi2NCFCmRcaYMMxVGnFHlXZ++ZFZjRTdVryYRKSBwoU/unnqMBDxPIpQOYg1a2CXP1Xax2BpzwKpoqMZQDroGR/kghhXuXM/6TIGGDJqgGAxuu+a7q4NB0mJyvBiRmXnmPq96m+jspISEs8Q==">
</div>

<div class="aspNetHidden">

  <input type="hidden" name="__VIEWSTATEGENERATOR" id="__VIEWSTATEGENERATOR" value="ECDA716A">
  <input type="hidden" name="__EVENTVALIDATION" id="__EVENTVALIDATION" value="XjxqLsUFYohNJ9udYADc4N4OqAh2ZkzQxrtkSt32Q1aqPBpuVl+j9hio4MvMgopbZU3EZrAMUF/2BL4Nj4WnjIlbYtJPJNvhaiEMJtCQM61p+BfyNu0FdcNR8nYPD/uAALteumcNAgoGFRvVRFIUx1OPwM98/uX1/i8pWrTf2q5gdHngD22sAQW20KmbWBSl">
</div>
        <div aria-multiline="False" aria-sort="none">
            <input type="image" name="Banner" id="Banner" class="auto-style33" src="/content/banner.png" style="height:64px;width:733px;">
            <br>
            <div id="TopBar" class="auto-style34" style="border-color:Black;border-width:1px;border-style:Solid;height:24px;width:733px;margin-left: 506px; margin-top: 0px;">
  
                <div id="Bluesteelpart" class="auto-style12" style="background-color:LightSteelBlue;height:24px;">
    
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <span class="auto-style6">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="Home.aspx" class="auto-style23"><span class="auto-style7">Home</span></a><span class="auto-style7">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; |&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span><a href="Games.aspx" class="auto-style23"><span class="auto-style7">Games</span></a><span class="auto-style7">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; |&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span><a href="User.aspx" class="auto-style23"><span class="auto-style7">My Profile</span></a> &nbsp; <span class="auto-style7">&nbsp;|&nbsp;&nbsp; &nbsp;&nbsp;<a class="auto-style23" href="Settings.aspx"><span class="auto-style20">Settings</span></a>&nbsp; </span>
                
  </div>
                    &nbsp;<br>
                <div id="Panel3" style="height:205px;width:786px;">
    
                    <br>
                    <span class="auto-style2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <span id="Label3" style="font-size: small">If you aren't a <?=$name2?> member, then     </span>
                    <a href="Signup.aspx"><span class="auto-style3">Sign up!</span></a>
                    <br>
                    &nbsp;<span class="auto-style10">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></span>&nbsp;<span id="Label2" class="auto-style11" style="font-family: 'Comic Sans MS'">You need an account in order to use <?=$name?>. There are no guests as Guests werent added to ROBLOX until September of 2008</span>
                    <span class="auto-style9">&nbsp;&nbsp; </span>
                    <br>
                    <br>
                    <span id="CharacterNameLbl" style="font-family: 'Comic Sans MS'; font-size: small">User name:</span>
                    <input name="CharacterNameIn" type="text" id="CharacterNameIn" style="width:204px;margin-left: 1px; margin-top: 0px">
                    <br>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <span id="PasswordInLbl" style="font-family: 'Comic Sans MS'; font-size: small">Password:</span>
                    <input name="PasswordIn" type="password" id="PasswordIn" class="auto-style8" style="width:176px;margin-left: 5px; ">
                    <br>
                    <input type="submit" name="SignInBtn" value="Log in" id="SignInBtn" class="auto-style13" style="height:21px;width:51px;font-family: Arial, Helvetica, sans-serif; font-size: small; ">
                    <br>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    
                
  </div>
                <br>
                <p class="auto-style12" style="margin-left: 0px; ">
                    _____________________________________________________________________________________________</p>
            
</div>
        </div>
        <p style="margin-left: 0px; margin-top: 24px">
            &nbsp;</p>
        <p style="margin-left: 0px; margin-top: 24px">
            &nbsp;</p>
        <p style="margin-left: 0px; margin-top: 24px">
            &nbsp;</p>
        <p style="margin-left: 0px; margin-top: 24px">
            &nbsp;</p>
        <p style="margin-left: 0px; margin-top: 24px">
            &nbsp;</p>
        <p style="margin-left: 0px; margin-top: 24px">
            &nbsp;</p>
            <div id="Panel2" class="auto-style12" style="width:1026px;margin-left: 509px; ">
  
                <span class="auto-style5"><?=$name?> uses assets from a 2007 build of ROBLOX, provided and available for download by Clonetrooper1019 Blockland 07 is not affiliated with ROBLOX<br> &nbsp;Corporation, Lego or Megabloks, Blockland07 is merely an emulator meant to imitate ROBLOX's old website look so please dont sue me.<br> &nbsp;All characters, logos, names from ROBLOX Corporation</span>
</div>
    </form>



</body></html>