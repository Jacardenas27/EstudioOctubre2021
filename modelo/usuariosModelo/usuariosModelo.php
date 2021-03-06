
<?php
class usuarioModelo
{

    private $IdUsuario = 0;
    private $Nombres = "";
    private $Apellidos = "";
    private $FechaNacimiento = "";
    private $Correo = "";
    private $Contrasena = "";
    private $Administrador = 0;
    private $Estado = 0;
    private $IdAvatar = 0;
    private $NombreAvatar = "";

    function setIdUsuario($IdUsuario)
    {
        $this->IdUsuario = $IdUsuario;
    }
    function getIdUsuario()
    {
        return $this->IdUsuario;
    }
    function setNombres($Nombres)
    {
        $this->Nombres = $Nombres;
    }
    function getNombres()
    {
        return $this->Nombres;
    }

    function setApellidos($Apellidos)
    {
        $this->Apellidos = $Apellidos;
    }
    function getApellidos()
    {
        return $this->Apellidos;
    }

    function setFechaNacimiento($FechaNacimiento)
    {
        $this->FechaNacimiento = $FechaNacimiento;
    }
    function getFechaNacimiento()
    {
        return $this->FechaNacimiento;
    }

    function setCorreo($Correo)
    {
        $this->Correo = $Correo;
    }
    function getCorreo()
    {
        return $this->Correo;
    }

    function setContrasena($Contrasena)
    {
        $this->Contrasena = $Contrasena;
    }
    function getContrasena()
    {
        return $this->Contrasena;
    }

    function setAdministrador($Administrador)
    {
        $this->Administrador = $Administrador;
    }
    function getAdministrador()
    {
        return $this->Administrador;
    }


    function setEstado($Estado)
    {
        $this->Estado = $Estado;
    }
    function getEstado()
    {
        return $this->Estado;
    }


    function setIdAvatar($IdAvatar)
    {
        $this->IdAvatar = $IdAvatar;
    }
    function getIdAvatar()
    {
        return $this->IdAvatar;
    }


    function setNombreAvatar($NombreAvatar)
    {
        $this->NombreAvatar = $NombreAvatar;
    }
    function getNombreAvatar()
    {
        return $this->NombreAvatar;
    }

    function iniciarSesion()
    {
        $Db = conexion::conectar();

        $sql = $Db->prepare("SELECT usuarios.*, avatares.nombreAvatar FROM usuarios 
         JOIN avatares ON  usuarios.IdAvatar = avatares.idAvatar
          WHERE correo = :correo ");
        $sql->bindValue("correo", strtolower($this->getCorreo()));

        try {

            $sql->execute();
            $Usuario = $sql->fetch(PDO::FETCH_ASSOC);
            if (isset($Usuario["idUsuario"]) && password_verify($this->getContrasena(), $Usuario["contrasena"])) {
                return $Usuario;
            }
            return [];
        } catch (Exception $e) {
            echo "Ha ocurrido un error: " . $e->getMessage();
        }
    }


    function Registrarse()
    {

        $RegistroExitoso = false;
        $Db = conexion::conectar();
        $sql = $Db->prepare("INSERT INTO USUARIOS VALUES (NULL, :Nombres,:Apellidos,:FechaNacimiento,:Correo,:Contrasena,0,1,1 ) ");

        $sql->bindValue("Nombres", strtoupper($this->getNombres()));
        $sql->bindValue("Apellidos", strtoupper($this->getApellidos()));
        $sql->bindValue("FechaNacimiento", $this->getFechaNacimiento());
        $sql->bindValue("Correo", strtolower($this->getCorreo()));
        $sql->bindValue("Contrasena", password_hash($this->getContrasena(), NULL));

        try {
            $sql->execute();
            $RegistroExitoso = true;
            return $RegistroExitoso;
        } catch (Exception $e) {
            echo ("Ha ocurrido un error" . $e->getMessage());
        }
    }

    function ListarUsuarios()
    {

        $Db = conexion::conectar();
        $sql = $Db->query("SELECT idUsuario,nombres,apellidos,fechaNacimiento,correo,administrador,estado FROM usuarios ORDER BY nombres ASC");
        try {
            $sql->execute();
            $Usuarios = $sql->fetchAll(PDO::FETCH_ASSOC);
            return $Usuarios;
        } catch (Exception  $e) {
            echo ("Ha ocurrido un error" . $e->getMessage());
        }
    }


    function ListarDatosUsuario(){

        $Db = conexion::conectar();
       $sql= $Db->prepare("SELECT u.idUsuario,u.nombres,u.apellidos,u.fechaNacimiento,u.correo,u.administrador,u.estado,u.idAvatar,a.nombreAvatar FROM usuarios u JOIN avatares a ON u.idAvatar= a.idAvatar WHERE u.idUsuario=:idUsuario");
       $sql->bindValue('idUsuario',$this->getIdUsuario());
       
       try {
        $sql->execute();
        $Usuario= $sql->fetch(PDO::FETCH_ASSOC);

        return $Usuario;

       } catch (Exception $e) {
          echo("ha ocurrido un error" .$e->getMessage());
       }


    }
}
