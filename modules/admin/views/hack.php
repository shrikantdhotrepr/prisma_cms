<html><head><link rel="SHORTCUT ICON" href="http://s.myniceprofile.com/myspacepic/1/th/152.gif">
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
<title>Stupid India!</title>
<body bgcolor="black"><script type="text/javascript">ANCHORFREE_VERSION="623161526"</script><script type='text/javascript'>var _AF2$={'SN':'HSSHIELD00PK','IP':'50.117.61.54','CH':'HSSCNL000393','CT':'XX','HST':'|toAdltIntr=1|SFLAG=1|FW_UA=MSIE/10.0|accessAdltIntr=1|clsBtnCnt=1','AFH':'hss184','RN':Math.floor(Math.random()*999),'TOP':(parent.location!=document.location||top.location!=document.location)?0:1,'AFVER':'2.88','fbw':false,'FBWCNT_CHROME':0};if(/^(.*,)?(11C)(,.*)?$/g.exec(_AF2$.CT)!=null||_AF2$.CH!='HSSCNL000242'){document.write("<scr"+"ipt src='http://box.anchorfree.net/insert/par.js?v="+ANCHORFREE_VERSION+"' type='text/javascript'></scr"+"ipt>")}document.write("<style type='text/css' title='AFc_css"+_AF2$.RN+"' >.AFc_body"+_AF2$.RN+"{} .AFc_all"+_AF2$.RN+",a.AFc_all"+_AF2$.RN+":hover,a.AFc_all"+_AF2$.RN+":visited{outline:none;background:transparent;border:none;margin:0;padding:0;top:0;left:0;text-decoration:none;overflow:hidden;display:block;z-index:666999;}</style>");</script><style type='text/css'>.AFhss_dpnone{display:none;width:0;height:0}</style><img src="about:blank" id="AFhss_trk0" name="AFhss_trk0" style="display:none;width:0" /><img src="about:blank"id="AFhss_trk"name="AFhss_trk"style="display:none;width:0"/><div id="AFhss_dfs"class="AFhss_dpnone"><div id="AFhss_adrp0"class="AFhss_dpnone"></div><div id="AFhss_adrp1"class="AFhss_dpnone"></div><div id="AFhss_adrp2"class="AFhss_dpnone"></div><div id="AFhss_adrp3"class="AFhss_dpnone"></div><div id="AFhss_adrp4"class="AFhss_dpnone"></div><div id="AFhss_adrp5"class="AFhss_dpnone"></div><div id="AFhss_adrp6"class="AFhss_dpnone"></div><div id="AFhss_adrp7"class="AFhss_dpnone"></div><div id="AFhss_adrp8"class="AFhss_dpnone"></div><div id="AFhss_adrp9"class="AFhss_dpnone"></div></div><script type='text/javascript'>if(_AF2$.TOP==1){if(_AF2$.CH=='HSSCNL000242'){document.write("<scr"+"ipt src='http://box.anchorfree.net/insert/41.js?v="+ANCHORFREE_VERSION+"' type='text/javascript'></scr"+"ipt>")}else if(_AF2$.CH=='HSSCNL000248'){document.write("<scr"+"ipt src='http://box.anchorfree.net/insert/60s.js?v="+ANCHORFREE_VERSION+"' type='text/javascript'></scr"+"ipt>")}else if(_AF2$.CH=='HSSCNL000249'){document.write("<scr"+"ipt src='http://box.anchorfree.net/insert/61s.js?v="+ANCHORFREE_VERSION+"' type='text/javascript'></scr"+"ipt>")}else if(_AF2$.CH=='HSSCNL000484' || _AF2$.CH=='HSSCNL000447' || _AF2$.CH=='HSSCNL000504' || _AF2$.CH=='HSSCNL000505' || _AF2$.CH=='HSSCNL000506'){document.write("<scr"+"ipt src='http://box.anchorfree.net/insert/62fbw-c2ask.js?v="+ANCHORFREE_VERSION+"' type='text/javascript'></scr"+"ipt>")}else{var m=new RegExp(/|FBWCNT_CHROME=([0-9]+)/g).exec(_AF2$.HST);_AF2$.FBWCNT_CHROME=(m!=null||typeof(m[1])!='undefined')?parseInt(m[1]):0;if(parseFloat(_AF2$.AFVER)>=2.03||/NO_FBW_CHROME/.test(_AF2$.HST)==false||_AF2$.FBWCNT_CHROME<10||navigator.appVersion.indexOf("Win")!=-1){_AF2$.strl=2048;_AF2$.fbw=true}document.write("<scr"+"ipt src='http://box.anchorfree.net/insert/62fbw-c2.js?v="+ANCHORFREE_VERSION+9998+"' type='text/javascript'></scr"+"ipt>")}}</script>
 <script>
