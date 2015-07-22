
<?php
/* CONEXION CON LA BASE DE DATOS */
$conn = new mysqli($host, $usuario, $cont, $bdd);

if ($conn->connect_error)
    die($conn->connect_error);



if ($_POST) {
    $usuar = $_POST['usuario'];


    $q_usu = "SELECT * FROM usuarios WHERE usuario = '" . $user . "'";
    $result = $conn->query($q_usua);
    $num_rows = $result->num_rows;


    if ($num_rows != 0) {
        echo "El nombre de usuario ya existe";
    }
}
function isUsernameAvailable($username)
{
    $this->db->select('usuario');
    $this->db->where('LOWER(usuario)=', strtolower($usuario));
    $query = $this->db->get($this->usersTable);
    if ($query->num_rows() == 0)
    {
        return true;
    }
    else
    {
        return false;
    }
}
?>
