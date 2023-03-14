<?php

namespace App\Entity;

use App\Repository\ProveedorRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ProveedorRepository::class)
 */
class Proveedor
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=40)
     */
    private $Nombre;

    /**
     * @ORM\Column(type="string", length=60)
     */
    private $Correo_electronico;

    /**
     * @ORM\Column(type="string", length=15)
     */
    private $Telefono_de_Contacto;

    /**
     * @ORM\Column(type="string", length=25)
     */
    private $Tipo_de_Proveedor;

    /**
     * @ORM\Column(type="string", length=20)
     */
    private $Estado;

    /**
     * Summary of getId
     * @return int|null
     */
    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNombre(): ?string
    {
        return $this->Nombre;
    }

    public function setNombre(string $Nombre): self
    {
        $this->Nombre = $Nombre;

        return $this;
    }

    public function getCorreoElectronico(): ?string
    {
        return $this->Correo_electronico;
    }

    public function setCorreoElectronico(string $Correo_electronico): self
    {
        $this->Correo_electronico = $Correo_electronico;

        return $this;
    }

    public function getTelefonoDeContacto(): ?string
    {
        return $this->Telefono_de_Contacto;
    }

    public function setTelefonoDeContacto(string $Telefono_de_Contacto): self
    {
        $this->Telefono_de_Contacto = $Telefono_de_Contacto;

        return $this;
    }

    public function getTipoDeProveedor(): ?string
    {
        return $this->Tipo_de_Proveedor;
    }

    public function setTipoDeProveedor(string $Tipo_de_Proveedor): self
    {
        $this->Tipo_de_Proveedor = $Tipo_de_Proveedor;

        return $this;
    }

    public function getEstado(): ?string
    {
        return $this->Estado;
    }

    public function setEstado(string $Estado): self
    {
        $this->Estado = $Estado;

        return $this;
    }
}
