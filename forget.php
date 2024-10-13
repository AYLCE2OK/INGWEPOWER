<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>INGWE Power</title>
    <style>
        /* Style for the typing effect container */
        #typingEffect {
            position: inherit;
font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
text-align: center;
            font-size: 90px;
            white-space: pre;
 color:white;
            text-underline-position: auto;
        }
        
        text{
            color: red;
            text-underline-position: below;
        }
        #loading {
    font-size: 0px;
}
body{
    background-color:black;
}

    </style>
</head>
<body><br><br><br><br><br><br><br><br><br><br><br><br>
     <div id="typingEffect"></div>
    <div id="loading"></div>

    <script >
    document.addEventListener("DOMContentLoaded", function() {
    // Number of dots
    var dotsCount = 3;

    // Interval between dot additions (milliseconds)
    var interval = 500;

    var loadingDiv = document.getElementById("loading");

    // Function to add dots
    function addDots() {
        if (loadingDiv.textContent.length >= dotsCount * 2) {
            // Redirect to another page after loading
            window.location.href = "index.html";
        } else {
            loadingDiv.textContent += ".";
        }
    }

    // Set interval to add dots
    setInterval(addDots, interval);
});

    </script>

    <script>
        // Text to be displayed with typing effect
        var text = "No data";
        
        var index = 0;
        var speed = 200; // Adjust the speed of typing (in milliseconds)

        function type() {
            if (index < text.length) {
                document.getElementById("typingEffect").innerHTML += text.charAt(index);
                index++;
                setTimeout(type, speed);
            }
        }

        // Start the typing effect when the page loads
        window.onload = function() {
            type();
        }
    </script>
    
    
</body>
</html>