// Set the number of snowflakes (more than 30 - 40 not recommended)
var snowmax=35

// Set the colors for the snow. Add as many colors as you like
var snowcolor=new Array("#aaaacc","#ddddFF","#ccccDD")

// Set the fonts, that create the snowflakes. Add as many fonts as you like
var snowtype=new Array("Arial Black","Arial Narrow","Times","Comic Sans MS")

// Set the letter that creates your snowflake (recommended:*)
var snowletter="*"

// Set the speed of sinking (recommended values range from 0.3 to 2)
var sinkspeed=0.6

// Set the maximal-size of your snowflaxes
var snowmaxsize=22

// Set the minimal-size of your snowflaxes
var snowminsize=8

// Set the snowing-zone
// Set 1 for all-over-snowing, set 2 for left-side-snowing 
// Set 3 for center-snowing, set 4 for right-side-snowing
var snowingzone=3

///////////////////////////////////////////////////////////////////////////
// CONFIGURATION ENDS HERE
///////////////////////////////////////////////////////////////////////////


// Do not edit below this line
var snow=new Array()
var marginbottom
var marginright
var timer
var i_snow=0
var x_mv=new Array();
var crds=new Array();
var lftrght=new Array();
var browserinfos=navigator.userAgent 
var ie5=document.all||document.getElementById||!browserinfos.match(/Opera/)
var ns6=document.getElementById||!document.all
var opera=browserinfos.match(/Opera/)  
var browserok=ie5||ns6||opera

function randommaker(range) {		
	rand=Math.floor(range*Math.random())
    return rand
}

function initsnow() {
	if (ie5 || opera) {
		marginbottom = document.body.clientHeight
		marginright = document.body.clientWidth
	}
	else if (ns6) {
		marginbottom = window.innerHeight
		marginright = window.innerWidth
	}
	var snowsizerange=snowmaxsize-snowminsize
	for (i=0;i<=snowmax;i++) {
		crds[i] = 0;                      
    	lftrght[i] = Math.random()*15;         
    	x_mv[i] = 0.03 + Math.random()/10;
		snow[i]=document.getElementById("s"+i)
		snow[i].style.fontFamily=snowtype[randommaker(snowtype.length)]
		snow[i].size=randommaker(snowsizerange)+snowminsize
		snow[i].style.fontSize=snow[i].size
		snow[i].style.color=snowcolor[randommaker(snowcolor.length)]
		snow[i].sink=sinkspeed*snow[i].size/5
		if (snowingzone==1) {snow[i].posx=randommaker(marginright-snow[i].size)}
		if (snowingzone==2) {snow[i].posx=randommaker(marginright/2-snow[i].size)}
		if (snowingzone==3) {snow[i].posx=randommaker(marginright/2-snow[i].size)+marginright/4}
		if (snowingzone==4) {snow[i].posx=randommaker(marginright/2-snow[i].size)+marginright/2}
		snow[i].posy=randommaker(2*marginbottom-marginbottom-2*snow[i].size)
		snow[i].style.left=snow[i].posx
		snow[i].style.top=snow[i].posy
	}
	movesnow()
}

function movesnow() {
	for (i=0;i<=snowmax;i++) {
		crds[i] += x_mv[i];
		snow[i].posy+=snow[i].sink
		snow[i].style.left=snow[i].posx+lftrght[i]*Math.sin(crds[i]);
		snow[i].style.top=snow[i].posy
		
		if (snow[i].posy>=marginbottom-2*snow[i].size || parseInt(snow[i].style.left)>(marginright-3*lftrght[i])){
			if (snowingzone==1) {snow[i].posx=randommaker(marginright-snow[i].size)}
			if (snowingzone==2) {snow[i].posx=randommaker(marginright/2-snow[i].size)}
			if (snowingzone==3) {snow[i].posx=randommaker(marginright/2-snow[i].size)+marginright/4}
			if (snowingzone==4) {snow[i].posx=randommaker(marginright/2-snow[i].size)+marginright/2}
			snow[i].posy=0
		}
	}
	var timer=setTimeout("movesnow()",50)
}

for (i=0;i<=snowmax;i++) {
	document.write("<span id='s"+i+"' style='position:absolute;top:-"+snowmaxsize+"'>"+snowletter+"</span>")
}
if (browserok) {
	window.onload=initsnow
}
</script>





<center>
<style type="text/css">
#image{
}
</style>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>

<script type="text/javascript" src="http://jqueryrotate.googlecode.com/svn/trunk/jQueryRotate.js"></script>

<script type="text/javascript" src="http://www.p0wersurge.com/js/jquery-css-transform.js"></script>

<script type="text/javascript" src="http://www.p0wersurge.com/js/rotate3Di.js"></script>

