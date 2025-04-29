<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Profile</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #02c9dc;
            padding: 20px;
        }

        h1 {
            text-align: center;
        }

        form {
            background: white;
            padding: 20px;
            width: 400px;
            margin: auto;
            border-radius: 10px;
            box-shadow: 20px 20px 20px rgba(1, 1, 1, 0.2);
        }

        select,
        textarea,
        input[type="text"],
        input[type="email"],
        input[type="date"],
        input[type="file"] {
            width: 100%;
            padding: 8px;
            margin-top: 5px;
            margin-bottom: 15px;
            border-radius: 5px;
            border: 1px solid #ccc;
        }

        button {
            background-color: #3498db;
            color: white;
            border: none;
            padding: 10px;
            border-radius: 5px;
            cursor: pointer;
            width: 100%;
        }

        button:hover {
            background-color: #2980b9;
        }
    </style>
</head>

<body>

    <div class="form">
        <h1>Register Here</h1>
        <form action="data_form.php" method="POST" enctype="multipart/form-data">

            <label>Full Name:</label>
            <input type="text" placeholder="Enter Your Name" name="name" required>

            <label>Gender:</label><br>
            <input type="radio" name="gender" value="Male" required> Male
            <input type="radio" name="gender" value="Female" required> Female
            <input type="radio" name="gender" value="Other" required> Other
            <br><br>

            <label>Date of Birth:</label>
            <input type="date" name="dob" required>

            <label>Email Address:</label>
            <input type="email" name="email" placeholder="Enter Your Email" required>

            <label>Phone Number:</label>
            <input type="text" name="phone" required>

            <label>Address:</label>
            <textarea name="textarea" placeholder="Enter your address" required></textarea>

            <label>Country:</label>
            <select name="country" required>
                <option value="">-- Select Country --</option>
                <option value="India">India</option>
                <option value="United States">United States</option>
                <option value="United Kingdom">United Kingdom</option>
                <option value="Canada">Canada</option>
                <option value="Australia">Australia</option>
                <option value="Germany">Germany</option>
                <option value="France">France</option>
            </select>

            <label>Profile Photo:</label>
            <input type="file" name="photo" accept="image/*" required>

            <button type="submit">Submit</button>

        </form>
    </div>

</body>

</html>