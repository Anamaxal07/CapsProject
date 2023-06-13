<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Registration</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <script src="index.js"></script>
</head>
<body>
<div>
    <form action="registration.php" method="post">
        <div class="container">
            <h1>Registration</h1>
            <p>Fill up the form with correct values.</p>

            <input type="text" name="firstname" required>
            <i class="fa-regular fa-user"></i>
            <label for="firstname"><b>First Name</b></label><br>
            
            <input type="number" name="age" required>
            <i class="fa-solid fa-font"></i>
            <label for="age"><b>Age</b></label>
            

                <!-- STUDENT DEPARTMENT -->
                <p><b>Student Department : <b></p>
            <select>  
                <option value="Select">Select</option>  
                <option value="Basic_ed">Basic Education Department</option>  
                <option value="College">College Department</option>  
            </select><br>

                <!-- STUDENT COURSE -->
                <p><b>Student Course : <b></p>
            <select>  
                <option value="Select">Select</option>  
                <option value="BSIT">BS Information Technology</option>  
                <option value="BScrim">BS Criminology</option> 
                <option value="BSIT">BS Toursim Management</option>  
                <option value="BSIT">BS Hospitality Management</option>  
            </select><br><br>

            <label for="section_year"><b>Year Level & Section :</b></label><br>
            <input type="text" name="section_year" required><br><br>

                
                <!-- AVAILABLE EVENTS -->
                <label><b>Available Events:</b></label><br><br>

                <label>Event 1 </label>
                <input type="radio" name="event" value="event1" checked>
                <label>Price = 150 </label><br>
                
                <label>Event 2</label>
                <input type="radio" name="event" value="event2" >
                <label>Price = 150 </label><br>

                <label>Event 3</label>
                <input type="radio" name="event" value="event3" >
                <label>Price = 150 </label><br><br>
            
            <label for="email"><b>Email Address:</b></label>
            <input type="email" name="email" required><br><br>

            <label for="token"><b>Token:</b></label>
            <input type="number" name="token" required><br><br>

            <input type="submit" name="create" value="Submit">  
        </div>
    </form>
</div>


</body>
</html>