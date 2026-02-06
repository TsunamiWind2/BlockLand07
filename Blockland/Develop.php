<?php
require 'config/init.php';
if(islogged() == false) {
  redirect('/Signin.aspx');
}
?>
<html xmlns="http://www.w3.org/1999/xhtml"><head>
<title>
  <?=$name2?> Develop
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
    <form method="post" action="./Develop.aspx" id="form1">
<div class="aspNetHidden">
<input type="hidden" name="__VIEWSTATE" id="__VIEWSTATE" value="peEly2Mi2NCFCmRcaYMMxVGnFHlXZ++ZFZjRTdVryYRKSBwoU/unnqMBDxPIpQOYg1a2CXP1Xax2BpzwKpoqMZQDroGR/kghhXuXM/6TIGGDJqgGAxuu+a7q4NB0mJyvBiRmXnmPq96m+jspISEs8Q==">
</div>

<div class="aspNetHidden">

  <input type="hidden" name="__VIEWSTATEGENERATOR" id="__VIEWSTATEGENERATOR" value="ECDA716A">
  <input type="hidden" name="__EVENTVALIDATION" id="__EVENTVALIDATION" value="XjxqLsUFYohNJ9udYADc4N4OqAh2ZkzQxrtkSt32Q1aqPBpuVl+j9hio4MvMgopbZU3EZrAMUF/2BL4Nj4WnjIlbYtJPJNvhaiEMJtCQM61p+BfyNu0FdcNR8nYPD/uAALteumcNAgoGFRvVRFIUx1OPwM98/uX1/i8pWrTf2q5gdHngD22sAQW20KmbWBSl">
</div>
        <div aria-multiline="False" aria-sort="none">
            <input type="image" name="Banner" id="Banner" class="auto-style33" src="/content/banner.png" style="height:64px;width:803px;">
            <br>
            <div id="TopBar" class="auto-style34" style="border-color:Black;border-width:1px;border-style:Solid;height:24px;width:803px;margin-left: 506px; margin-top: 0px;">
  
                <div id="Bluesteelpart" class="auto-style12" style="background-color:LightSteelBlue;height:24px;">
    
                    &nbsp;&nbsp;&nbsp;&nbsp;<span class="auto-style6">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="Home.aspx" class="auto-style23"><span class="auto-style7">Home</span></a><span class="auto-style7">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; |&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span><a href="Games.aspx" class="auto-style23"><span class="auto-style7">Games</span></a><span class="auto-style7">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; |&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span><a href="User.aspx" class="auto-style23"><span class="auto-style7">My Profile</span></a> &nbsp; <span class="auto-style7">&nbsp;|&nbsp;&nbsp; &nbsp;&nbsp;<a class="auto-style23" href="Settings.aspx"><span class="auto-style20">Settings</span></a>&nbsp; <span class="auto-style7">&nbsp;|&nbsp;&nbsp; &nbsp;&nbsp;<a class="auto-style23" href="Develop.aspx"><span class="auto-style20">Develop</span></a>&nbsp;</span>
                
  </div>
            <br><br>

                <div id="Panel2" style="margin: auto;margin-left:0px;width:1000px">
                  <div id="Panel3" style="height:430px;width:800px;border-color:Black;border-width:1px;border-style:Solid;">
                     <div id="Panel4" class="auto-style2" style="font-size:14px;font-weight:bold;text-align:center;background-color:LightSteelBlue;border-color:Black;border-width:1px;border-style:Solid;">
                   Game settings
                  </div><br>
                         <div id="Panel5" style="margin: 10px auto;width:652px;height:322px;border-color:Black;border-width:1px;border-style:Solid;">
                         <div id="Panel6" class="auto-style2" style="width:650px;font-weight:bold;font-size: 14px;text-align:center;background-color:LightSteelBlue;border-color:Black;border-width:1px;border-style:Solid;">
                   Game
                  </div>
                         <div id="Panel7" style="padding: 15px;">
                           <span class="auto-style2" style="font-family: Verdana, Sans-Serif;font-size:14px;">Game name</span><br>
                           <input name="GameNameIn" type="text" id="GameNameIn" style="width:204px;margin-left: 1px; margin-top: 0px;margin-top: 5px;"><br>
                           <span class="auto-style2" style="font-family: Verdana, Sans-Serif;font-size:14px;">Game description</span><br>
                           <textarea name="GameDescriptionIn" id="GameDescriptionIn" style="margin-bottom: 5px;margin-top: 5px" rows="6" cols="30"></textarea><br>
                           <span class="auto-style2" style="font-family: Verdana, Sans-Serif;font-size:14px;">Game file (max size 14 mb)</span><br>
                           <input type="file" id="GameFileIn" name="GameFileIn"><br><br>
                           <input type="submit" name="PublishGameBtn" value="Publish game" id="PublishGameBtn" style="height:21px;width:95px;font-family: Arial, Helvetica, sans-serif; font-size: small; ">
                           </div>
                    </div>
                          </div>

               </div>
      
      </div>
    </form>



</body></html>