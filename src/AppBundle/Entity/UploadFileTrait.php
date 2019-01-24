<?php

namespace AppBundle\Entity;

use Symfony\Component\Validator\Constraints as Assert;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\VarDumper\VarDumper;

trait UploadFileTrait
{
    /**
     * @var string
     *
     * @ORM\Column(name="image_profile", type="string", length=255, nullable=true)
     */
    protected $image;

    /**
     * @var string
     */
    protected $tmpPath;

    /**
     * @var UploadedFile
     *
     * @Assert\File(maxSize="2000000")
     */
    protected $file;

    /**
     * @param UploadedFile|null $file
     * @return $this
     */
    public function setFile(UploadedFile $file = null)
    {
        $this->file = $file;

        if (isset($this->image)) {
            $this->tmpPath = $this->image;
            $this->image = null;
        } else {
            $this->image = '';
        }

        return $this;
    }

    /**
     * @return UploadedFile
     */
    public function getFile()
    {
        return $this->file;
    }

    /**
     * @return string
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * @param string $image
     * @return UploadFileTrait
     */
    public function setImage($image)
    {
        $this->image = $image;
        return $this;
    }

    /**
     * @ORM\PrePersist()
     * @ORM\PreUpdate()
     */
    public function preUpload()
    {
        if (null !== $this->file) {
            $hash = sha1(uniqid(mt_rand(), true));
            $this->setImage($hash . '.' . $this->file->guessExtension());
        }
    }

    /**
     * @ORM\PostPersist()
     * @ORM\PostUpdate()
     */
    public function upload()
    {
        if (null === $this->file) {
            return;
        }

        $this->file->move($this->getUploadRootDir(), $this->getImage());

        if (isset($this->tmpPath)) {
            $this->removeFile($this->getUploadRootDir() . '/' . $this->tmpPath);
            $this->tmpPath = null;
        }

        $this->file = null;
    }

    /**
     * @ORM\PostRemove()
     */
    public function removeUpload()
    {
        if (($file = $this->getAbsolutePath())) {
            $this->removeFile($file);
        }
    }

    /**
     * @param string $filename
     */
    protected function removeFile($filename)
    {
        if (is_file($filename)) {
            unlink($filename);
        }
    }

    /**
     * @return string|void
     */
    public function getWebPath()
    {
        if (null === $this->image) {
            return;
        }

        return '/upload/' . $this->getUploadDir() . '/' . $this->image;
    }

    /**
     * @return string|void
     */
    public function getAbsolutePath()
    {
        if (null === $this->image) {
            return;
        }

        return $this->getUploadRootDir() . '/' . $this->image;
    }

    /**
     * @return string
     */
    public function getUploadRootDir()
    {
        return __DIR__ . '/../../../web/upload/' . $this->getUploadDir();
    }

    /**
     * @return string
     */
    public function getUploadDir()
    {
        return 'users';
    }
}
