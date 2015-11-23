window.addEvent("domready", function(){
/*
 |	KENNEY ICON FONT
 |	@file		./js/script.css
 |	@author		KENNEY.nl & SamBrishes, pytesNET
 |	@version	0.1.0 [0.1.0]
 |
 |	@license	CC0 1.0
 */	
 
	// I will improve the demonstration page, when I find time for it!
	
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
	$(tabs).getChildren("li>a")[0].click();
	
	
	/*
	 |	SIMPLE TOOLTIPs
	 */
	var icons = $$(".icon");
	icons.addEvent("mouseenter", function(event){
		var link = $(this).getChildren("span.ki")[0];
		var className = $(link).get("class").replace(/(ki ki-)/, "");
		
		if($(link).get("data-tooltip") == null && iconList[className] !== undefined){
			var icon = iconList[className];
			var tooltip = new Element("div", {
				"class":	"tooltip",
				"text":		icon.class
			});
			
			$(link).set("data-tooltip", "true")
			$(tooltip).inject(link, "before");
		}
	});
	
	icons.addEvent("mouseleave", function(event){
		var link = $(this).getChildren("span.ki")[0];
		var tooltip = $(this).getChildren("div.tooltip");
		
		if(tooltip.length > 0){
			Object.each(tooltip, function(value){
				if(typeof(value) == "object"){
					$(value).destroy();
				}
			});
		}
		if($(link).get("data-tooltip") !== null){
			$(link).removeProperty("data-tooltip");
		}
	});
	
});