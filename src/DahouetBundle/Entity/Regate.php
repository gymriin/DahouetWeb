<?php

namespace DahouetBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Regate
 *
 * @ORM\Table(name="regate", indexes={@ORM\Index(name="FK1_regate_challenge", columns={"CDOCHAL"}), @ORM\Index(name="FK2_regate_commissaire", columns={"CODCOMMISSION"})})
 * @ORM\Entity(repositoryClass="DahouetBundle\Entity\RegateRepository")
 */
class Regate
{
    /**
     * @var string
     *
     * @ORM\Column(name="NUMREG", type="decimal", precision=4, scale=0, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $numreg;

    /**
     * @var string
     *
     * @ORM\Column(name="LIBREG", type="string", length=25, nullable=false)
     */
    private $libreg;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DATREG", type="date", nullable=false)
     */
    private $datreg;

    /**
     * @var string
     *
     * @ORM\Column(name="LIEUREG", type="string", length=40, nullable=false)
     */
    private $lieureg;

    /**
     * @var string
     *
     * @ORM\Column(name="DISTANCE", type="decimal", precision=4, scale=0, nullable=false)
     */
    private $distance;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="HEURDEP", type="time", nullable=true)
     */
    private $heurdep;

    /**
     * @var \Challenge
     *
     * @ORM\ManyToOne(targetEntity="Challenge")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="CDOCHAL", referencedColumnName="CDOCHAL")
     * })
     */
    private $cdochal;

    /**
     * @var \Commissaire
     *
     * @ORM\ManyToOne(targetEntity="Commissaire")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="CODCOMMISSION", referencedColumnName="CODCOM")
     * })
     */
    private $codcommission;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Commissaire", inversedBy="numreg")
     * @ORM\JoinTable(name="juge",
     *   joinColumns={
     *     @ORM\JoinColumn(name="NUMREG", referencedColumnName="NUMREG")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="CODCOM", referencedColumnName="CODCOM")
     *   }
     * )
     */
    private $codcom;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->codcom = new \Doctrine\Common\Collections\ArrayCollection();
    }


    /**
     * Get numreg
     *
     * @return string 
     */
    public function getNumreg()
    {
        return $this->numreg;
    }

    /**
     * Set libreg
     *
     * @param string $libreg
     * @return Regate
     */
    public function setLibreg($libreg)
    {
        $this->libreg = $libreg;

        return $this;
    }

    /**
     * Get libreg
     *
     * @return string 
     */
    public function getLibreg()
    {
        return $this->libreg;
    }

    /**
     * Set datreg
     *
     * @param \DateTime $datreg
     * @return Regate
     */
    public function setDatreg($datreg)
    {
        $this->datreg = $datreg;

        return $this;
    }

    /**
     * Get datreg
     *
     * @return \DateTime 
     */
    public function getDatreg()
    {
        return $this->datreg;
    }

    /**
     * Set lieureg
     *
     * @param string $lieureg
     * @return Regate
     */
    public function setLieureg($lieureg)
    {
        $this->lieureg = $lieureg;

        return $this;
    }

    /**
     * Get lieureg
     *
     * @return string 
     */
    public function getLieureg()
    {
        return $this->lieureg;
    }

    /**
     * Set distance
     *
     * @param string $distance
     * @return Regate
     */
    public function setDistance($distance)
    {
        $this->distance = $distance;

        return $this;
    }

    /**
     * Get distance
     *
     * @return string 
     */
    public function getDistance()
    {
        return $this->distance;
    }

    /**
     * Set heurdep
     *
     * @param \DateTime $heurdep
     * @return Regate
     */
    public function setHeurdep($heurdep)
    {
        $this->heurdep = $heurdep;

        return $this;
    }

    /**
     * Get heurdep
     *
     * @return \DateTime 
     */
    public function getHeurdep()
    {
        return $this->heurdep;
    }

    /**
     * Set cdochal
     *
     * @param \DahouetBundle\Entity\Challenge $cdochal
     * @return Regate
     */
    public function setCdochal(\DahouetBundle\Entity\Challenge $cdochal = null)
    {
        $this->cdochal = $cdochal;

        return $this;
    }

    /**
     * Get cdochal
     *
     * @return \DahouetBundle\Entity\Challenge 
     */
    public function getCdochal()
    {
        return $this->cdochal;
    }

    /**
     * Set codcommission
     *
     * @param \DahouetBundle\Entity\Commissaire $codcommission
     * @return Regate
     */
    public function setCodcommission(\DahouetBundle\Entity\Commissaire $codcommission = null)
    {
        $this->codcommission = $codcommission;

        return $this;
    }

    /**
     * Get codcommission
     *
     * @return \DahouetBundle\Entity\Commissaire 
     */
    public function getCodcommission()
    {
        return $this->codcommission;
    }

    /**
     * Add codcom
     *
     * @param \DahouetBundle\Entity\Commissaire $codcom
     * @return Regate
     */
    public function addCodcom(\DahouetBundle\Entity\Commissaire $codcom)
    {
        $this->codcom[] = $codcom;

        return $this;
    }

    /**
     * Remove codcom
     *
     * @param \DahouetBundle\Entity\Commissaire $codcom
     */
    public function removeCodcom(\DahouetBundle\Entity\Commissaire $codcom)
    {
        $this->codcom->removeElement($codcom);
    }

    /**
     * Get codcom
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getCodcom()
    {
        return $this->codcom;
    }

    /**
     * Set numreg
     *
     * @param string $numreg
     * @return Regate
     */
    public function setNumreg($numreg)
    {
        $this->numreg = $numreg;

        return $this;
    }
}
