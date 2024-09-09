<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {


            display: flex;
            flex-direction: column;
            /* Stack items vertically */
            align-items: center;
            /* Center the parallel divisions horizontally */
            width: 100%;
            /* Full width of the page */
            height: 100vh;
            /* Full height of the viewport */
            box-sizing: border-box;
        }

        .booking {
            background-color: rgb(13, 60, 92);
            padding: 60px;
            margin: 60px;
            width: 300px;
            border-radius: 4px;
            box-shadow: 10px 10px 5px black;
            align-items: center;
        }

        h1 {
            font-style: italic;
            margin-bottom: 10px;
        }

        input {
            width: 100%;
            padding: 10px;
            margin-bottom: 5px;
            border: 1px solid #ccc;
            border-radius: 3px;
        }

        button {
            width: 50%;
            padding: 10px;
            background-color: #0d0d0e;
            color: #fff;
            border: none;
            border-radius: 3px;
            cursor: pointer;
        }

        button:hover {
            background-color: #d6dbdb;
            ;

        }

        .heading {
            width: 100%;
            /* Full width of the container */
            background-color: #7b96b4;
            padding: 1px;
            text-align: center;
            justify-content: center;
            border-bottom: 1px solid #ccc;
        }
    </style>
</head>

<body>

    <div class="heading">
        <h1>KENDRICK UNIVERSITY ROOMS BOOKING SYSTEM</h1>
    </div>

    <h3>WELCOME 
        <?php 
        session_start();
        echo $_SESSION["firstname"]; ?>

        TO OUR SERVICE
    </h3>

    <div class="booking">
        <form method="POST" action="booking-form.php">
            <label for="house">HOSTEL NAME:</label>
            <select name="selected_option" id="hostel" required>
                <!-- <option value="selected_option" disabled selected>Select your option</option> -->
                <option value="NKURUMAH">NKURUMAH</option>
                <option value="NYERERE">NYERERE</option>
                <option value="SOKOINE">SOKOINE</option>
                <option value="DAG">DAG</option>
                <option value="MANDELA">MANDELA</option>

            </select><br><br>



            <button type="submit">Submit</button>
        </form>
    </div>
</body>

</html>