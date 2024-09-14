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
            align-items: center;
            width: 100%;
            height: 100vh;
            box-sizing: border-box;
        }

        h1 {
            font-style: italic;
            margin-bottom: 10px;
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

/* 
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        } */
        form {
            max-width: 400px;
            margin: 0 auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            background-color: #f9f9f9;
        }
        input, select, button {
            width: 100%;
            padding: 10px;
            margin: 8px 0;
            border-radius: 5px;
            border: 1px solid #ccc;
        }
        button {
            background-color: #4CAF50;
            color: white;
            border: none;
            cursor: pointer;
        }
        button:hover {
            background-color: #45a049;
        }
    </style>
</head>

<body>

    <div class="heading">
        <h1>KENDRICK UNIVERSITY ROOMS BOOKING SYSTEM</h1>
    </div>

<h2>Room Booking Form</h2>

<form action="bookings-form.php" method="POST">
    <!-- User Information (hidden if logged in) -->
    <label for="fullname">Username:</label>
    <input type="text" id="username" name="fullname" placeholder="Your username" required>

    <label for="email">Email:</label>
    <input type="email" id="email" name="email" placeholder="Your email" required>

    <!-- Hostels Dropdown -->
    <label for="hostel">Select Hostel:</label>
    <select id="hostel" name="hostel" onchange="fetchRooms(this.value)" required>
        <option value="">-- Select a Hostel --</option>
        <!-- Hostels should be dynamically populated here using server-side code or JavaScript -->
        <option value="1">MANDELA</option>
        <option value="2">SOKOINE</option>
        <option value="3">NYERERE</option>
        <option value="3">DAG</option>
        <option value="3">NKURUMAH</option>
    </select>

    <!-- Rooms Dropdown (populated based on selected hostel) -->
    <label for="room">Select Room:</label>
    <select id="room" name="room" required>
        <option value="">-- Select a Room --</option>
        <!-- Rooms will be dynamically loaded based on the hostel selection -->
    </select>

    <!-- Booking Date (optional) -->
    <label for="booking_date">Booking Date:</label>
    <input type="date" id="booking_date" name="booking_date" required>

    <!-- Submit Button -->
    <button type="submit">Book Room</button>
</form>

<!-- JavaScript to dynamically load rooms based on selected hostel -->
<script>
    function fetchRooms(hostelId) {
        // Clear the room dropdown first
        const roomSelect = document.getElementById('room');
        roomSelect.innerHTML = '<option value="">-- Select a Room --</option>';

        // If no hostel is selected, return
        if (!hostelId) return;

        // Sample static data for demonstration. Replace with an actual API call or server-side logic.
        const roomsData = {
            '1': ['Room 101', 'Room 102', 'Room 103'],
            '2': ['Room 201', 'Room 202'],
            '3': ['Room 301', 'Room 302', 'Room 303', 'Room 304']
        };

        // Get the rooms for the selected hostel
        const rooms = roomsData[hostelId] || [];

        // Populate the room dropdown with options
        rooms.forEach((room, index) => {
            const option = document.createElement('option');
            option.value = index + 1;  // This value would normally be the room_id
            option.text = room;
            roomSelect.appendChild(option);
        });
    }
</script>

</body>
</html>
