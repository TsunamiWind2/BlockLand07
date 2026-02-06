<?php
require 'config/init.php';
if(islogged() == false) {
  redirect('/Signin.aspx');
}
if($_SERVER['REQUEST_METHOD'] == 'POST') {
  if(isset($_POST['NeedMoreHatsBtn'])) {
    //catalog
    redirect('/Catalog.aspx');
  }elseif(isset($_POST['UnequipHatBtn'])){
    //unequip
    unequip($me['id']);
  }elseif(isset($_POST['RedrawBtn'])) {
    //render
    render($me['id'],'user');
  }
}
$stmt = $pdo->prepare("SELECT * FROM bodycolors WHERE uid = :id");
$stmt->execute(['id'=>$me['id']]);
$bc = $stmt->fetch();
if($bc) {
$bodyparts = ['head', 'leftarm', 'rightarm', 'leftleg', 'rightleg', 'torso'];
[$head, $leftarm, $rightarm, $leftleg, $rightleg, $torso] = array_map(
fn($part) => $colorsrtx[$bc[$part]],
$bodyparts
);
}
?>
<html xmlns="http://www.w3.org/1999/xhtml"><head>
<title>
  <?=$name2?> Character
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
        .auto-style35 {
            width:32px;
            height:32px;
            margin-left:4.9px;
            border:2px solid black;
            display:inline-block;
            text-align:center;
            margin-top:10px;
            cursor:pointer;
        }
    </style>
</head>
<body>
    <form method="post" action="./Character.aspx" id="form1">
<div class="aspNetHidden">
<input type="hidden" name="__VIEWSTATE" id="__VIEWSTATE" value="peEly2Mi2NCFCmRcaYMMxVGnFHlXZ++ZFZjRTdVryYRKSBwoU/unnqMBDxPIpQOYg1a2CXP1Xax2BpzwKpoqMZQDroGR/kghhXuXM/6TIGGDJqgGAxuu+a7q4NB0mJyvBiRmXnmPq96m+jspISEs8Q==">
</div>

<div class="aspNetHidden">

  <input type="hidden" name="__VIEWSTATEGENERATOR" id="__VIEWSTATEGENERATOR" value="ECDA716A">
  <input type="hidden" name="__EVENTVALIDATION" id="__EVENTVALIDATION" value="XjxqLsUFYohNJ9udYADc4N4OqAh2ZkzQxrtkSt32Q1aqPBpuVl+j9hio4MvMgopbZU3EZrAMUF/2BL4Nj4WnjIlbYtJPJNvhaiEMJtCQM61p+BfyNu0FdcNR8nYPD/uAALteumcNAgoGFRvVRFIUx1OPwM98/uX1/i8pWrTf2q5gdHngD22sAQW20KmbWBSl">
