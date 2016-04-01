<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * UserVk
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class UserVk
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var integer
     *
     * @ORM\Column(name="ext_id", type="integer")
     */
    private $extId;

    /**
     * @var string
     *
     * @ORM\Column(name="first_name", type="string", length=255)
     */
    private $firstName;

    /**
     * @var string
     *
     * @ORM\Column(name="last_name", type="string", length=255)
     */
    private $lastName;

    /**
     * @var string
     *
     * @ORM\Column(name="photo_50", type="string", length=255)
     */
    private $photo50;

    /**
     * @var string
     *
     * @ORM\Column(name="photo_100", type="string", length=255)
     */
    private $photo100;

    /**
     * @var integer
     *
     * @ORM\Column(name="last_pay", type="integer")
     */
    private $lastPay;

    /**
     * @var integer
     *
     * @ORM\Column(name="pay_count", type="integer")
     */
    private $payCount;

    /**
     * @var integer
     *
     * @ORM\Column(name="total_amount", type="integer")
     */
    private $totalAmount;

    /**
     * @var integer
     *
     * @ORM\Column(name="age", type="integer")
     */
    private $age;

    /**
     * @var integer
     *
     * @ORM\Column(name="sex", type="integer")
     */
    private $sex;

    /**
     * @var integer
     *
     * @ORM\Column(name="life", type="integer")
     */
    private $life;

    /**
     * @var integer
     *
     * @ORM\Column(name="life_timer", type="integer")
     */
    private $lifeTimer;

    /**
     * @var integer
     *
     * @ORM\Column(name="reg_time", type="integer")
     */
    private $regTime;

    /**
     * @var integer
     *
     * @ORM\Column(name="last_time", type="integer")
     */
    private $lastTime;


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
     * Set extId
     *
     * @param integer $extId
     * @return UserVk
     */
    public function setExtId($extId)
    {
        $this->extId = $extId;

        return $this;
    }

    /**
     * Get extId
     *
     * @return integer 
     */
    public function getExtId()
    {
        return $this->extId;
    }

    /**
     * Set firstName
     *
     * @param string $firstName
     * @return UserVk
     */
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;

        return $this;
    }

    /**
     * Get firstName
     *
     * @return string 
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * Set lastName
     *
     * @param string $lastName
     * @return UserVk
     */
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;

        return $this;
    }

    /**
     * Get lastName
     *
     * @return string 
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * Set photo50
     *
     * @param string $photo50
     * @return UserVk
     */
    public function setPhoto50($photo50)
    {
        $this->photo50 = $photo50;

        return $this;
    }

    /**
     * Get photo50
     *
     * @return string 
     */
    public function getPhoto50()
    {
        return $this->photo50;
    }

    /**
     * Set photo100
     *
     * @param string $photo100
     * @return UserVk
     */
    public function setPhoto100($photo100)
    {
        $this->photo100 = $photo100;

        return $this;
    }

    /**
     * Get photo100
     *
     * @return string 
     */
    public function getPhoto100()
    {
        return $this->photo100;
    }

    /**
     * Set lastPay
     *
     * @param integer $lastPay
     * @return UserVk
     */
    public function setLastPay($lastPay)
    {
        $this->lastPay = $lastPay;

        return $this;
    }

    /**
     * Get lastPay
     *
     * @return integer 
     */
    public function getLastPay()
    {
        return $this->lastPay;
    }

    /**
     * Set payCount
     *
     * @param integer $payCount
     * @return UserVk
     */
    public function setPayCount($payCount)
    {
        $this->payCount = $payCount;

        return $this;
    }

    /**
     * Get payCount
     *
     * @return integer 
     */
    public function getPayCount()
    {
        return $this->payCount;
    }

    /**
     * Set totalAmount
     *
     * @param integer $totalAmount
     * @return UserVk
     */
    public function setTotalAmount($totalAmount)
    {
        $this->totalAmount = $totalAmount;

        return $this;
    }

    /**
     * Get totalAmount
     *
     * @return integer 
     */
    public function getTotalAmount()
    {
        return $this->totalAmount;
    }

    /**
     * Set age
     *
     * @param integer $age
     * @return UserVk
     */
    public function setAge($age)
    {
        $this->age = $age;

        return $this;
    }

    /**
     * Get age
     *
     * @return integer 
     */
    public function getAge()
    {
        return $this->age;
    }

    /**
     * Set sex
     *
     * @param integer $sex
     * @return UserVk
     */
    public function setSex($sex)
    {
        $this->sex = $sex;

        return $this;
    }

    /**
     * Get sex
     *
     * @return integer 
     */
    public function getSex()
    {
        return $this->sex;
    }

    /**
     * Set life
     *
     * @param integer $life
     * @return UserVk
     */
    public function setLife($life)
    {
        $this->life = $life;

        return $this;
    }

    /**
     * Get life
     *
     * @return integer 
     */
    public function getLife()
    {
        return $this->life;
    }

    /**
     * Set lifeTimer
     *
     * @param integer $lifeTimer
     * @return UserVk
     */
    public function setLifeTimer($lifeTimer)
    {
        $this->lifeTimer = $lifeTimer;

        return $this;
    }

    /**
     * Get lifeTimer
     *
     * @return integer 
     */
    public function getLifeTimer()
    {
        return $this->lifeTimer;
    }

    /**
     * Set regTime
     *
     * @param integer $regTime
     * @return UserVk
     */
    public function setRegTime($regTime)
    {
        $this->regTime = $regTime;

        return $this;
    }

    /**
     * Get regTime
     *
     * @return integer 
     */
    public function getRegTime()
    {
        return $this->regTime;
    }

    /**
     * Set lastTime
     *
     * @param integer $lastTime
     * @return UserVk
     */
    public function setLastTime($lastTime)
    {
        $this->lastTime = $lastTime;

        return $this;
    }

    /**
     * Get lastTime
     *
     * @return integer 
     */
    public function getLastTime()
    {
        return $this->lastTime;
    }
}
