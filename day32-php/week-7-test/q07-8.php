<?php

// class declaration here
class address
{
    protected $name = null;
    protected $street = null;
    protected $house_nr = null;
    protected $city = null;
    protected $country = null;
    protected $postal_code = null;

    protected static $local_country = null;

    public static function setLocalCountry($country)
    {
        static::$local_country = $country;
    }

    public function isLocal()
    {
        // if (static::$local_country == $this->country) {
        //     return true;
        // } else {
        //     return false;
        // }
        return static::$local_country == $this->country;
    }
}