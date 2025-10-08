<!DOCTYPE html>
<html>
<head>
    <title>Student Registration Form</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 30px;
        }
        input, select {
            padding: 8px;
            width: 250px;
            margin-bottom: 10px;
        }
        input[type="submit"] {
            width: auto;
            padding: 8px 15px;
        }
        .error {
            color: red;
            font-size: 0.9em;
        }
        .success {
            color: green;
            font-weight: bold;
        }
        label {
            display: block;
            margin-top: 10px;
        }
    </style>
</head>
<body>

<h2>Student Registration Form</h2>

<?php
$name = $email = $mobile = $gender = $course = $password = $confirm_password = "";
$nameErr = $emailErr = $mobileErr = $genderErr = $courseErr = $passwordErr = $confirmPasswordErr = "";
$successMsg = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Name validation
    if (empty($_POST["name"])) {
        $nameErr = "Name is required";
    } else {
        $name = htmlspecialchars($_POST["name"]);
        if (!preg_match("/^[a-zA-Z ]*$/", $name)) {
            $nameErr = "Only letters and spaces allowed";
        }
    }

    // Email validation
    if (empty($_POST["email"])) {
        $emailErr = "Email is required";
    } else {
        $email = htmlspecialchars($_POST["email"]);
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $emailErr = "Invalid email format";
        }
    }

    // Mobile validation
    if (empty($_POST["mobile"])) {
        $mobileErr = "Mobile number is required";
    } else {
        $mobile = htmlspecialchars($_POST["mobile"]);
        if (!preg_match("/^[0-9]{10}$/", $mobile)) {
            $mobileErr = "Mobile number must be 10 digits";
        }
    }

    // Gender validation
    if (empty($_POST["gender"])) {
        $genderErr = "Gender is required";
    } else {
        $gender = $_POST["gender"];
    }

    // Course validation
    if (empty($_POST["course"])) {
        $courseErr = "Please select a course";
    } else {
        $course = $_POST["course"];
    }

    // Password validation
    if (empty($_POST["password"])) {
        $passwordErr = "Password is required";
    } else {
        $password = $_POST["password"];
        $pattern = "/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&]).{8,}$/";
        if (!preg_match($pattern, $password)) {
            $passwordErr = "Password must be at least 8 characters, include uppercase, lowercase, number, and special character";
        }
    }

    // Confirm password
    if (empty($_POST["confirm_password"])) {
        $confirmPasswordErr = "Confirm your password";
    } else {
        $confirm_password = $_POST["confirm_password"];
        if ($confirm_password !== $password) {
            $confirmPasswordErr = "Passwords do not match";
        }
    }

    // If no errors, show success
    if (empty($nameErr) && empty($emailErr) && empty($mobileErr) && empty($genderErr) && empty($courseErr) && empty($passwordErr) && empty($confirmPasswordErr)) {
        $successMsg = "Registration Successful!";
    }
}
?>

<form method="post" action="">
    <label>Name:</label>
    <input type="text" name="name" value="<?php echo $name; ?>">
    <span class="error"><?php echo $nameErr; ?></span>

    <label>Email:</label>
    <input type="text" name="email" value="<?php echo $email; ?>">
    <span class="error"><?php echo $emailErr; ?></span>

    <label>Mobile Number:</label>
    <input type="text" name="mobile" value="<?php echo $mobile; ?>">
    <span class="error"><?php echo $mobileErr; ?></span>

    <label>Gender:</label>
    <input type="radio" name="gender" value="Male" <?php if($gender=="Male") echo "checked"; ?>> Male
    <input type="radio" name="gender" value="Female" <?php if($gender=="Female") echo "checked"; ?>> Female
    <span class="error"><?php echo $genderErr; ?></span>

    <label>Course:</label>
    <select name="course">
        <option value="">Select Course</option>
        <option value="BCA" <?php if($course=="BCA") echo "selected"; ?>>BCA</option>
        <option value="BSc" <?php if($course=="BSc") echo "selected"; ?>>BSc</option>
        <option value="BA" <?php if($course=="BA") echo "selected"; ?>>BA</option>
    </select>
    <span class="error"><?php echo $courseErr; ?></span>

    <label>Password:</label>
    <input type="password" name="password">
    <span class="error"><?php echo $passwordErr; ?></span>

    <label>Confirm Password:</label>
    <input type="password" name="confirm_password">
    <span class="error"><?php echo $confirmPasswordErr; ?></span>

    <br>
    <input type="submit" value="Register">
</form>

<?php
if ($successMsg) {
    echo "<p class='success'>$successMsg</p>";
    echo "<h3>Submitted Details:</h3>";
    echo "Name: $name<br>Email: $email<br>Mobile: $mobile<br>Gender: $gender<br>Course: $course<br>";
}
?>

</body>
</html>
