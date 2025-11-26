<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body style="background-image: url('https://images.unsplash.com/photo-1506744038136-46273834b3fb?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Mnx8Y29mZWV8ZW58MHx8MHx8&auto=format&fit=crop&w=800&q=60'); background-size: cover; background-repeat: no-repeat; height: 100vh;" class="flex justify-center items-center">
    <!-- Main Container -->
    <div style="background-color: rgba(255, 255, 255, 0.5);" class="rounded-lg">
        <div class="text-5xl text-center font-medium">
            <h1 style="padding-top: 20px; padding-bottom: 20px;">Homepage</h1>
        </div>
        <!-- PHP Code to display date and time -->
        <div class="text-center text-lg">
            Today's Date: <?php echo date("m.d.y") ; ?>
        </div> 
        <div class="text-center text-lg pb-6">
            Current Time: <?php echo date("h:i:s A") ; ?>
        </div> 
        <!-- Navigation Links -->
        <div class="text-center gap-4 grid grid-rows-3 text-xl pb-10 sm:grid-cols-3">    
            <a class="border-2 bg-[#5E8C61] hover:drop-shadow-md p-4" href="index.php">Homepage</a>
            <a class="border-2 bg-[#5E8C61] hover:drop-shadow-md p-4" href="#">Contact Us</a>
            <a class="border-2 bg-[#5E8C61] hover:drop-shadow-md p-4" href="#">Shop</a>
        </div> 
    </div>
</body>
</html>