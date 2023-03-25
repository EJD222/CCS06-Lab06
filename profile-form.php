<!DOCTYPE html>
<html lang="en">
<head>
    <title>Profile Form</title>
   
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700&display=swap" rel="stylesheet">
   
    <style>
        * {
            box-sizing: border-box;
        }
       
        body {
            font-family: 'Inter', sans-serif;
            background-color: #F2F2F2;
            margin: 0;
            padding: 0;
        }

        /* Center Content */
        .maincontainer {
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        /* Adds Background to the Profile Form */
        .container2 {
            background-color: #FFFFFF;
            padding: 60px;
            box-shadow: 0 10px 50px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
            margin-right: 50px;
            width: 70%;
            height: 85%;
            margin-right: 10px;
            display: flex;
            flex-direction: column;
            justify-content: left;
            align-items: left;
        }

        /* Styles the Profile Form */
        .pformcontainer {
            width: 40%;
            height: 0%;
            margin-left: 5%;
        }

        /* Styles the h1 in Profile Form */
        .pformcontainer h1 {
            font-size: 28px;
            font-weight: 700px;
            margin-bottom: 30px;
            color: #333333;
            text-align: center;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        /* Adds Background to the Your Data */
        .container3 {
            position: relative;
            padding: 9px 9px 9px 9px;
            background-color: #0075FF;
            box-shadow: 0 10px 50px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
            margin-left: 55%;
            width: 45%;
            height: 100%;
        }

        /* Styles the datacontainer */
        .datacontainer {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            padding: 9%;
            width: 80%;
            height: 80%;
            background-color: #FFFFFF;
            box-shadow: 0 10px 50px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
        }

        /* Styles all h1 in datacontainer */
        .datacontainer h1 {
            margin-top: 24%;
            color: #333333;
        }

        /* Styles all p in datacontainer */
        .datacontainer p {
            font-size: 16px;
            margin-bottom: 5px;
            color: #333333;
        }

        /* Styles the Form */
        form {
            display: flex;
            flex-direction: column;
        }

        /* Styles the Labels */
        label {
            font-size: 16px;
            font-weight: bold;
            margin-bottom: 5px;
            color: #333333;
        }

        /* Styles the all with Input Tags */
        input[type="text"], input[type="date"], input[type="email"],
        select,  input[type="color"] {
            padding: 10px;
            border: none;
            border-radius: 5px;
            margin-bottom: 10px;
            background-color: #f2f2f2;
            color: #666;
            font-size: 16px;
            font-family: 'Inter', sans-serif;
        }
       
        /* Styles the Superpower Range*/
        input[type='range'] {
            width: 100%;
            height: 5px;
            border-radius: 5px;
            outline: none;
            margin: 10px 0;
        }

        /* Adds shadow when the User selects an Input */
        input[type="text"]:focus, input[type="date"]:focus,
        input[type="email"]:focus, select:focus,
        input[type="color"]:focus, input[type="range"]:focus {
            background-color: #FFFFFF;
            box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
        }

        /* Styles the Submit Button */
        button {
            background-color: #0075FF;
            color: #FFFFFF;
            padding: 14px 20px;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s ease;
            height: 50px;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        /* Styles the Submit Button (Hover) */
        button:hover {
            opacity: 0.8;
        }
    </style>
</head>

<body>
    <div class ="maincontainer">
        <!--Profile Form and Your Data-->
        <div class ="container2">


            <!--Profile Form-->
            <div class ="pformcontainer">
                <h1><strong>Profile Form</strong></h1>
                <form method="POST" action="profile-form.php">


                    <!--Name-->
                    <label for="complete_name">Name:</label>
                    <input type="text" name="complete_name" required/> <br />


                    <!--Birthdate-->
                    <label for="birthdate">Birthdate:</label>
                    <input type="date" name="birthdate" required/><br />


                    <!--Email Address-->
                    <label for="email">Email Address:</label>
                    <input type="email" name="email" required/><br />
                   
                    <!--Program-->
                    <label for="email">Program:</label>
                    <select name="program" required>
                        <option value="BSCS">BS Computer Science</option>
                        <option value="BSIT">BS Information Technology</option>
                    </select>
                    <br />
                   
                    <!--Favorite Color-->
                    <label for="favorite_color">Favorite Color:</label>
                    <input type="color" name="favorite_color" /><br />
                   
                    <!--Superpower Level-->
                    <label for="superpower_level">Superpower Level:</label>
                    <input type="range" name="superpower_level" min="1" max="1000000" step="5000" /><br />
                   
                    <!--Button-->
                    <button>Submit</button>
                </form>
            </div>


            <div class ="container3">
                <!--Show Details-->
                <div class ="datacontainer">
                    <?php
                        //To Display the User's submitted Data
                        if ($_SERVER["REQUEST_METHOD"] == "POST"){
                            $complete_name = $_POST["complete_name"];
                            $birthdate = $_POST["birthdate"];
                            $email = $_POST["email"];
                            $program = $_POST["program"];
                            $favorite_color = $_POST["favorite_color"];
                            $superpower_level = $_POST["superpower_level"];
                       
                            echo "<h1>Your Data</h1>";
                            echo "<p><b>Name: </b>". $complete_name . "</p>";
                            echo "<p><b>Birthdate: </b>". $birthdate . "</p>";
                            echo "<p><b>Email Address: </b>". $email . "</p>";
                            echo "<p><b>Program: </b>". $program . "</p>";
                            echo "<p><b>Favorite Color: </b>". $favorite_color . "</p>";
                            echo "<p><b>Superpower Level: </b>". $superpower_level . "</p>";
                        } else {
                            echo "<h1>Your Data</h1>";
                            echo "<p><b>Name: </b></p>";
                            echo "<p><b>Birthdate: </b></p>";
                            echo "<p><b>Email Address: </b></p>";
                            echo "<p><b>Program: </b></p>";
                            echo "<p><b>Favorite Color: </b></p>";
                            echo "<p><b>Superpower Level: </b></p>";
                        }
                    ?>
                </div>
            </div>
            
        </div>
</body>
</html>