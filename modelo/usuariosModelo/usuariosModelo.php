
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
        $sql->bindValue("correo", $this->getCorreo());

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
}
