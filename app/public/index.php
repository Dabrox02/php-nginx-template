<?php
require './User.php';  // Incluye el archivo que define la clase User

include 'header.php';  // Incluye el encabezado

// Captura el valor pasado por la URL
$name = isset($_GET['name']) ? $_GET['name'] : 'Invitado';

// Crea una instancia de la clase User
$user = new User($name);
?>

<h2>Hola, <?php echo htmlspecialchars($user->getName()); ?>!</h2>
<p>Este es un ejemplo básico de una aplicación PHP.</p>

<?php
include 'footer.php';  // Incluye el pie de página
?>
