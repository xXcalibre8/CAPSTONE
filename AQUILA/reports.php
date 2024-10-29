<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AQUILA</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            color: white;
            overflow: hidden; /* Prevents scrollbars from appearing */
        }

        #myVideo {
            position: fixed;
            right: 0;
            bottom: 0;
            min-width: 100%;
            min-height: 100%;
            z-index: -1; /* Send video to the background */
        }

        .welcome-container {
            position: fixed;
            top: 10px;
            right: 10px; /* Aligns the container to the right side */
            display: flex;
            align-items: center;
            color: white;
            font-size: 24px;
            font-weight: bold;
        }

        .welcome-container img {
            width: 40px; /* Set the width of the logo */
            height: 40px; /* Set the height of the logo */
            margin-right: 10px; /* Space between the logo and text */
        }

        .dashboard-container {
            position: fixed;
            left: 0;
            top: 0;
            height: 100%;
            width: 250px;
            background-color: rgba(0, 0, 0, 0.8); /* Slight transparency */
            border-right: 2px solid #0390fc; /* Add a border to the right */
            padding: 20px;
            box-shadow: 2px 0 5px rgba(0,0,0,0.5); /* Shadow for the sidebar */
            display: flex;
            flex-direction: column;
            justify-content: flex-start;
            z-index: 10; /* Ensure it is above the video */
            transform: translateX(-100%); /* Start off-screen */
            transition: transform 0.3s ease; /* Smooth slide-in and out */
        }

        .dashboard-container.active {
            transform: translateX(0); /* Slide into view */
        }

        .dashboard-container h2 {
            margin: 0 0 20px 0;
            color: #0390fc;
            text-align: center;
            font-size: 28px;
        }

        .dashboard-container ul {
            list-style-type: none;
            padding: 0;
        }

        .dashboard-container ul li {
            padding: 10px 0;
            border-bottom: 1px solid #ccc;
            cursor: pointer;
        }

        .dashboard-container ul li:hover {
            background-color: #0390fc;
        }

        .dashboard-container ul li a {
            color: white;
            text-decoration: none;
            font-size: 18px;
        }

        /* Arrow button styles */
        .toggle-button {
            position: fixed;
            left: 10px; /* Place it near the left side of the screen */
            top: 20px;
            font-size: 20px;
            padding: 10px;
            background-color: #4287f5;
            color: white;
            border: none;
            cursor: pointer;
            z-index: 11; /* Ensure the button is above the dashboard */
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }

        .toggle-button:hover {
            background-color: #007bb5; /* Darker shade on hover */
        }

        /* Back button styles */
        .back-button {
            position: fixed;
            top: 10px;
            left: 100px; /* Adjust to desired position */
            padding: 10px 15px;
            background-color: #4287f5;
            color: white;
            border: none;
            cursor: pointer;
            border-radius: 5px;
            font-size: 18px;
            z-index: 11; /* Ensure the button is above the video */
            transition: background-color 0.3s ease;
        }

        .back-button:hover {
            background-color: #007bb5; /* Darker shade on hover */
        }

        .arrow {
            font-size: 24px; /* Adjust size as needed */
        }
    </style>
</head>

<body>

<!-- Background video -->
<video autoplay muted loop id="myVideo">
    <source src="bg.mp4" type="video/mp4">
</video>

<div class="welcome-container">
    <img src="aquila.png" alt="Logo"> 
    <span>WELCOME, ADMIN</span>
</div>

<!-- Back to index button -->
<button class="back-button" onclick="window.location.href='index.php';">Back to Dashboard</button>

<!-- Toggle button for showing the dashboard -->
<button class="toggle-button" onclick="toggleDashboard()">
    <span class="arrow">➡</span>
</button>

<!-- Admin Dashboard Container -->
<div class="dashboard-container" id="dashboard">
    <h2>Dashboard</h2>
    <ul>
        <li><a href="employees.php">Employees</a></li>
        <li><a href="add_employees.php">Add Employee</a></li>
        <li><a href="tasks.php">Tasks</a></li>
        <li><a href="reports.php">Reports</a></li>
        <li><a href="#">Logout</a></li>
    </ul>
</div>

<script>
    // Function to toggle the dashboard
    function toggleDashboard() {
        var dashboard = document.getElementById('dashboard');
        dashboard.classList.toggle('active'); // Toggle the 'active' class

        // Change the arrow direction based on dashboard visibility
        var arrow = document.querySelector('.arrow');
        arrow.textContent = dashboard.classList.contains('active') ? '⬅' : '➡'; // Change arrow direction
    }
</script>

</body>
</html>
