/**
	COOKIE Warning Window
	Version 1.0
	Copyright (c) 2013 Avatec.pl
	All Rights Reserved
**/

(function ($) {

    $.fn.CookieWindow = function (options) {

	    var defaults = {
	    	position		: 	"bottom", 
			bgcolor			:	"#f8f0bd",
			textcolor		:	"#504e45",
			btnbgcolor		:	"#504e45",
			btntxtcolor		:	"#ffffff",
			btntext			:	"rozumiem",
			text			:	"Strona korzysta z plików cookies w celu realizacji usług i zgodnie z <a href=/polityka-prywatnosci.html>Polityką Prywatności</a>. Możesz określić warunki przechowywania lub dostępu do plików cookies w Twojej przeglądarce.",
			cookieExpire	:	1
		};
		
		var o = $.extend(defaults, options);

		var isCookieExists = $.cookie("cww");
		if(!isCookieExists)
		{
			if(o.position == "top") {
				$('body').append('<div id="cookieWarning" style="line-height:250%;display:none;position:fixed;top:0;left:0;background:'+o.bgcolor+';color:'+o.textcolor+';padding:10px 0px;text-align:center;width:100%;font-size:8pt;">'+o.text+'<br/><a style="background:'+o.btnbgcolor+';padding:3px 5px;display:inline-block;width:100px;cursor:pointer;color:'+o.btntxtcolor+';border-radius:5px;" id="closeCookieWarning">'+o.btntext+'</a></div>');
			}
			if(o.position == "bottom") {
				$('body').append('<div id="cookieWarning" style="line-height:250%;display:none;position:fixed;bottom:0;left:0;background:'+o.bgcolor+';color:'+o.textcolor+';padding:10px 0px;text-align:center;width:100%;font-size:8pt;">'+o.text+'<br/><a style="background:'+o.btnbgcolor+';padding:3px 5px;display:inline-block;width:100px;cursor:pointer;color:'+o.btntxtcolor+';border-radius:5px;" id="closeCookieWarning">'+o.btntext+'</a></div>');
			}
			$("#cookieWarning").slideDown(500);
			
			$("#closeCookieWarning").click( function() {
				$("#cookieWarning").fadeOut(500);
				$.cookie("cww", 1, { expires : o.cookieExpire });
			});				
		} 
    }
})(jQuery); 