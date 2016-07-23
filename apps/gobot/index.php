<html>
<head>

<style type="text/css">

img.logo { margin-top:70px; }
input.submit {margin-top:20px; width:103px; height:29px; cursor:pointer;}
.textfield {margin-top:20px; width:450px; height:30px; font-size:20px;}
.hidden{display:none;}
.footer {margin-top:25px; text-align:center;}
a {text-decoration:none; }
a:link {color: #00f000; }
a:active {color: #0000ff; }
a:visited {color: #008000; }
a:hover {color: #00f0f0; }

.how_to_use_link{
    -moz-border-radius:3px;
	-webkit-border-radius:3px;
	border-radius:3px;
    -moz-box-shadow:0 1px 1px rgba(0, 0, 0, 0.2);
	-webkit-box-shadow:0 1px  1px rgba(0, 0, 0, 0.2);
	box-shadow:0 1px 1px rgba(0, 0, 0, 0.2);
    background:#eee;
    border:0;
    color:#333;
    cursor:pointer;
    font-family:"Lucida Grande",Helvetica,Arial,Sans-Serif;
    margin:200px;
    padding:6px 4px;
    text-decoration:none;
    position:relative;
}

.how_to_use ul{
    border:1px solid #eee;
	background:#eee;
    -moz-border-radius:3px;
	-webkit-border-radius:3px;
	border-radius:3px;
    width:800px;
    padding:10px;
    margin:6px 0 0 200px;
}

.how_this_link{
    -moz-border-radius:3px;
	-webkit-border-radius:3px;
	border-radius:3px;
    -moz-box-shadow:0 1px 1px rgba(0, 0, 0, 0.2);
	-webkit-box-shadow:0 1px  1px rgba(0, 0, 0, 0.2);
	box-shadow:0 1px 1px rgba(0, 0, 0, 0.2);
    background:#eee;
    border:0;
    color:#333;
    cursor:pointer;
    font-family:"Lucida Grande",Helvetica,Arial,Sans-Serif;
    margin:200px;
    padding:6px 4px;
    text-decoration:none;
    position:relative;
}

.how_this p{
    border:1px solid #eee;
	background:#eee;
    -moz-border-radius:3px;
	-webkit-border-radius:3px;
	border-radius:3px;
    width:800px;
    padding:10px;
    margin:6px 0 0 200px;
}

</style>


<!--link rel="stylesheet" type="text/css" href="http://developer.yahoo.com/yui/build/reset-fonts-grids/reset-fonts-grids.css">
<link rel="stylesheet" type="text/css" href="http://developer.yahoo.com/yui/build/menu/assets/skins/sam/menu.css"> 
<style type="text/css">

            div.yui-b p {
            
                margin: 0 0 .5em 0;
                color: #999;
            
            }
            
            div.yui-b p strong {
            
                font-weight: bold;
                color: #000;
            
            }
            
            div.yui-b p em {

                color: #000;
            
            }            
            
            h1 {

                font-weight: bold;
                margin: 0 0 1em 0;
                padding: .25em .5em;
                background-color: #ccc;

            }

            #productsandservices {
            
                margin: 0 0 10px 0;
            
            }

        </style>

        <script type="text/javascript" src="http://developer.yahoo.com/yui/build/yahoo-dom-event/yahoo-dom-event.js"></script>
        <script type="text/javascript" src="http://developer.yahoo.com/yui/build/animation/animation.js"></script>
        <script type="text/javascript" src="http://developer.yahoo.com/yui/build/container/container_core.js"></script>

        <script type="text/javascript" src="http://developer.yahoo.com/yui/build/menu/menu.js"></script>

        <script type="text/javascript">

            YAHOO.util.Event.onContentReady("productsandservices", function () {

                var ua = YAHOO.env.ua,
                    oAnim;

                function onSubmenuBeforeShow(p_sType, p_sArgs) {

                    var oBody,
                        oElement,
                        oShadow,
                        oUL;
                

                    if (this.parent) {

                        oElement = this.element;

                        oShadow = oElement.lastChild;
                        oShadow.style.height = "0px";
                    
                        if (oAnim && oAnim.isAnimated()) {
                        
                            oAnim.stop();
                            oAnim = null;
                        
                        }

                        oBody = this.body;

                        if (this.parent && 
                            !(this.parent instanceof YAHOO.widget.MenuBarItem)) {

                            if (ua.gecko || ua.opera) {
                            
                                oBody.style.width = oBody.clientWidth + "px";
                            
                            }
                            
                            if (ua.ie == 7) {

                                oElement.style.width = oElement.clientWidth + "px";

                            }
                        
                        }

    
                        oBody.style.overflow = "hidden";

                        oUL = oBody.getElementsByTagName("ul")[0];

                        oUL.style.marginTop = ("-" + oUL.offsetHeight + "px");
                    
                    }

                }

                function onTween(p_sType, p_aArgs, p_oShadow) {

                    if (this.cfg.getProperty("iframe")) {
                    
                        this.syncIframe();
                
                    }
                
                    if (p_oShadow) {
                
                        p_oShadow.style.height = this.element.offsetHeight + "px";
                    
                    }
                
                }

                function onAnimationComplete(p_sType, p_aArgs, p_oShadow) {

                    var oBody = this.body,
                        oUL = oBody.getElementsByTagName("ul")[0];

                    if (p_oShadow) {
                    
                        p_oShadow.style.height = this.element.offsetHeight + "px";
                    
                    }


                    oUL.style.marginTop = "";
                    oBody.style.overflow = "";
                    
                    if (this.parent && 
                        !(this.parent instanceof YAHOO.widget.MenuBarItem)) {

                        if (ua.gecko || ua.opera) {
                        
                            oBody.style.width = "";
                        
                        }
                        
                        if (ua.ie == 7) {

                            this.element.style.width = "";

                        }
                    
                    }
                    
                }


                function onSubmenuShow(p_sType, p_sArgs) {

                    var oElement,
                        oShadow,
                        oUL;
                
                    if (this.parent) {

                        oElement = this.element;
                        oShadow = oElement.lastChild;
                        oUL = this.body.getElementsByTagName("ul")[0];
                    
                        oAnim = new YAHOO.util.Anim(oUL, 
                            { marginTop: { to: 0 } },
                            .5, YAHOO.util.Easing.easeOut);


                        oAnim.onStart.subscribe(function () {
        
                            oShadow.style.height = "100%";
                        
                        });
    

                        oAnim.animate();

                        if (YAHOO.env.ua.ie) {
                            
                            oShadow.style.height = oElement.offsetHeight + "px";

                            oAnim.onTween.subscribe(onTween, oShadow, this);
    
                        }
    
                        oAnim.onComplete.subscribe(onAnimationComplete, oShadow, this);
                    
                    }
                
                }



                var oMenuBar = new YAHOO.widget.MenuBar("productsandservices", { 
                                                            autosubmenudisplay: true, 
                                                            hidedelay: 750, 
                                                            lazyload: true });

                
                oMenuBar.subscribe("beforeShow", onSubmenuBeforeShow);
                oMenuBar.subscribe("show", onSubmenuShow);

                oMenuBar.render();          
            
            });

        </script-->





<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
<script type="text/javascript">
$(document).ready(function(){	
    $('.how_to_use').hide().before('<a href="#" id="toggle-how_to_use" class="how_to_use_link" style="color:#000000">How to Use ?</a>');
	$('a#toggle-how_to_use').click(function() {
		$('.how_to_use').slideToggle(1000);
		return false;
	});
});
</script>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
<script type="text/javascript">
$(document).ready(function(){	
    $('.how_this').hide().before('<a href="#" id="toggle-how_this" class="how_this_link" style="color:#000000">How this works?</a>');
	$('a#toggle-how_this').click(function() {
		$('.how_this').slideToggle(1000);
		return false;
	});
});
</script>


<title>GOBOT - for Engineering Students</title>
</head>


<body class="yui-skin-sam" id="yahoo-com">
<div align='center'><img class='logo' src='gobot.png' /></div>
<form action='output.php' method='POST'>
<div align='center'><input id='inputvalue' class='textfield' type='text' name='input'/></div>
<div align='center' class=""><input class='submit' type='submit' name='submit' value='Go on' /></div>

<br />

		<div id="doc" class="yui-t1" style="margin:10 0 0 470 ;">
            <div id="hd">
            </div>
            <div id="bd">
                <div id="yui-main">
                    <div class="yui-b" style="float: left;">
                        <div id="productsandservices" class="yuimenubar yuimenubarnav">
                            <div class="bd">
                                <!--ul class="first-of-type">
                                    <li class="yuimenubaritem first-of-type"><a class="yuimenubaritemlabel" href="#communication">&nbsp;&nbsp;&nbsp;Web&nbsp;&nbsp;&nbsp;</a>
                
                                        <div id="communication" class="yuimenu">
                                            <div class="bd">
                                                <ul id='categoryul' style="padding-left:0px; display:block;">
                                                    <li class="yuimenuitem" id="technology">&nbsp;Technology&nbsp;&nbsp;</li>
                                                    <li class="yuimenuitem" id="books">&nbsp;Books</li>
                                                    <li class="yuimenuitem" id="news">&nbsp;News</li>
                                                    <li class="yuimenuitem" id="stock">&nbsp;Stock</li>
                                                    <li class="yuimenuitem" id="music">&nbsp;Music</li>
                                                    <li class="yuimenuitem" id="games">&nbsp;Games</li>
                                                    <li class="yuimenuitem" id="images">&nbsp;Images</li>
													<li class="yuimenuitem" id="celebrity">&nbsp;Celebrities</li>
													<li class="yuimenuitem" id="travel">&nbsp;Travel</li>
												</ul>
											</div>
                                        </div>
                                    </li>
                                    
                                </ul-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>

</form>

<!--script type="text/javascript">
	 
	 function navigatePage(e)
	 {
		var id = e.target.id;
		if(id=="music" || id=="technology" || id=="books" || id=="news" || id=="images" || id=="stock" || id=="games" || id=="celebrity" || id=="travel")
		{
			window.location = "http://hackyourworld.org/~iitkgp_tsndiffopera/bigBOSS.php?cat="+id+"&input="+document.getElementById("inputvalue").value;
		}
		//<a class="yuimenuitemlabel" href="bigBOSS.php?cat=music">
	 }
	 var el = document.getElementById("categoryul");   
     el.addEventListener("click", navigatePage, false);
	 
	 
</script-->


<p class='footer'>This WebApp is designed by <b>Sai Nikhil Thirandas</b>. &copy;2012 <a href="javascript:void(0)">saint1729</a> <b>|</b> <a href="javascript:void(0)" onclick="window.open('http://products.wolframalpha.com/api/termsofuse.html')">Terms of Use</a></p>


</body>

</html>
