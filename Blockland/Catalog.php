<?php
require 'config/init.php';
if(islogged() == false) {
  redirect('/Signin.aspx');
}
?>
<html xmlns="http://www.w3.org/1999/xhtml"><head>
<title>
  <?=$name2?> Catalog
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
    <form method="post" action="./Catalog.aspx" id="form1">
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
           
<br>
                <div id="Panel2" style="width:750px">
                <h4 class="auto-style2">The best of the best</h4>
                  <div id="Panel3" style="width:740px;">

                   <?=loadcatalog()?>
 
                     <div style="clear:both;"></div>
                    </div>
                          </div>
          <p class="auto-style12" style="margin-left: 0px;">
                    ________________________________________________________________________________________</p>

            <div id="Panel2" class="auto-style12" style="width:1026px;">
  
                <span class="auto-style5"><?=$name?> uses assets from a 2007 build of ROBLOX, provided and available for download by Clonetrooper1019 Blockland 07 is not affiliated with ROBLOX<br> &nbsp;Corporation, Lego or Megabloks, Blockland07 is merely an emulator meant to imitate ROBLOX's old website look so please dont sue me.<br> &nbsp;All characters, logos, names from ROBLOX Corporation</span>
</div>
               </div>
      
      </div>
    </form>



</body></html>