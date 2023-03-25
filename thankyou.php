<!DOCTYPE html>
<html>
<head>
    <title>Thank You</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700&display=swap" rel="stylesheet">

    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
            font-family: 'Inter', sans-serif;
        }

        body {
            color: #000000;
        }

        .maincont {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #212121;
        }

        .container2 {
            background-color: #FFCB06;
            padding: 30px;
            width: 50%;
            height: auto;
            box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.1);
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .tycont {
            display: flex;
            flex-direction: column;
            margin-top: 30px;
            padding: 10px 20px 30px 20px;
        }

        .tycont img {
            width: 120px;
            height: 120px;
            margin: 0 auto 30px;
            display: block;
        }

        .tycont h1 {
            font-size: 36px;
            font-weight: bold;
            margin-bottom: 20px;
        }

        .tycont p {
            font-size: 20px;
            line-height: 1.5;
            margin-bottom: 20px;
        }

        .tycont p.satisfaction-level {
            font-size: 24px;
            font-weight: bold;
            margin-bottom: 20px;
        }

        button {
            background-color: #000000;
            color: #FFFFFF;
            border: none;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s ease;
            height: 45px;
            width: 35%;
            padding: 10px 20px;
            margin: 0 auto; 
            display: block;
        }

        button:hover {
            opacity: 0.8;
        }

    </style>
</head>
<body>

<div class="maincont">
    <div class="container2">
        <div class="tycont">
            <img src="https://cdn-icons-png.flaticon.com/512/1358/1358072.png">
            <?php
                if ($_SERVER["REQUEST_METHOD"] == "POST"){
                    $complete_name = $_POST["complete_name"];
                    $email = $_POST["email"];
                    $type = $_POST["type"];
                    $satisfaction_level = $_POST["satisfaction_level"];
                    $message = $_POST["message"];
                
                    echo "<h1>Thank You!</h1>";
                    echo "<p>Received <strong>". $type . "</strong> message from <strong>" . $complete_name . "</strong> <strong>(" .  $email . ")</strong></p>";
                    echo "<p><strong>". $message . "</strong></p>";
                    echo "<p>Satisfaction Level: <strong>". $satisfaction_level . "<strong> </p>";
                } 
            ?>
            <form action="feedback.php">
                <button type="submit">Send Another Feedback</button>
            </form>
        </div> 
    </div> 
</div>
    
</body>
</html>
