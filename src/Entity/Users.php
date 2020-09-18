<?php

namespace App\Entity;

use App\Repository\UsersRepository;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Symfony\Component\Security\Core\User\UserInterface;
use Doctrine\ORM\Mapping as ORM;

/**
 * Users
 *
 * @ORM\Table(name="USERS")
 * @ORM\Entity(repositoryClass=UsersRepository::class)
 * @ORM\Entity
 * @UniqueEntity(fields={"usMail"}, message="There is already an account with this usMail")
 */
class Users implements UserInterface
{
    /**
     * @var int
     *
     * @ORM\Column(name="US_ID", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $usId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="US_PRENOM", type="string", length=50, nullable=true)
     */
    private $usPrenom;

    /**
     * @var string|null
     *
     * @ORM\Column(name="US_NOM", type="string", length=50, nullable=true)
     */
    private $usNom;

    /**
     * @var string|null
     *
     * @ORM\Column(name="US_MAIL", type="string", length=100, nullable=true)
     */
    private $usMail;

    /**
     * @var string|null
     *
     * @ORM\Column(name="US_PASS", type="string", length=50, nullable=true)
     */
    private $usPass;

    /**
     * @var int|null
     *
     * @ORM\Column(name="US_NIVEAU", type="integer", nullable=true)
     */
    private $usNiveau;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="INS_DATE", type="datetime", nullable=true)
     */
    private $insDate;

    /**
     * @var string|null
     *
     * @ORM\Column(name="INS_USER", type="string", length=100, nullable=true)
     */
    private $insUser;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="MAJ_DATE", type="datetime", nullable=true)
     */
    private $majDate;

    /**
     * @var string|null
     *
     * @ORM\Column(name="MAJ_USER", type="string", length=100, nullable=true)
     */
    private $majUser;

    /**
     * @ORM\Column(type="boolean")
     */
    private $isVerified = false;

    /**
     * @return int
     */
    public function getUsId(): int
    {
        return $this->usId;
    }

    /**
     * @param int $usId
     */
    public function setUsId(int $usId): void
    {
        $this->usId = $usId;
    }

    /**
     * @return string|null
     */
    public function getUsPrenom(): ?string
    {
        return $this->usPrenom;
    }

    /**
     * @param string|null $usPrenom
     */
    public function setUsPrenom(?string $usPrenom): void
    {
        $this->usPrenom = $usPrenom;
    }

    /**
     * @return string|null
     */
    public function getUsNom(): ?string
    {
        return $this->usNom;
    }

    /**
     * @param string|null $usNom
     */
    public function setUsNom(?string $usNom): void
    {
        $this->usNom = $usNom;
    }

    /**
     * @return string|null
     */
    public function getUsMail(): ?string
    {
        return $this->usMail;
    }

    /**
     * @param string|null $usMail
     */
    public function setUsMail(?string $usMail): void
    {
        $this->usMail = $usMail;
    }

    /**
     * @return string|null
     */
    public function getUsPass(): ?string
    {
        return $this->usPass;
    }

    /**
     * @param string|null $usPass
     */
    public function setUsPass(?string $usPass): void
    {
        $this->usPass = $usPass;
    }

    /**
     * @return int|null
     */
    public function getUsNiveau(): ?int
    {
        return $this->usNiveau;
    }

    /**
     * @param int|null $usNiveau
     */
    public function setUsNiveau(?int $usNiveau): void
    {
        $this->usNiveau = $usNiveau;
    }

    /**
     * @return \DateTime|null
     */
    public function getInsDate(): ?\DateTime
    {
        return $this->insDate;
    }

    /**
     * @param \DateTime|null $insDate
     */
    public function setInsDate(?\DateTime $insDate): void
    {
        $this->insDate = $insDate;
    }

    /**
     * @return string|null
     */
    public function getInsUser(): ?string
    {
        return $this->insUser;
    }

    /**
     * @param string|null $insUser
     */
    public function setInsUser(?string $insUser): void
    {
        $this->insUser = $insUser;
    }

    /**
     * @return \DateTime|null
     */
    public function getMajDate(): ?\DateTime
    {
        return $this->majDate;
    }

    /**
     * @param \DateTime|null $majDate
     */
    public function setMajDate(?\DateTime $majDate): void
    {
        $this->majDate = $majDate;
    }

    /**
     * @return string|null
     */
    public function getMajUser(): ?string
    {
        return $this->majUser;
    }

    /**
     * @param string|null $majUser
     */
    public function setMajUser(?string $majUser): void
    {
        $this->majUser = $majUser;
    }





    /**
     * Returns the roles granted to the user.
     *
     *     public function getRoles()
     *     {
     *         return ['ROLE_USER'];
     *     }
     *
     * Alternatively, the roles might be stored on a ``roles`` property,
     * and populated in any number of different ways when the user object
     * is created.
     *
     * @return (Role|string)[] The user roles
     */
    public function getRoles()
    {
        return ['ROLE_USER'];
    }

    /**
     * Returns the password used to authenticate the user.
     *
     * This should be the encoded password. On authentication, a plain-text
     * password will be salted, encoded, and then compared to this value.
     *
     * @return string The password
     */
    public function getPassword()
    {
        return $this->getUsPass();
    }

    /**
     * Returns the salt that was originally used to encode the password.
     *
     * This can return null if the password was not encoded using a salt.
     *
     * @return string|null The salt
     */
    public function getSalt()
    {
        // TODO: Implement getSalt() method.
    }

    /**
     * Returns the username used to authenticate the user.
     *
     * @return string The username
     */
    public function getUsername()
    {

        return $this->getUsMail();
    }

    /**
     * Removes sensitive data from the user.
     *
     * This is important if, at any given point, sensitive information like
     * the plain-text password is stored on this object.
     */
    public function eraseCredentials()
    {
        // TODO: Implement eraseCredentials() method.
    }

    public function isVerified(): bool
    {
        return $this->isVerified;
    }

    public function setIsVerified(bool $isVerified): self
    {
        $this->isVerified = $isVerified;

        return $this;
    }
}