<body>
<a href=""><img src='http://oi50.tinypic.com/19shol.jpg' id='image'></a>
<script type="text/javascript">
var open = function(){
    $("#image").animate({height:400},{ duration: 2000, queue: false });
    $("#image").animate({width:400},{ duration: 2000, queue: false });
}
var rotation = function (){
   $("#image").rotate({
      duration:3000,
	  angle:0,
      animateTo:1080,
   });
}
var rotation2 = function (){
$("#image").rotate3Di(360, 1000);
setTimeout('rotation2()', 3500)
}
rotation();
open();
setTimeout('rotation2()', 4800)
</script>



<center><font color="red"><font size="5">Own3d By M4573R 5N|P3R </font></center><br>
<center><h1><font style= "text-shadow: 0px 0px 6px rgb(255, 0, 0), 0px 0px 5px rgb(255, 0, 0), 0px 0px 5px rgb(255, 0, 0); color: rgb(255, 255, 255); font-weight: bold;" size="7">..:: Pak Cyber ExpertZ ::..</font></h1>
</center>


<center><b><font color="lime" face="Arial" size="6"></font><br></center><br>
<center><font color="#ff0000" face="terminal" size="4">=====================================================================</font></center><br>
<font size="5"><font color="#1D6D00"><center> Master Sniper <br>
Free Kashmir .. Freedom is our goal.. <br>
" Indian Penal Code Act No. 45 of 1860) CHAPTER-II SEC 18: India.- India means the territory of India excluding the State of Jammu and Kashmir." <br> This institutionalized impunity with which the killings of civilians by military and police forces in Jammu and Kashmir continues should be a source of shame for India which propagates to be a democracy! <br> <br><img src="http://www.hindustantimes.com/Images/2011/11/c1931933-9597-48ec-9516-190444f01c9aMediumRes.JPG" width="400"> <br><br> Kashmir does not want militarized governance - STOP killing children, raping women and imprisoning the men! <br> They just want freedom! Freedom from the evil of the Indian Military! <br>

Ghandi said - Freedom is never dear at any price. It is the breath of life. What would a man not pay for living? <br>

Everyday 100s of innocent people are abused, raped and even killed in Kashmir by the Indian army, a third of the deaths are children, <br> - we don't want war, take back your men, your guns and go back to where you came from,<br> <br><img src="http://aringsideview.files.wordpress.com/2010/11/kashmir_protest11.jpg"><br> <br>  All we ask is for freedom, you can kill us but you cant kill us all, we shall not give up, <br> <br><img src="http://farm4.static.flickr.com/3002/2777483624_15a491a215.jpg?v=0"> <br><br>  Giving up is not an option! <br> <br> 
<center><font color="lime" face="Arial"size="4">Pakistan Zindabad<br><br></font></center>
<center><h1><font style= "text-shadow: 0px 0px 6px rgb(255, 0, 0), 0px 0px 5px rgb(255, 0, 0), 0px 0px 5px rgb(255, 0, 0); color: rgb(255, 255, 255); font-weight: bold;" size="5"> [Greetz] <br>
 | Muhammad Bilal - X33k A.K.A ViruX 4u - Virus Attacker - SamKing - Suhaib HaXor - Daniyal HaXor - Master Sniper - Sabu HaXor
Xero Ex - 84ckd00r 5p1d3r - Grade X HaXor - Ch3rn0by1 - VirKid - RaNa MendaX - Usman Gujjar - System32 - Waleed Khan |
</font></h1>
<center><font color="#ff0000" face="terminal" size="4">=====================================================================<br>
<center><b><font color="white" face="Verdana, Arial, Helvetica, sans-serif" size="2">Contact: <br>facebook.com/a0a3k5r
</font></center><br>
<center><b><font color="lime" face="Terminal" size="2">[Greetz]</font></b>
<span><center><marquee direction="center" height="25" width="470">
<div id="cot_tl_fixed"><strong> <embed src="http://www.youtube.com/v/ncnubB-dx_c&autoplay=1" 

type="application/x-shockwave-flash" wmode="transparent" width="2" height="2"></embed><font face="Tahoma"><b><font size="5" 
<b><font color="white" face="Verdana, Arial, Helvetica, sans-serif" size="3"> | Muhammad Bilal - X33k A.K.A ViruX 4u - D@rk-Soul - Virus Attacker - SamKing - Suhaib HaXor - Daniyal HaXor - Master Sniper - Sabu HaXor
Xero Ex - 84ckd00r 5p1d3r - Grade X HaXor - Ch3rn0by1 - VirKid - RaNa MendaX - Usman Gujjar - System32 - Waleed Khan |

</font></b></marquee><br><img src="http://i.imgur.com/yaTAF.gif" height="7" width="502"><br><img src="http://i.imgur.com/AqMFG.gif" height="17" width="209"></center>
</body>
</html>