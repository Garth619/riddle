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
            
            
            createWaypoint("main_trigger", ".header_left", "visible", -60, livechatLoad, true);
            
            
            
 // lazy load live chat
 
 
 function livechatLoad() {
	jQuery.getScript( "//messenger.ngageics.com/ilnksrvr.aspx?websiteid=62-172-229-144-17-16-31-107", function( data, textStatus, jqxhr ) {
		console.log( data ); // Data returned
		console.log( textStatus ); // Success
		console.log( jqxhr.status ); // 200
		console.log( "Live Chat Load was performed." );
	});
}






}); // Document Ready

