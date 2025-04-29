
<?php
$name = $_POST['name'];
$gender = $_POST['gender'];
$dob = $_POST['dob'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$textarea = $_POST['textarea'];
$country = $_POST['country']; 
$photo = $_FILES['photo'];
if (isset($_FILES['photo'])) { 
    $photoName = $_FILES['photo']['name'];
    $photoTmpName = $_FILES['photo']['tmp_name'];
    $photoPath = "uploads/" . basename($photoName);
    move_uploaded_file($photoTmpName,$photoPath);

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Profile</title>
    <style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: 'Poppins', sans-serif;
    }

    body {
        background: linear-gradient(135deg, #74ebd5, #ACB6E5);
        min-height: 100vh;
        display: flex;
        align-items: center;
        justify-content: center;
        padding: 20px;
    }

    .container {
        background: #fff;
        padding: 30px;
        border-radius: 15px;
        box-shadow: 0 4px 8px rgba(0,0,0,0.1);
        max-width: 800px;
        width: 100%;
    }
    p{
        font-weight: bold;
    }

    h2 {
        text-align: center;
        margin-bottom: 20px;
        color: #333;
    }

    .content {
        display: flex;
        flex-wrap: wrap;
        gap: 30px;
    }

    .detail, .photo {
        flex: 1 1 300px;
    }

    .detail p {
        font-size: 16px;
        margin-bottom: 12px;
        color: #555;
    }

    .photo {
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
    }

    .photo img {
        width: 250px;
        height: 250px;
        object-fit: cover;
        border-radius: 20px;
        border: 4px solid #74ebd5;
    }

    .photo p {
        font-size: 16px;
        color: #999;
    }

    @media (max-width: 768px) {
        .content {
            flex-direction: column;
            align-items: center;
        }
    }
</style>

</head>
<body>
    <div class="container">
        <h2>Registration Details</h2>
        <div class="content">
            <div class="detail">
                <p>Full Name: <?php echo $name; ?></p>
                <p>Gender: <?php echo $gender; ?></p>
                <p>Date of Birth: <?php echo $dob; ?></p>
                <p>Email Address: <?php echo $email; ?></p>
                <p>Phone Number: <?php echo $phone; ?></p>
                <p>Address: <?php echo $textarea; ?></p>
                <p>Country: <?php echo $country; ?></p>
            </div>
            <div class="photo">
                <?php if (!empty($photoPath)) { ?>
                    <img src="<?php echo $photoPath; ?>" alt="Uploaded Photo" >
                <?php } else { ?>
                    <p>No photo uploaded.</p>
                <?php } ?>
            </div>
        </div>
    </div>

</body>
</html>