</div>
        <div aria-multiline="False" aria-sort="none">
            <input type="image" name="Banner" id="Banner" class="auto-style33" src="/content/banner.png" style="height:64px;width:763px;">
            <br>
            <div id="TopBar" class="auto-style34" style="border-color:Black;border-width:1px;border-style:Solid;height:24px;width:763px;margin-left: 506px; margin-top: 0px;">
  
                <div id="Bluesteelpart" class="auto-style12" style="background-color:LightSteelBlue;height:24px;">
    
                    &nbsp;&nbsp;&nbsp;&nbsp;<span class="auto-style6">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="Home.aspx" class="auto-style23"><span class="auto-style7">Home</span></a><span class="auto-style7">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; |&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span><a href="Games.aspx" class="auto-style23"><span class="auto-style7">Games</span></a><span class="auto-style7">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; |&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span><a href="User.aspx" class="auto-style23"><span class="auto-style7">My Profile</span></a> &nbsp; <span class="auto-style7">&nbsp;|&nbsp;&nbsp; &nbsp;&nbsp;<a class="auto-style23" href="Settings.aspx"><span class="auto-style20">Settings</span></a>&nbsp; <span class="auto-style7">&nbsp;|&nbsp;&nbsp; &nbsp;&nbsp;<a class="auto-style23" href="Develop.aspx"><span class="auto-style20">Develop</span></a>&nbsp;</span>
                
  </div>
            <br><br>

                <div id="Panel2" style="position: relative;margin: auto;margin-left:0px;width:900px">
                  <div id="Panel3" style="height:485px;width:750px;border-color:Black;border-width:1px;border-style:Solid;">
                     <div id="Panel4" class="auto-style2" style="font-family: Verdana, Sans-Serif;font-size:14px;text-align:center;background-color:LightSteelBlue;">
                   My Character
                  </div>
                    <br>
                    <br>
                    <input type="submit" name="NeedMoreHatsBtn" value="Need more hats?" id="NeedMoreHatsBtn" class="auto-style13" style="margin-left: 10px;margin-top: -10px;height:31px;width:109px;font-family: Arial, Helvetica, sans-serif; font-size: small; ">
                      <input type="submit" name="UnequipHatBtn" value="Unequip hat" id="UnequipHatBtn" class="auto-style13" style="margin-left: 10px;margin-top: -10px;height:31px;width:80px;font-family: Arial, Helvetica, sans-serif; font-size: small; ">
                             <div style="display:flex;margin-top:10px;margin-left:10px;gap:20px;">
                      <div id="Panel5" style="width:202px;height:242px;border-color:Black;border-width:1px;border-style:Solid;">
                     <div id="Panel7" style="text-align:center;padding:13px;margin-left:-5px;">
                        <div style="display:inline-block;text-align:center;">
                            <button id="Head" type="button" style="background-color:<?=$head;?>;width:58px;height:55px;display:block;margin:-1px auto;border-color:Black;border-width:1px;border-style:Solid;"></button>
                            <div style="display:flex;justify-content:center;align-items:flex-start;">
                            <button id="LeftArm" type="button" style="background-color:<?=$leftarm;?>;width:47px;height:84px;margin:1px;border-color:Black;border-width:1px;border-style:Solid;"></button>
                            <button id="Torso" type="button" style="background-color:<?=$torso;?>;width:90px;height:84px;margin:1px;border-color:Black;border-width:1px;border-style:Solid;"></button>
                            <button id="RightArm" type="button" style="background-color:<?=$rightarm;?>;width:47px;height:84px;margin:1px;border-color:Black;border-width:1px;border-style:Solid;"></button>
                            </div>
                            <div style="display:flex;justify-content:center;">
                            <button id="LeftLeg" type="button" style="background-color:<?=$leftleg;?>;width:45px;height:88px;margin:1px;border-color:Black;border-width:1px;border-style:Solid;"></button>
                            <button id="RightLeg" type="button" style="background-color:<?=$rightleg;?>;width:45px;height:88px;margin:1px;border-color:Black;border-width:1px;border-style:Solid;"></button>
                            </div>
                        </div>
                    </div>
                    </div> 
                         <div id="Panel5" style="margin-left:135px;margin-top:42px;width:367px;height:171px;border-color:Black;border-width:1px;border-style:Solid;">
                            <div id="Panel6_1" class="auto-style2" style="width:367px;font-family: Verdana, Sans-Serif;font-size: 14px;text-align:center;background-color:LightSteelBlue;">
                   Colors
                  </div>
                         <div id="Panel7" style="padding:10px;">
                                          <div class="auto-style35" style="background-color:white;margin-left:10px;" data-color="white"></div>
                             <div class="auto-style35" style="background-color:#E5E4DE;" data-color="#E5E4DE"></div>
                            <div class="auto-style35" style="background-color:#A3A2A4;" data-color="#A3A2A4"></div>
                             <div class="auto-style35" style="background-color:#1B2A34;" data-color="#1B2A34"></div>
                            <div class="auto-style35" style="background-color:#C4281B;" data-color="#C4281B"></div>
                             <div class="auto-style35" style="background-color:#F5CD2F;" data-color="#F5CD2F"></div>
                            <div class="auto-style35" style="background-color:#FDEA8C;" data-color="#FDEA8C"></div>
                               <div class="auto-style35" style="background-color:#0D69AB;" data-color="#0D69AB"></div>
                            <div class="auto-style35" style="background-color:#008F9B;" data-color="#008F9B"></div>
                             <div class="auto-style35" style="background-color:#A4BD46;" data-color="#A4BD46"></div>
                            <div class="auto-style35" style="background-color:#624732;" data-color="#624732"></div>
                           <div class="auto-style35" style="background-color:#685C43;" data-color="#685C43"></div>
                           <div class="auto-style35" style="background-color:#EEC4B6;" data-color="#EEC4B6"></div>
                            <div class="auto-style35" style="background-color:#CC8E69;" data-color="#CC8E69"></div>
                           </div>
                           <input type="submit" name="RedrawBtn" value="Redraw" id="RedrawBtn" class="auto-style13" style="margin-left:40px;margin-top:18px;height:21px;width:60px;font-family: Arial, Helvetica, sans-serif; font-size: small; ">
                      
                    </div>  
                   
                    <div id="Panel5" style="position:absolute;top:62%;margin-left:5px;width:442px;height:122px;border-color:Black;border-width:1px;border-style:Solid;">
                         <div id="Panel6" class="auto-style2" style="width:442px;font-family: Verdana, Sans-Serif;font-size: 14px;text-align:center;background-color:LightSteelBlue;">
                   Inventory 0/0
                  </div>
                         <div id="Panel7" style="padding:22px;width:449px;margin-left:10px;">
                             <div id="Panel7_2" style="float:left;width:20%;">
                          <div id="Panel7_3" style="width:45px;height:45px;border-color:Black;border-width:1px;border-style:Solid;text-align:center;cursor:pointer;">
                            <img id="Asset" src="/content/door.png" width="45px">
                            </div>
                             </div>
                             <div id="Panel7_2" style="float:left;width:20%;">
                          <div id="Panel7_3" style="width:45px;height:45px;border-color:Black;border-width:1px;border-style:Solid;text-align:center;cursor:pointer;">
                            <img id="Asset" src="/content/door.png" width="45px">
                            </div>
                             </div>
                             <div id="Panel7_2" style="float:left;width:20%;">
                          <div id="Panel7_3" style="width:45px;height:45px;border-color:Black;border-width:1px;border-style:Solid;text-align:center;cursor:pointer;">
                            <img id="Asset" src="/content/door.png" width="45px">
                            </div>
                             </div>
                             <div id="Panel7_2" style="float:left;width:20%;">
                          <div id="Panel7_3" style="width:45px;height:45px;border-color:Black;border-width:1px;border-style:Solid;text-align:center;cursor:pointer;">
                            <img id="Asset" src="/content/door.png" width="45px">
                            </div>
                             </div>
                             <div id="Panel7_2" style="float:left;width:20%;">
                          <div id="Panel7_3" style="width:45px;height:45px;border-color:Black;border-width:1px;border-style:Solid;text-align:center;cursor:pointer;">
                            <img id="Asset" src="/content/door.png" width="45px">
                            </div>
                             </div>
                           
                           <button type="button" name="LessHatsBtn" id="LessHatsBtn" class="auto-style13" style="position:absolute;top:88.5%;left:29%;margin-top:-10px;height:24px;font-family: Arial, Helvetica, sans-serif; font-size: small; ">More hats..</button>
                      <button type="button" name="MoreHatsBtn" id="MoreHatsBtn" class="auto-style13" style="position:absolute;top:88.5%;right:79%;margin-top:-10px;height:24px;width:82px;font-family: Arial, Helvetica, sans-serif; font-size: small; ">Less hats..</button>
                      
                           </div>
                    </div>
                    
                      <div id="Panel5" style="position:absolute;top:62.5%;margin-left:475px;width:217px;height:117px;border-color:Black;border-width:1px;border-style:Solid;">
                         <div id="Panel6" class="auto-style2" style="width:217px;font-family: Verdana, Sans-Serif;font-size: 14px;text-align:center;background-color:LightSteelBlue;">
                   Currently wearing
                  </div>
                         <div id="Panel7" style="padding: 15px;">
                           
                          <div id="Panel7_2" style="width:18%;margin:auto;margin-left:40px;">
                          <div id="Panel7_4" style="width:100px;height:100px;text-align:center;cursor:pointer;">
                            <img id="Asset_W" src="/content/door.png" width="55px"><br><span id="Asset_N" style="font-family: Verdana, Sans-Serif;font-size:13px;"></span>
                            </div>
                             </div>
                           
                           </div>
                    </div></div>
                          </div>
          <p class="auto-style12" style="margin-left: 100px;">
                    ___________________________________________________________________________________________</p>

            <div id="Panel2" class="auto-style12" style="width:1026px;margin-left: 100px;">
  
                <span class="auto-style5"><?=$name?> uses assets from a 2007 build of ROBLOX, provided and available for download by Clonetrooper1019 Blockland 07 is not affiliated with ROBLOX<br> &nbsp;Corporation, Lego or Megabloks, Blockland07 is merely an emulator meant to imitate ROBLOX's old website look so please dont sue me.<br> &nbsp;All characters, logos, names from ROBLOX Corporation</span>
