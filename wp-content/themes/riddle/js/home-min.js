jQuery(document).ready(function($){function e(e,n,t,i,o,l){var c=new Waypoint({element:document.getElementById(e),handler:function(e){"down"===e?($(n).addClass(t),"function"==typeof o&&o.call()):l&&($(n).removeClass(t),"function"==typeof o&&o.call())},offset:i})}e("section_one","#section_one","visible",0,null,!1),e("section_three","#section_three","visible",100,null,!1),e("bottom_content_trigger","#bottom_content_trigger","visible",300,null,!1),e("sec_five_inner_trigger","#sec_five_inner_trigger","visible",300,null,!1)});