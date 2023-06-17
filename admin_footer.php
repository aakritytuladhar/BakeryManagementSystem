<!DOCTYPE html>
<html>
<head>
	<title> Admin Nav</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" href="images/favicon.png" type="image/png">
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>

    <link rel="stylesheet" type="text/css" href="css/login.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>

<div class="copyright">
		    <div class="container text-center text-white">
						<p>&copy;2023, All rights reserved,Akaliko Bakery(Pvt.)Ltd</p>
					</div>
</div>
<button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>
			<script>
                var mybutton = document.getElementById("myBtn");
                // When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
	if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
		mybutton.style.display = "block";
	} else {
		mybutton.style.display = "none";
	}
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
	document.body.scrollTop = 0;
	document.documentElement.scrollTop = 0;
}
</script>
</body>
</html>