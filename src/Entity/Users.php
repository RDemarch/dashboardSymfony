<?php

namespace App\Entity;

use App\Repository\UsersRepository;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Doctrine\Persistence\ManagerRegistry;
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
     * @ORM\Id
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $usId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="name", type="string", length=50, nullable=true)
     */
    private $usName;

    /**
     * @var string|null
     *
     * @ORM\Column(name="firstname", type="string", length=50, nullable=true)
     */
    private $usFirstname;

    /**
     * @var string|null
     *
     * @ORM\Column(name="email", type="string", length=100, nullable=true)
     */
    private $usMail;

    /**
     * @var string|null
     *
     * @ORM\Column(name="password", type="string", length=50, nullable=true)
     */
    private $usPassword;

    /**
     * @var string|null
     *
     * @ORM\Column(name="location", type="string", nullable=true)
     */
    private $usLocation;

    /**
     * @var int|null
     *
     * @ORM\Column(name="postal_code", type="integer", nullable=true)
     */
    private $usPostalCode;

    /**
     * @var string|null
     *
     * @ORM\Column(name="login", type="string", length=100, nullable=true)
     */
    private $usLogin;

    /**
     * @ORM\Column(type="boolean")
     */
    private $usIsVerified = false;

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
    public function getUsFirstname(): ?string
    {
        return $this->usFirstname;
    }

    /**
     * @param string|null $usFirstname
     */
    public function setUsFirstname(?string $usFirstname): void
    {
        $this->usFirstname = $usFirstname;
    }

    /**
     * @return string|null
     */
    public function getUsName(): ?string
    {
        return $this->usName;
    }

    /**
     * @param string|null $usName
     */
    public function setUsName(?string $usName): void
    {
        $this->usName = $usName;
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
        return $this->usPassword;
    }

    /**
     * @param string|null $usPassword
     */
    public function setUsPass(?string $usPassword): void
    {
        $this->usPassword = $usPassword;
    }

    /**
     * @return string|null
     */
    public function getUsLocation(): ?string
    {
        return $this->usLocation;
    }

    /**
     * @param string|null $usLocation
     */
    public function setUsLocation(?string $usLocation): void
    {
        $this->usLocation = $usLocation;
    }

    /**
     * @return int|null
     */
    public function getUsPostalCode(): ?string
    {
        return $this->usPostalCode;
    }

    /**
     * @param int|null $usPostalCode
     */
    public function setUsPostalCode(?int $usPostalCode): void
    {
        $this->usPostalCode = $usPostalCode;
    }

    /**
     * @return string|null
     */
    public function getUsLogin(): ?string
    {
        return $this->usLogin;
    }

    /**
     * @param string|null $usLogin
     */
    public function setUsLogin(?string $usLogin): void
    {
        $this->usLogin = $usLogin;
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

        return $this->getUsLogin();
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
