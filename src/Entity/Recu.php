<?php

namespace App\Entity;

use App\Repository\RecuRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Table(name="Recu")
 * @ORM\Entity(repositoryClass=RecuRepository::class)
 */
class Recu
{
    /**
     * @var int
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     * @ORM\Column(name="id",type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $event;

    /**
     * @var int
     *
     * @ORM\Column(name="prixrecu",type="integer")
     */
    private $prixrecu;
    /**
     * Get id
     *
     * @return int
     */
    public function getId(): ?int
    {
        return $this->id;
    }
    /**
     * @return mixed
     */

    public function getEvent(): ?string
    {
        return $this->event;
    }
    /**
     * @return mixed
     */

    public function setEvent(string $event): self
    {
        $this->event = $event;

        return $this;
    }



    /**
     * Get prixrecu
     *
     * @return int
     */
    public function getPrixrecu(): ?int
    {
        return $this->prixrecu;
    }
    /**
     * Set prixrecu
     *
     * @param integer $prixrecu
     *
     * @return Recu
     */

    public function setPrixrecu(int $prixrecu): self
    {
        $this->prixrecu = $prixrecu;

        return $this;
    }
    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\User", inversedBy="Recu")
     */
    private $User;

    public function getUser()
    {
        return $this->User;
    }

    public function setUser(User $User)
    {
        $this->User = $User;

        return $this;
    }
}
