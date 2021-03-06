<?php
namespace Jan\ProjektBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\HttpFoundation\File\File;
use Symfony\Component\Validator\Constraints as Assert;
use Vich\UploaderBundle\Mapping\Annotation as Vich;

/**
 * Prijava
 *@ORM\Entity
 *@ORM\Table
 * @Vich\Uploadable
 */
class Prijava
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $ime;

    /**
     * @var string
     */
    private $priimek;

    /**
     * @ORM\Column(type="string", length=255)     
     * @var string
     */
    private $naslov;

    /**
     * @ORM\Column(type="string", length=255)      
     * @var string
     */
    private $Naziv;


    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\NotBlank()
     * @Assert\Email()
     */
    private $enaslov;

    /**
     * @var string
     */
    private $telefon;

    /**
     * @var \DateTime
     */
    private $datumrojstva;

    /**
     * @var \DateTime
     */
    private $datumdodajanja;

    /**
     * @var string
     */
    private $hobiji;

    /**
     * @var string
     */
    private $profesionalnazgodovina;

    /**
     * @var string
     */
    private $linkedinprofil;

    /**
     * @var string
     */
    private $linkdocv;

  
       /**
     * @Assert\File(
     *     maxSize="5M",
     * )
     * @Vich\UploadableField(mapping="imageName", fileNameProperty="imageName")
     *
     *
     * This is the virtual field that will populate logo with the resulting file.
     */

    protected $imageFile;

    /**
     * @ORM\Column(type="string", length=255, name="image_name")
     *
     * @var string $imageName
     */
    protected $imageName;

    /**
     * @ORM\Column(type="datetime")
     *
     * @var \DateTime $updatedAt
     */
    protected $updatedAt;

    /**
     * If manually uploading a file (i.e. not using Symfony Form) ensure an instance
     * of 'UploadedFile' is injected into this setter to trigger the  update. If this
     * bundle's configuration parameter 'inject_on_load' is set to 'true' this setter
     * must be able to accept an instance of 'File' as the bundle will inject one here
     * during Doctrine hydration.
     *
     * @param File|\Symfony\Component\HttpFoundation\File\UploadedFile $image
     */


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set ime
     *
     * @param string $ime
     * @return Prijava
     */
    public function setIme($ime)
    {
        $this->ime = $ime;

        return $this;
    }

    /**
     * Get ime
     *
     * @return string 
     */
    public function getIme()
    {
        return $this->ime;
    }

    /**
     * Set priimek
     *
     * @param string $priimek
     * @return Prijava
     */
    public function setPriimek($priimek)
    {
        $this->priimek = $priimek;

        return $this;
    }

    /**
     * Get priimek
     *
     * @return string 
     */
    public function getPriimek()
    {
        return $this->priimek;
    }

    /**
     * Set naslov
     *
     * @param string $naslov
     * @return Prijava
     */
    public function setNaslov($naslov)
    {
        $this->naslov = $naslov;

        return $this;
    }

    /**
     * Get naslov
     *
     * @return string 
     */
    public function getNaslov()
    {
        return $this->naslov;
    }

    /**
     * Set Naziv
     *
     * @param string $Naziv
     * @return Prijava
     */
    public function setNaziv($Naziv)
    {
        $this->Naziv = $Naziv;

        return $this;
    }


    /**
     * Get Naziv
     *
     * @return string 
     */
    public function getNaziv()
    {
        return $this->Naziv;
    }


    /**
     * Set enaslov
     *
     * @param string $enaslov
     * @return Prijava
     */
    public function setEnaslov($enaslov)
    {
        $this->enaslov = $enaslov;

        return $this;
    }

    /**
     * Get enaslov
     *
     * @return string 
     */
    public function getEnaslov()
    {
        return $this->enaslov;
    }

    /**
     * Set telefon
     *
     * @param string $telefon
     * @return Prijava
     */
    public function setTelefon($telefon)
    {
        $this->telefon = $telefon;

        return $this;
    }

    /**
     * Get telefon
     *
     * @return string 
     */
    public function getTelefon()
    {
        return $this->telefon;
    }

    /**
     * Set datumrojstva
     *
     * @param \DateTime $datumrojstva
     * @return Prijava
     */
    public function setDatumrojstva($datumrojstva)
    {
        $this->datumrojstva = $datumrojstva;

        return $this;
    }

    /**
     * Get datumrojstva
     *
     * @return \DateTime 
     */
    public function getDatumrojstva()
    {
        return $this->datumrojstva;
    }

    /**
     * Set datumdodajanja
     *
     * @param \DateTime $datumdodajanja
     * @return Prijava
     */
    public function setDatumdodajanja($datumdodajanja)
    {
        $this->datumdodajanja = $datumdodajanja;

        return $this;
    }

    /**
     * Get datumdodajanja
     *
     * @return \DateTime 
     */
    public function getDatumdodajanja()
    {
        return $this->datumdodajanja;
    }

    /**
     * Set hobiji
     *
     * @param string $hobiji
     * @return Prijava
     */
    public function setHobiji($hobiji)
    {
        $this->hobiji = $hobiji;

        return $this;
    }

    /**
     * Get hobiji
     *
     * @return string 
     */
    public function getHobiji()
    {
        return $this->hobiji;
    }

    /**
     * Set profesionalnazgodovina
     *
     * @param string $profesionalnazgodovina
     * @return Prijava
     */
    public function setProfesionalnazgodovina($profesionalnazgodovina)
    {
        $this->profesionalnazgodovina = $profesionalnazgodovina;

        return $this;
    }

    /**
     * Get profesionalnazgodovina
     *
     * @return string 
     */
    public function getProfesionalnazgodovina()
    {
        return $this->profesionalnazgodovina;
    }

    /**
     * Set linkedinprofil
     *
     * @param string $linkedinprofil
     * @return Prijava
     */
    public function setLinkedinprofil($linkedinprofil)
    {
        $this->linkedinprofil = $linkedinprofil;

        return $this;
    }

    /**
     * Get linkedinprofil
     *
     * @return string 
     */
    public function getLinkedinprofil()
    {
        return $this->linkedinprofil;
    }

    /**
     * Set linkdocv
     *
     * @param string $linkdocv
     * @return Prijava
     */
    public function setLinkdocv($linkdocv)
    {
        $this->linkdocv = $linkdocv;

        return $this;
    }

    /**
     * Get linkdocv
     *
     * @return string 
     */
    public function getLinkdocv()
    {
        return $this->linkdocv;
    }

    public function setDefaultOptions(
    \Symfony\Component\OptionsResolver\OptionsResolverInterface $resolver
) {
    $resolver->setDefaults(array(
        'data_class' => 'ProjektBundle\Entity\Prijava',
    ));
}

     public function setImageFile(File $image)
    {
        $this->imageFile = $image;

        if ($image) {
            // It is required that at least one field changes if you are using doctrine
            // otherwise the event listeners won't be called and the file is lost
            $this->updatedAt = new \DateTime('now');
        }
    }

    /**
     * @return File
     */
    public function getImageFile()
    {
        return $this->imageFile;
    }

    /**
     * @param string $imageName
     */
    public function setImageName($imageName)
    {
        $this->imageName = $imageName;
    }

    /**
     * @return string
     */
    public function getImageName()
    {
        return $this->imageName;
    }

}
