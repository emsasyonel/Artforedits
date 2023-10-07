<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@700&display=swap" rel="stylesheet">
    <title>Hello Page</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            height: 100vh;
            margin: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: #f4f4f4;
            background-image: url(./mainpbg/desktop-wallpaper-football-players-famous-soccer-players.jpg);
            background-repeat: no-repeat;
            background-size: cover;
        }
        
        #helloText {
            opacity: 1;
            transition: opacity 1s;
            font-weight: bold;
            border: 4px solid black;
            border-radius: 50%;
            box-shadow: 8px 8px 4px black;
            display: inline-block;
            font-size: 200px;
            background: linear-gradient(to right, yellow 0%,white 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;  
          }
        .bold-font {
            font-family: 'Roboto', sans-serif;
            font-weight: 700;  /* Fontun kalın versiyonu */
            font-size: 24px;   /* Yazının boyutu */
            color: #333;      /* Yazı rengi */
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);  /* Yazıya gölge eklemek için (daha belirgin hale getirir) */
        }
    </style>
</head>
<body>
    <div id="helloText" class= "bold-font">Art for Edits</div>

    <script>
        setTimeout(() => {
            const helloText = document.getElementById('helloText');
            helloText.style.opacity = '0';

            // Redirect to a new page after the text disappears
            setTimeout(() => {
                window.location.href = "anasayfa.php"; // Replace with your desired URL or path
            }, 1000); // Wait 1 second after the text disappears
        }, 2000); // Wait 3 seconds initially
    </script>
</body>
</html>
