<title>Liberty Science Center | Citizen Science Gala</title>
<link rel="shortcut icon" href="/favicon.ico" />

<!--JS From LSC or external libraries, only gala2011.js included in this repo. The rest are either just jquery or available libraries to d/l-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js" ></script>
<script src="/assets/js/jquery_stuff/jquery.tools.min.js"></script>

<script src="/assets/js/jquery_stuff/niceforms/jquery.uniform.js" type="text/javascript"></script>
<script src="/assets/js/jquery_stuff/jquery.alphanumeric.pack.js" type="text/javascript"></script>
<script src="/assets/js/jquery_stuff/jquery.validationEngine.js" type="text/javascript"></script>
<script src="/assets/js/jquery_stuff/jquery.validationEngine-en.js" type="text/javascript"></script>
<script src="/assets/js/jquery_stuff/niceforms/gala2011.js" type="text/javascript"></script>
<!--*********************-->

<!--this code just sets on the validationEngine-->
<script src="/assets/js/jquery_stuff/jsvalid.js" type="text/javascript"></script>

<!--CSS From LSC or external libraries, not included in this repo, but viewable via firebug, etc...-->
<link rel="stylesheet" type="text/css" href="/assets/themes/swish/theme.css" type="text/css" /> 
<link rel="stylesheet" type="text/css" href="/assets/themes/swish/tdc-grid.css" type="text/css" />
<link rel="stylesheet" type="text/css" href="/assets/themes/swish/styles.css" type="text/css" />
<link rel="stylesheet" type="text/css" href="/assets/themes/swish/columns.css" type="text/css" />
<link rel="stylesheet" href="/assets/js/jquery_stuff/niceforms/main.css" type="text/css" media="screen" charset="utf-8" />
<link rel="stylesheet" href="/assets/js/jquery_stuff/niceforms/css/uniform.default.css" type="text/css" media="screen" charset="utf-8" />
<link rel="stylesheet" href="/assets/js/jquery_stuff/niceforms/css/validationEngine.jquery.css" type="text/css" media="screen" charset="utf-8" />
<link rel="stylesheet" type="text/css" href="/assets/themes/swish/tpl/left-column.css" />

<!--[if lte IE 8]>
   <link rel="stylesheet" href="/assets/js/jquery_stuff/niceforms/iepage.css" type="text/css"  charset="utf-8" />
<![endif]-->
<!--[if lte IE 7]>
<link rel="stylesheet" type="text/css" href="/assets/themes/swish/theme.ie.css" type="text/css" />
<link rel="stylesheet" type="text/css" href="/assets/themes/swish/columns.ie.css" type="text/css" />
<link rel="stylesheet" type="text/css" href="/assets/themes/swish/tpl/left-column.ie.css" type="text/css"  />
<link rel="stylesheet" href="/assets/js/jquery_stuff/niceforms/ie7page.css" type="text/css"  charset="utf-8" />
<![endif]-->

<script language="JavaScript" src="https://seal.networksolutions.com/siteseal/javascript/siteseal.js" type="text/javascript"></script>

<!--Inline CSS, specific changes to this form template, additional needs-->
<style type="text/css">
				.ticketinfo {max-height:800px;
							padding-bottom:10px;}
				div#left div {width:192px;}
                div#web_buttons{float:right;}
                div#web_buttons img{width:112px;height:20px;}
                div#belowheader{width:955px;}
                div#content{margin-top:40px;}
                div#footer li a{color:#666666;}
                div#footer li a:hover{color:#7BCDE1;}
                div#footer{font-weight:normal;}
                div#header img.logo {
                height:95px;
                margin-top:5px;
                width:258px; }
                span#webim{margin-right:5px;float:left;}
                span#icons{float:right;margin-top:15px;}
                .toprightmenu{margin-top:14px;float:right;text-align:center;margin-right:15px;}
                span#icons img{margin-bottom:8px;}
               .tooltip {display:none;background:transparent url('/assets/images/jquerytools/tooltip/black_small.png');height:43px;width:172px;padding-bottom:3px;padding-left:5px;padding-top:3px;padding-right:3px;color:#fff;text-align:left;font-family:Verdana;font-size:9px;}
 .tooltip_side {display:none;background:transparent url('/assets/images/jquerytools/tooltip/black.png');height:55px;width:227px;padding-bottom:5px;padding-left:10px;padding-top:5px;padding-right:5px;color:#fff;text-align:left;font-family:Verdana;font-size:9px;}



</style>

<script type="text/javascript">
             $(document).ready(function() {
              $("img.WebB").hover(
              function()
                  {
                      this.src = this.src.replace("_off","_hover");
                  },
              function()
                  {
                       this.src = this.src.replace("_hover","_off");
                  }
                 );

                $("#webim a img[title]").tooltip({position: "center left"});


               });

</script>


<script type="text/javascript">
/*GOOGLE ANALYTICS CODE HERE*/
</script>