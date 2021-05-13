$(document).ready(function(){
	$("#myonoffswitch").click(function(){
        $.get("index.php", { Mode: "css"} );
	});
});