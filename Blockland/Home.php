<?php
require 'config/init.php';
if(islogged() == false) {
  redirect('/Signin.aspx');
} 
?>
<html xmlns="http://www.w3.org/1999/xhtml"><head>
<title>
  <?=$name2?> Home
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
    <form method="post" action="./Home.aspx" id="form1">
<div class="aspNetHidden">
<input type="hidden" name="__VIEWSTATE" id="__VIEWSTATE" value="peEly2Mi2NCFCmRcaYMMxVGnFHlXZ++ZFZjRTdVryYRKSBwoU/unnqMBDxPIpQOYg1a2CXP1Xax2BpzwKpoqMZQDroGR/kghhXuXM/6TIGGDJqgGAxuu+a7q4NB0mJyvBiRmXnmPq96m+jspISEs8Q==">
</div>

<div class="aspNetHidden">

  <input type="hidden" name="__VIEWSTATEGENERATOR" id="__VIEWSTATEGENERATOR" value="ECDA716A">
  <input type="hidden" name="__EVENTVALIDATION" id="__EVENTVALIDATION" value="XjxqLsUFYohNJ9udYADc4N4OqAh2ZkzQxrtkSt32Q1aqPBpuVl+j9hio4MvMgopbZU3EZrAMUF/2BL4Nj4WnjIlbYtJPJNvhaiEMJtCQM61p+BfyNu0FdcNR8nYPD/uAALteumcNAgoGFRvVRFIUx1OPwM98/uX1/i8pWrTf2q5gdHngD22sAQW20KmbWBSl">
</div>
        <div aria-multiline="False" aria-sort="none">
            <input type="image" name="Banner" id="Banner" class="auto-style33" src="/content/banner.png" style="height:64px;width:853px;">
            <br>
            <div id="TopBar" class="auto-style34" style="border-color:Black;border-width:1px;border-style:Solid;height:24px;width:853px;margin-left: 506px; margin-top: 0px;">
  
                <div id="Bluesteelpart" class="auto-style12" style="background-color:LightSteelBlue;height:24px;">
    
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <span class="auto-style6">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="Home.aspx" class="auto-style23"><span class="auto-style7">Home</span></a><span class="auto-style7">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; |&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span><a href="Games.aspx" class="auto-style23"><span class="auto-style7">Games</span></a><span class="auto-style7">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; |&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span><a href="User.aspx" class="auto-style23"><span class="auto-style7">My Profile</span></a> &nbsp; <span class="auto-style7">&nbsp;|&nbsp;&nbsp; &nbsp;&nbsp;<a class="auto-style23" href="Settings.aspx"><span class="auto-style20">Settings</span></a>&nbsp; <span class="auto-style7">&nbsp;|&nbsp;&nbsp; &nbsp;&nbsp;<a class="auto-style23" href="Develop.aspx"><span class="auto-style20">Develop</span></a>&nbsp;</span>
                
  </div>
                    &nbsp;<br>
                  <table width="73%" cellspacing="0">
        <tbody><tr>
                <div id="Panel3" style="height:105px;width:425px;">
                    <span style="font-family: Verdana, Sans-Serif;font-size: 18px;">Welcome to <?=$name2?>!</span>
                    <br><br>
                    <span style="font-family: Verdana, Sans-Serif;font-size: 13px;"><?=$name?> is a revival of Roblox, NOT Blockland.</span>
                    <br>
                    <span style="font-family: Verdana, Sans-Serif;font-size: 13px;"><?=$name?> is not affiliated with Roblox OR Blockland.</span>
                    <br><br>
                    <span style="font-family: Verdana, Sans-Serif;font-size: 13px;">You can make places. Users and play other players' places. You can go ahead and explore the website.</span>
                   
                  </div>
                  </tr><br><tr>
            <td height="100%">
                <table id="_ctl0_ContentPlaceHolder1_DataListCoolPlace" cellspacing="0" cellpadding="0" border="0">
  <tbody><tr>
    <td  colspan="3" style="font-family: Verdana, Sans-Serif;font-size: 18px;">
                        Cool Place
                    </td>
  </tr><tr>
    <td>
                        <a id="_ctl0_ContentPlaceHolder1_DataListCoolPlace__ctl1_ContentImage1" title="Flayra's Place" href="/User.aspx?id=195" style="display:inline-block;cursor:hand;"><img src="/content/Level.jpg" width="400px" height="370px" border="0"></a>
                    </td>
  </tr>
</tbody></table>
            </td>
            <td height="100%">
                <table style="margin-bottom:60px;" id="_ctl0_ContentPlaceHolder1_DataList2" cellspacing="21" cellpadding="8" bordercolor="Black" border="0" bgcolor="LightSteelBlue" height="100%" width="120%">
  <tbody><tr>
    <td colspan="3" style="font-family: Verdana, Sans-Serif;font-size: 17px;text-align:center;">
                       <br> Newest&nbsp;People
                    </td>
  </tr>
    <?=newestpeople();?>
</tbody></table></td>
        </tr></tbody></table>
               
                <br>
                <p class="auto-style12" style="margin-left: 0px;">
                    _____________________________________________________________________________________________</p>

            <div id="Panel2" class="auto-style12" style="width:1026px;">
  
                <span class="auto-style5"><?=$name?> uses assets from a 2007 build of ROBLOX, provided and available for download by Clonetrooper1019 Blockland 07 is not affiliated with ROBLOX<br> &nbsp;Corporation, Lego or Megabloks, Blockland07 is merely an emulator meant to imitate ROBLOX's old website look so please dont sue me.<br> &nbsp;All characters, logos, names from ROBLOX Corporation</span>
</div> </div>
    </form>



</body></html>