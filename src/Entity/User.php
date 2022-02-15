<?php

namespace App\Entity;

use DateTime;
use Doctrine\ORM\Mapping as ORM;



/**
 * 
 * @ORM\Entity(repositoryClass="App\Repository\UserRepository") // ajouter le Repository
 * @ORM\Table(name="user")
*/

class User
{
  /**
   * @var integer
   *
   * @ORM\Id()
   * @ORM\GeneratedValue(strategy="AUTO")
   * @ORM\Column(name="id", type="integer", options={"unsigned"=true})
   */
  private $id;

  /**
   * @var ?string
   *
   * @ORM\Column(name="first_name", type="string")
   */
  private $firstName;

  /**
   * @var ?string
   *
   * @ORM\Column(name="last_name", type="string")
   */
  private $lastName;

  /**
   * @var ?DateTime
   *
   * @ORM\Column(name="user_birthday", type="datetime")
   */
  private $birthday;

  /** @var ?string */
  private $description;

  /** @return int */
  public function getId(): int
  {
    return $this->id;
  }

  /** @param int $id */
  public function setId(int $id): void
  {
    $this->id = $id;
  }

  /** @return string|null */
  public function getFirstName(): ?string
  {
    return $this->firstName;
  }

  /** @param string|null $firstName */
  public function setFirstName(?string $firstName): void
  {
    $this->firstName = $firstName;
  }

  /** @return string|null */
  public function getLastName(): ?string
  {
    return $this->lastName;
  }

  /** @param string|null $lastName */
  public function setLastName(?string $lastName): void
  {
    $this->lastName = $lastName;
  }

  /** @return DateTime|null */
  public function getBirthday(): ?DateTime
  {
    return $this->birthday;
  }

  /** @param DateTime|null $birthday */
  public function setBirthday(?DateTime $birthday): void
  {
    $this->birthday = $birthday;
  }

  /** @return string|null */
  public function getDescription(): ?string
  {
    return $this->description;
  }

  /** @param string|null $description */
  public function setDescription(?string $description): void
  {
    $this->description = $description;
  }
}
