<head>


    <link rel="stylesheet" href="css/procesarregistro.css">
</head>

<?php
// Verificar si se recibieron datos del formulario
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

    // Recibir datos del formulario
    $cedula = mysqli_real_escape_string($conn, $_POST["registerCedula"]);
    $nombre = mysqli_real_escape_string($conn, $_POST["registerUsername"]);
    $email = mysqli_real_escape_string($conn, $_POST["registerEmail"]);
    $telefono = mysqli_real_escape_string($conn, $_POST["registerPhone"]);
    $apellidos = mysqli_real_escape_string($conn, $_POST["registerLastName"]);
    $fechaNacimiento = $_POST["registerBirthDate"];

    // Hashing de la contraseña
    $password = $_POST["registerPassword"]; // No es necesario escapar aquí, ya que no se inserta en la consulta
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    // Procesar otros campos como la imagen de perfil si es necesario
    if (isset($_FILES['registerProfileImage'])) {
        $uploadDir = "C:\Program Files\Ampps\www\Paginawebhospital(amppstest) nuevo\ProyectoWebhospital\imagenesbd"; // Ruta donde se almacenarán las imágenes
        $uploadedFile = $_FILES['registerProfileImage']['tmp_name'];
        $imageFileName = $_FILES['registerProfileImage']['name'];
        $targetPath = $uploadDir . $imageFileName;

        $baseURL = "http://localhost/Paginawebhospital(amppstest)%20nuevo/ProyectoWebhospital/";
        $imageURL = $baseURL . "imagenes/" . urlencode($imageFileName);

        if (move_uploaded_file($uploadedFile, $targetPath)) {
            // Insertar datos en la base de datos, incluyendo la ruta de la imagen
            $sql = "INSERT INTO usuarios (cedula, nombre, email, telefono, apellidos, fecha_nacimiento, password, perfil_image) 
                    VALUES ('$cedula', '$nombre', '$email', '$telefono', '$apellidos', '$fechaNacimiento', '$password', '$targetPath')";

            if ($conn->query($sql) === TRUE) {
                echo "Registro exitoso";
            } else {
                echo "Error al registrar: " . $conn->error;
            }
        } else {
            echo "Error al subir la imagen.";
        }
    } else {
        $sql = "INSERT INTO usuarios (cedula, nombre, email, telefono, apellidos, fecha_nacimiento, password) 
                VALUES ('$cedula', '$nombre', '$email', '$telefono', '$apellidos', '$fechaNacimiento', '$password')";
        if ($conn->query($sql) === TRUE) {
            echo "Registro exitoso";
        } else {
            echo "Error al registrar: " . $conn->error;
        }
    }
    $conn->close();
} else {
    echo "No se recibieron datos del formulario.";
}
?>