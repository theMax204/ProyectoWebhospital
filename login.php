<?php
session_start();

// Verificar si se recibieron datos del formulario de inicio de sesión
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Conectar a la base de datos (reemplaza con tus propios valores)
    $servername = "localhost";
    $username = "root";
    $password = "mysql";
    $dbname = "bdapphospital";

    $conn = new mysqli($servername, $username, $password, $dbname);

    // Verificar la conexión
    if ($conn->connect_error) {
        die("Error de conexión: " . $conn->connect_error);
    }

    // Recibir datos del formulario de inicio de sesión
    $cedula = mysqli_real_escape_string($conn, $_POST["loginUsername"]);
    $password = $_POST["loginPassword"];

    // Buscar el usuario en la base de datos por cédula
    $sql = "SELECT * FROM usuarios WHERE cedula = '$cedula'";
    $result = $conn->query($sql);

    if ($result->num_rows == 1) {
        $row = $result->fetch_assoc();
        
        // Verificar la contraseña utilizando password_verify
        if (password_verify($password, $row["password"])) {
            // Contraseña correcta, inicia sesión
            $_SESSION["user_id"] = $row["id"];
            $_SESSION["username"] = $row["nombre"];
            
            // Redirige al usuario a la página principal u otra página después del inicio de sesión
            header("Location: principal.php");
            exit();
        } else {
            echo "Contraseña incorrecta";
        }
    } else {
        echo "Usuario no encontrado";
    }

    $conn->close();
}

// Si el usuario ya ha iniciado sesión, redirige a la página principal
if (isset($_SESSION["user_id"])) {

    header("Location: index.php");
    exit();
}
?>