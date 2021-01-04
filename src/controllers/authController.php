<?php
session_start();

require 'config/db_conn.php';

$errors = array();
$username = "";
$email = "";

// 회원가입 버튼을 클릭했을 때
if (isset($_POST['signup-btn'])){
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $passwordConf = $_POST['passwordConf'];

    if (empty($username)){
        $errors['username'] = "닉네임을 입력하세요.";
    }
    if (empty($email)){
        $errors['email'] = "이메일을 입력하세요.";
    }
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
        $errors['email'] = "이메일 형식이 아닙니다.";
    }
    if (empty($password)){
        $errors['password'] = "비밀번호를 입력하세요.";
    } 
    if ($password !== $passwordConf){
        $errors['password'] = "비밀번호가 일치하지 않습니다.";
    }

    $emailQuery = "SELECT * FROM members WHERE email=? LIMIT 1";
    $stmt = $conn->prepare($emailQuery);
    $stmt->bind_param('s', $email);
    $stmt->execute();
    $result = $stmt->get_result();
    $userCount = $result->num_rows;
    $stmt->close();

    if ($userCount > 0){
        $errors['email'] = "이메일이 이미 존재합니다.";
    }

    if (count($errors) === 0){
        $password = password_hash($password, PASSWORD_DEFAULT);
        $token = bin2hex(random_bytes(50));
        $verified = false;

        $sql = "INSERT INTO members (username, email, verified, token, password) VALUES (?, ?, ?, ?, ?)";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param('ssbss', $username, $email, $verified, $token, $password);
        
        if($stmt->execute()) {
            $user_id = $conn->insert_id;
            $_SESSION['id'] = $user_id;
            $_SESSION['username'] = $username;
            $_SESSION['email'] = $email;
            $_SESSION['verified'] = $verified;

            header('location: index.php');
            exit();
        }else{
            $errors['db_error'] = "Database error: failed to register";
        }
    }
}