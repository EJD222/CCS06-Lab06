<!DOCTYPE html>
<html>
<head>
    <title>Feedback Form</title>

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
            background-color: #212121;
        }

        .maincont {
            display: flex;
            justify-content: center; 
            align-items: center; 
            height: 100vh;
        }
        
        .container2{
            background-color: #FFCB06;
            padding: 0;
            margin-right: 50px;
            width: 65%;
            height: 85%;
            display: flex;
        }

        .imgcont {
            height: 100%;
            overflow: hidden;
        }
        
        .imgcont img {
            width: 100%;
            height: 100%;
            object-fit: none;
            filter: grayscale(100%);
        }

        .container3{
            background-color: #FFCB06;
            height: 100%;
            flex:1;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .fbformcont {
            background-color: #FFCB06;
            padding: 20px 35px 20px 35px;
            flex: 1;
            margin: 50px;
            height: 90%;    
        }

        .fbformcont h1 {
            font-size: 36px;
            margin: 0 0 20px 0;
        }

        .fbformcont label {
            display: block;
            font-size: 16px;
            margin-bottom: 10px;
        }

        #complete_name, .fbformcont input[type="email"],
        .fbformcont select {
            display: block;
            width: 100%;
            padding: 10px;
            font-size: 14px;
            margin-bottom: 6px;
            border: 1px solid #000000;
            background-color: transparent;
            box-shadow: inset 0 1px 3px rgba(0, 0, 0, 0.1);
            outline: none;
        }

        input[type="range"] {
            -webkit-appearance: none;
            width: 95%;
            height: 10px;
            margin: 10px 0;
            background-color: black;
            margin-bottom: 20px;
        }

        input[type="range"]::-webkit-slider-runnable-track {
            background-color: black;
            height: 10px;
            border-radius: 5px;
        }

        input[type="range"]::-webkit-slider-thumb {
            -webkit-appearance: none;
            width: 20px;
            height: 20px;
            background-color: black;
            border-radius: 50%;
            border: 2px solid black;
            margin: -5px;
        }

        input[type="range"]::-ms-thumb {
            margin: 0; 
        }

        #satisfaction_output {
            display: inline-block;
        }

        .fbformcont textarea {
            width: 100%;
            padding: 10px;
            font-size: 14px;
            margin-bottom: 30px;
            box-shadow: inset 0 1px 3px rgba(0, 0, 0, 0.1);
            height: 150px;
            border: 1px solid #000000;
            background-color: transparent; 
            outline: none;
        }

        button {
            background-color: #000000;
            color: #FFFFFF;
            padding: 12px 20px;
            border: none;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s ease;
            height: 45px;
            width: 100%;
        }

        button:hover {
            opacity: 0.8;
        }

    </style>

</head>
<body>
    <div class="maincont">

        <div class="container2">

            <div class="imgcont">
                <img src="https://images.unsplash.com/photo-1525547719571-a2d4ac8945e2?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=764&q=80">
            </div>
            
            <div class="container3">
                <div class="fbformcont">
                    <h1> Feedback Form </h1>
                    <form method="POST" action="thankyou.php">

                        <label for="complete_name">Complete Name</label>
                        <input type="text" name="complete_name" id="complete_name" required/> <br />

                        <label for="email">Email Address</label>
                        <input type="email" name="email" required/><br />
                        
                        <label for="type">Type</label>
                        <select name="type" required>
                            <option value="Inquiry">Inquiry</option>
                            <option value="Feedback">Feedback</option>
                            <option value="Other">Other</option>
                        </select>
                        <br />
                        
                        
                        <label for="satisfaction_level">Satisfaction Level</label>
                        <input type="range" id="satisfaction_input" name="satisfaction_level" value="0" min="01" max="10" oninput="satisfaction_output.value = satisfaction_input.value">
                        <output id="satisfaction_output">1</output>
                        
                        <label for="message">Message</label>
                        <textarea name="message" id="message"></textarea>

                        <button>Submit</button>
                    </form>
                </div>
            </div>
        
        </div>

    </div>
</body>
</html>