</div>
               </div>
      <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
$(document).ready(function(){
    let bodypar = null;
    let colorpick = false;
    $("#Head, #LeftArm, #Torso, #RightArm, #LeftLeg, #RightLeg").click(function() { //idk what is this lmfao :skull:
     bodypar= $(this).attr('id'); 
      colorpick = true;
});
    //picked color
    $(".auto-style35[data-color]").click(function(){
        if(!colorpick || !bodypar){
            return;
    }
let seclectoclorr= $(this).css("background-color");
       $("#" + bodypar).css("background-color", seclectoclorr);
       
    const data = {uid:<?php echo $me['id']; ?>,color:rgb2hex(seclectoclorr),bp:bodypar};fetch('/config/changebc', {
  method: 'POST',headers: {'Content-Type': 'application/json'},
  body: JSON.stringify(data)
})
  .then(response => response.json())
  .then(result => {
    //ok
  })
  .catch(error => {
    console.error('error with bdcolors:', error);
  });//ok
    bodypar = null;colorpick = false;
                });
});
//some epic hack 
var hexDigits = new Array("0","1","2","3","4","5","6","7","8","9","a","b","c","d","e","f");
  function rgb2hex(rgb)
  {
    rgb = rgb.match(/^rgb\((\d+),\s*(\d+),\s*(\d+)\)$/);
    return "#" + hex(rgb[1]) + hex(rgb[2]) + hex(rgb[3]);
  }
  function hex(x)
  {
    return isNaN(x) ? "00" : hexDigits[(x - x % 16) / 16] + hexDigits[x % 16];
  }
