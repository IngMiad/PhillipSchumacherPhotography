function openNav() {
    document.getElementById("mySidenav").style.width = "250px";
    //document.getElementById("main").style.marginLeft = "250px";
    document.getElementById("content_index").className = "content content_blurred";
}

/* Set the width of the side navigation to 0 and the left margin of the page content to 0, and the background color of body to white */
function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
    //document.getElementById("main").style.marginLeft = "0";
    document.getElementById("content_index").className = "content";
}



$(document).ready( function() {




$("#startpage_layout_p").click( function() {
		window.location.href = "http://ingaspace.marcodoerfler.de/public/index.php/photography";
  });

$("startpage_layout_fa").click( function() {
    window.location.href = "http://ingaspace.marcodoerfler.de/public/index.php/fineart"; 
  });

$("#startpage_layout_bts").click( function() {
	window.location.href = "http://ingaspace.marcodoerfler.de/public/index.php/behindthescenes";
  });

});