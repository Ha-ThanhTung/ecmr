<?php
// Validate and sanitize user inputs
$uname = trim($_POST["username"]);
$uaccount = trim($_POST["useraccount"]);
$upassword = trim($_POST["userpassword"]);
$uemail = trim($_POST["useremail"]);
$usex = trim($_POST["usersex"]);
$ujob = trim($_POST["userjob"]);
$unationality = trim($_POST["usernationality"]);
$unote = trim($_POST["usernote"]);

// Validate inputs
$errors = [];
if (empty($uname)) {
    $errors[] = "Chưa nhập tên người dùng";
}
if (empty($uaccount)) {
    $errors[] = "Chưa nhập tài khoản người dùng";
}
if (empty($upassword)) {
    $errors[] = "Chưa nhập mật khẩu";
}
if (!filter_var($uemail, FILTER_VALIDATE_EMAIL)) {
    $errors[] = "Email không hợp lệ";
}
if (!empty($errors)) {
    echo '<link href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" rel="stylesheet">';
    echo '<div class="col-8 m-auto">';
    echo '<div class="alert alert-danger mt-5 text-center">';
    foreach ($errors as $error) {
        echo $error . '<br>';
    }
    echo '<button class="btn btn-primary" onclick="history.back()">Trở lại</button>';
    echo '</div>';
    echo '</div>';
} else {
    // Database connection
    require_once 'Connectdb.php';
    
    // Check if username or email already exists
    $queryUseraccount = "SELECT COUNT(*) FROM user WHERE username = :uaccount";
    $queryEmail = "SELECT COUNT(*) FROM user WHERE useremail = :uemail";
    
    $stmtUseraccount = $conn->prepare($queryUseraccount);
    $stmtUseraccount->bindParam(':uaccount', $uaccount);
    $stmtUseraccount->execute();
    $countUseraccount = $stmtUseraccount->fetchColumn();

    $stmtEmail = $conn->prepare($queryEmail);
    $stmtEmail->bindParam(':uemail', $uemail);
    $stmtEmail->execute();
    $countEmail = $stmtEmail->fetchColumn();
    if ($countUseraccount > 0) {
        echo "<script>alert('Tài khoản đã tồn tại');</script>";
    } elseif ($countEmail > 0) {
        echo "<script>alert('Email đã tồn tại');</script>";
    } else {
        // Insert user data into the database
        $sql = "INSERT INTO user(username, useraccount, userpassword, useremail, usersex, userjob, usernationality, usernote) VALUES (:uname, :uaccount, :upassword, :uemail, :usex, :ujob, :unationality, :unote)";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':uname', $uname);
        $stmt->bindParam(':uaccount', $uaccount);
        $stmt->bindParam(':upassword', $upassword);
        $stmt->bindParam(':uemail', $uemail);
        $stmt->bindParam(':usex', $usex);
        $stmt->bindParam(':ujob', $ujob);
        $stmt->bindParam(':unationality', $unationality);
        $stmt->bindParam(':unote', $unote);

        if ($stmt->execute()) {
        echo "<script>alert('Thành công');</script>";
            // Gửi mail
        } else {
        echo "<script>alert('Thất bại');</script>";
        }
    }
}
?>
