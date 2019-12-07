<?php
class address
{
    private $uname;
    private $adname;
    private $name;
    private $street;
    private $city;
    private $zip;
    private $state;
    private $country;
    private $phone;

    function __construct($uname,$adname,$name,$street,$city,$zip,$state,$country,$phone)
    {
        $this->uname=$uname;
        $this->adname=$adname;
        $this->name=$name;
        $this->street=$street;
        $this->city=$city;
        $this->zip=$zip;
        $this->state=$state;
        $this->country=$country;
        $this->phone=$phone;
    }

    /**
     * @param mixed $phone
     */
    public function setPhone($phone)
    {
        $this->phone = $phone;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @param mixed $uname
     */
    public function setUname($uname)
    {
        $this->uname = $uname;
    }

    /**
     * @param mixed $adname
     */
    public function setAdname($adname)
    {
        $this->adname = $adname;
    }

    /**
     * @param mixed $city
     */
    public function setCity($city)
    {
        $this->city = $city;
    }

    /**
     * @param mixed $country
     */
    public function setCountry($country)
    {
        $this->country = $country;
    }

    /**
     * @param mixed $state
     */
    public function setState($state)
    {
        $this->state = $state;
    }

    /**
     * @param mixed $street
     */
    public function setStreet($street)
    {
        $this->street = $street;
    }

    /**
     * @param mixed $zip
     */
    public function setZip($zip)
    {
        $this->zip = $zip;
    }

    /**
     * @return mixed
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return mixed
     */
    public function getUname()
    {
        return $this->uname;
    }

    /**
     * @return mixed
     */
    public function getAdname()
    {
        return $this->adname;
    }

    /**
     * @return mixed
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * @return mixed
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * @return mixed
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * @return mixed
     */
    public function getStreet()
    {
        return $this->street;
    }

    /**
     * @return mixed
     */
    public function getZip()
    {
        return $this->zip;
    }

}
?>
