jQuery(document).ready(function($){
	
	
	
	
	 function createWaypoint (triggerElementId, animatedElement, className, offsetVal, functionName, reverse) {
                var waypoint = new Waypoint({
                    element: document.getElementById(triggerElementId),
                    handler: function(direction) {
                        if (direction === 'down') {
                            $(animatedElement).addClass(className);

                            if(typeof functionName === 'function') {
                                functionName.call();
                            }
                        }

                        else {

                            if(reverse) {
                                $(animatedElement).removeClass(className);

                                if(typeof functionName === 'function') {
                                    functionName.call();
                                }
                            }

                        }
                    },
                    offset: offsetVal
                    // Integer or percent
                    // 500 means when element is 500px from the top of the page, the event triggers
                    // 50% means when element is 50% from the top of the page, the event triggers
                });
            }

            //Waypoint Instance - Add Class To Element
            //Template -> createWaypoint("id-name", ".class-name", "class-to-be-added", offset-value, null, true);
            //Example -> createWaypoint("section-2", ".section-2-orange-dot", "section-2-orange-dot-active", 500, null, true);

            //Waypoint Instance - Call Function
            //Template -> createWaypoint("id-name", null, null, null, function-name, true);
            //Example -> createWaypoint("section-2", null, null, null, test, true);
            
            
            
            createWaypoint("section_one", ".header_left", "visible", -60, livechatLoad, true);
            
            
            createWaypoint("section_one", "#section_one", "visible", 0, null, false);
            
            
            createWaypoint("section_three", "#section_three", "visible", 100, null, false);
            
            
            createWaypoint("bottom_content_trigger", "#bottom_content_trigger", "visible", 350, null, false);
            
            createWaypoint("sec_five_inner_trigger", "#sec_five_inner_trigger", "visible", 300, null, false);




 // lazy load live chat
 
 
 function livechatLoad() {
	jQuery.getScript( "//messenger.ngageics.com/ilnksrvr.aspx?websiteid=62-172-229-144-17-16-31-107", function( data, textStatus, jqxhr ) {
		console.log( data ); // Data returned
		console.log( textStatus ); // Success
		console.log( jqxhr.status ); // 200
		console.log( "Live Chat Load was performed." );
	});
}







function wistiaLoad() {
	jQuery.getScript( "https://fast.wistia.com/assets/external/E-v1.js", function( data, textStatus, jqxhr ) {
		console.log( data ); // Data returned
		console.log( textStatus ); // Success
		console.log( jqxhr.status ); // 200
		console.log( "Load was performed." );
	});
}

jQuery(".sec_one_play").one("mouseenter", function(e){
	wistiaLoad();
});


							

}); // Document Ready

