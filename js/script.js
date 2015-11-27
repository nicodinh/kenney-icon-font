window.addEvent("domready", function(){
/*
 |	KENNEY ICON FONT
 |	@file		./js/script.css
 |	@author		KENNEY.nl & SamBrishes, pytesNET
 |	@version	0.2.0 [0.2.0]
 |
 |	@license	CC0 1.0
 */	
 
	/*
	 |	SIMPLE TAB NAVIGATION
	 */
	var tabs = $("icon-tabs"), pages = $("icon-pages");
	$(tabs).getChildren("li>a").addEvent("click", function(event){
		event.preventDefault();
		if(!$(this).getParent().hasClass("active")){
			$(pages).getChildren("div.icons").setStyle("display", "none");
			$(pages).getChildren("div.icons" + $(this).hash).setStyle("display", "block");
			
			$(tabs).getChildren("li").removeClass("active");
			$(this).getParent().addClass("active");
		}
	});
	$(tabs).getChildren("li>a")[1].click();
	
	/*
	 |	ICON SHOWCASE
	 */
	$$(".icon").addEvent("click", function(event){
		var icon = 		$(this).getChildren(".icon-meta>.icon-class")[0].get("text"),
			icon = 		iconList[icon.replace("ki-", "")],
			showcase = 	$("showcase");
		
		$(showcase).getElement(".icon-title").set("text", icon.class);
		$(showcase).getElement(".icon-code").set("text", "\\"+icon.code);
		$(showcase).getElement(".icon-since").set("text", icon.added);
		$(showcase).getElement(".icon-revised").set("text", icon.revised);
		$(showcase).getElements(".icon-show>.ki").set("class", "ki " + icon.class);
		
		if(icon.policy !== undefined){
			$(showcase).getElement(".icon-policy").set({"href": icon.policy, styles: {"display": "inline-block"}});
		} else {
			$(showcase).getElement(".icon-policy").setStyle("display", "none");
		}
		
		$(window).scrollTo(0, 0);
	});
	
	
});