function currentlywearing() {
fetch('/config/wearing')
        .then(response =>{
            if(!response.ok){
           throw new Error('fuck you wearings:');
            }
   return response.json();
        })
   .then(data => {
            const thumbnailZANRYTHFAT = document.getElementById('Asset_W');
       const nameZANRYTHFAT = document.getElementById('Asset_N');
   if(data && data.id) {
             thumbnailZANRYTHFAT.src = data.thumbnail;
            }else {
         thumbnailZANRYTHFAT.src = '/content/door.png';
            }
   nameZANRYTHFAT.textContent = data.title || '';
        })
  .catch(error => {
console.error('something went wrong: ', error);
});
}
    currentlywearing();
document.addEventListener("DOMContentLoaded", function() {const inventorytext = document.getElementById("Panel6");
   const inventoryitems = document.querySelectorAll("#Panel7_3 img");
    const morehats = document.getElementById("MoreHatsBtn");
  const lesshats = document.getElementById("LessHatsBtn");
let currentp= 1;
let totalp = 0;function inventory(page) {
 fetch(`/config/inv?p=${page}`)
.then(response => response.json())
.then(data => {
totalp = data.pages;
inventorytext.textContent = `Inventory ${currentp - 1}/${totalp}`;
const hasitems = data.items && data.items.length > 0;
inventoryitems.forEach((item, index) => {if(hasitems && data.items[index]) {
item.src = data.items[index].thumbnail;
item.dataset.aid = data.items[index].id;
}else {
item.src = '/img/door.png';}
});
})
.catch(error => console.error('something with inv:', error));
}
inventoryitems.forEach(item => {
item.addEventListener("click", function() {
const aid = this.dataset.aid;
fetch('/config/wear', {
headers: {'Content-Type': 'application/x-www-form-urlencoded'},
method: 'POST',
body: `aid=${encodeURIComponent(aid)}`
})
.then(response => response.json())
.then(data => {
currentlywearing();
})
.catch(error => console.error('error wearing: ', error));
});
});
lesshats.addEventListener("click", function() {
if(currentp< totalp) {
currentp++;
inventory(currentp);
currentlywearing();
}
});
//-1 page
morehats.addEventListener("click", function() {
if(currentp> 1) {
currentp--;
//-1 page stuff :sob:
inventory(currentp);
currentlywearing();
}
});
inventory(currentp);
});
</script>
      </div>
    </form>



</body></html>