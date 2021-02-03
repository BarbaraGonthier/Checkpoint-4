<?php

namespace App\Entity;

use App\Repository\RealisationRepository;
use DateTime;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\HttpFoundation\File\File;
use Vich\UploaderBundle\Mapping\Annotation as Vich;

/**
 * @ORM\Entity(repositoryClass=RealisationRepository::class)
 * @Vich\Uploadable
 */
class Realisation
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $name;

    /**
     * @ORM\Column(type="datetime")
     */
    private $updatedAt;

    /**
     * @Vich\UploadableField(mapping="realisation_file", fileNameProperty="realisation")
     * @var File
     */
    private $realisationFile;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getUpdatedAt(): ?\DateTimeInterface
    {
        return $this->updatedAt;
    }

    public function setUpdatedAt(\DateTimeInterface $updatedAt): self
    {
        $this->updatedAt = $updatedAt;

        return $this;
    }

    public function setRealisationFile(File $image = null)
    {
        $this->realisationFile = $image;
        if ($image) {
            $this->updatedAt = new DateTime('now');
        }
    }

    public function getRealisationFile(): ?File
    {
        return $this->realisationFile;
    }
}
