<?php

namespace GSB\Domain;

class Practitioner 
{
    /**
     * Practitioner id.
     *
     * @var integer
     */
    private $id_practitioner;

    /**
     * type Practitioner.
     *
     * @var \GSB\Domaine\PractitionerType
     */
    private $type_practitioner;

    /**
     * Trade name Practitioner.
     *
     * @var string
     */
    private $name_practitioner;

    /**
     * first name practitioner.
     *
     * @var string
     */
    private $first_name_practitioner;

    /**
     * practitioner adress.
     *
     * @var string
     */
    private $address_practitioner;

    /**
     * code practitioner.
     *
     * @var string
     */
    private $code_practitioner;

    /**
     * City.
     *
     * @var string
     */
    private $city_practitioner;

    /**
     * notoriety coefficient.
     *
     * @var interger
     */
    private $notoriety_coefficient;
    
    
////////////////////////////////////////////////////////////////////////////////
    public function getId() {
        return $this->id_practitioner;
    }

    public function setId($id_practitioner) {
        $this->id_practitioner = $id_practitioner;
    }
////////////////////////////////////////////////////////////////////////////////
    public function getType() {
        return $this->type_practitioner;
    }

    public function setType($type_practitioner) {
        $this->type_practitioner = $type_practitioner;
    }
////////////////////////////////////////////////////////////////////////////////
    public function getName() {
        return $this->name_practitioner;
    }

    public function setName($name_practitioner) {
        $this->name_practitioner = $name_practitioner;
    }
////////////////////////////////////////////////////////////////////////////////
    public function getFirstName() {
        return $this->firstName;
    }

    public function setFirstName($first_name_practitioner) {
        $this->firstName = $first_name_practitioner;
    }
////////////////////////////////////////////////////////////////////////////////
    public function getAddress() {
        return $this->adress;
    }

    public function setAddress($adress_practitioner) {
        $this->adress = $adress_practitioner;
    }
////////////////////////////////////////////////////////////////////////////////
    public function getZipCode() {
        return $this->CodePractitioner;
    }

    public function setZipCode($code_practitioner) {
        $this->CodePractitioner = $code_practitioner;
    }
////////////////////////////////////////////////////////////////////////////////
    public function getCity() {
        return $this->city;
    }

    public function setCity($city_practitioner) {
        $this->city = $city_practitioner;
    }
////////////////////////////////////////////////////////////////////////////////
    public function getNotorietyCoef() {
        return $this->notoriety;
    }

    public function setNotorietyCoef($notoriety_coefficient) {
        $this->notoriety = $notoriety_coefficient;
    }
}