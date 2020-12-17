<!-- <?php


include 'db_connction.php';

$errors = array();
$username = "";
$email = "";

if (isset($_POST['signup-btn'])){
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $passwordConf = $_POST['passwordConf'];

    if (empty($username)){
        $errors['username'] = "닉네임을 입력하세요.";
    }
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
        $errors['email'] = "이메일 형식이 아닙니다.";
    }
    if (empty($email)){
        $errors['email'] = "이메일을 입력하세요.";
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
    $stmt->exec();
    $result = $stmt->get_result();
    $userCount = $result->num_rows;
    $stmt->close();

    if ($userCount > 0){
        $errors['email'] = "이메일이 이미 존재합니다.";
    }

    if (count($errors) === 0){
        $password = password_hash($password, PASSWORD_DEFAULT);

        $sql = "INSERT INTO members (username, email, password) VALUES ('$username', '$email' , '$password')";
        mysqli_query($conn, $sql);
        mysqli_close($conn);

        echo "
        <script>
        window.location.href='index.php';
        </script>
        ";
        
    }
}
?> -->