<?php
// Configurar los parámetros de conexión
$host = "mysql-serv-prd.mysql.database.azure.com";  // Servidor de MySQL (asegúrate de usar el nombre correcto)
$username = "Dcaldero5";  // Tu usuario de MySQL
$password = "David__1232@";  // Tu contraseña de MySQL
$database = "webapp";  // Nombre de tu base de datos

// Ruta del certificado de la CA (deberás reemplazar con la ruta donde lo guardaste)
$ca_cert_path = "/path/to/BaltimoreCyberTrustRoot.crt.pem";

// Iniciar la conexión
$con = mysqli_init();

// Configurar SSL
mysqli_ssl_set($con, NULL, NULL, $ca_cert_path, NULL, NULL);

// Conectar a MySQL con SSL
if (mysqli_real_connect($con, $host, $username, $password, $database, 3306, NULL, MYSQLI_CLIENT_SSL)) {
    echo "Conexión exitosa a la base de datos MySQL con SSL!";
} else {
    echo "Error de conexión: " . mysqli_connect_error();
}

// Cerrar la conexión
mysqli_close($con);
?>

