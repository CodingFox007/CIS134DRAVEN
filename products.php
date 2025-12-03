<!DOCTYPE html>
<html> 
<head>
	<!-- Created 12-2-2025 by Draven  -->
	<!-- This page is an example php application. -->
	<title>Insects</title>
	<script src="https://cdn.tailwindcss.com"></script>
</head>
<body style="background-image: url('https://images.unsplash.com/photo-1506744038136-46273834b3fb?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Mnx8Y29mZWV8ZW58MHx8MHx8&auto=format&fit=crop&w=800&q=60'); background-size: cover; background-repeat: no-repeat; height: 100vh;" class="flex justify-center items-center">
    <!-- Main Container -->
    <div style="background-color: rgba(255, 255, 255, 0.5);" class="rounded-lg">
        <div class="text-5xl text-center font-medium">
            <h1 style="padding-top: 20px; padding-bottom: 20px;">Insects</h1>
        </div>
	<!-- Navigation Links -->
	<div class="text-center gap-4 grid text-xl pb-4 sm:grid-cols-3">
    	<?php
        	$navCaptions = array("Homepage", "Contact Us", "Shop");
        	$navLinks    = array("index.php", "#", "products.php");

        	for ($i = 0; $i < count($navCaptions); $i++) {
            	echo '<a class="border-2 bg-[#5E8C61] hover:drop-shadow-md p-4" 
                     	href="' . $navLinks[$i] . '">' . $navCaptions[$i] . '</a>';
        }
    ?>
</div>

	<div class="text-center font-bold">My Insect Collection</div>
	<?php
		$Products = array ( array("Honey Bee", 25.00, 214, "USA"),
			array("Satin Azure Butterfly", 35.00, 4, "Australia"),
			array("Luna Moth", 42.00, 23, "USA"),
			array("Praying Mantis", 60.00, 7, "USA"),
			array("Scarab Beetle", 75.00, 2, "Egypt")
		 );
	?>
	<div class="flex justify-center mt-2">
    	<table class="border-4 border-black border-collapse text-center text-xl bg-white/70">
			<?php
				echo "<tr class=\"bg-[#5E8C61] text-white\"><th class=\"border border-black p-3\">Name</th><th class=\"border border-black p-3\">Price</th><th class=\"border border-black p-3\">Quantity</th><th class=\"border border-black p-3\">Location</th></tr>";
				echo "<tr><td class=\"border border-black p-3\">",$Products[0][0],"</td><td class=\"border border-black p-3\">",$Products[0][1],"</td><td class=\"border border-black p-3\">",$Products[0][2],"</td><td class=\"border border-black p-3\">",$Products[0][3],"</td></tr>";
				echo "<tr><td class=\"border border-black p-3\">",$Products[1][0],"</td><td class=\"border border-black p-3\">",$Products[1][1],"</td><td class=\"border border-black p-3\">",$Products[1][2],"</td><td class=\"border border-black p-3\">",$Products[1][3],"</td></tr>";
				echo "<tr><td class=\"border border-black p-3\">",$Products[2][0],"</td><td class=\"border border-black p-3\">",$Products[2][1],"</td><td class=\"border border-black p-3\">",$Products[2][2],"</td><td class=\"border border-black p-3\">",$Products[2][3],"</td></tr>";
				echo "<tr><td class=\"border border-black p-3\">",$Products[3][0],"</td><td class=\"border border-black p-3\">",$Products[3][1],"</td><td class=\"border border-black p-3\">",$Products[3][2],"</td><td class=\"border border-black p-3\">",$Products[3][3],"</td></tr>";
				echo "<tr><td class=\"border border-black p-3\">",$Products[4][0],"</td><td class=\"border border-black p-3\">",$Products[4][1],"</td><td class=\"border border-black p-3\">",$Products[4][2],"</td><td class=\"border border-black p-3\">",$Products[4][3],"</td></tr>";
			?>
		</table>
	</div>
</body>
</html>