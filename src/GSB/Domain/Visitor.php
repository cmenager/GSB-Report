<?php

namespace GSB\Domain;

Class Visitor {

    /**
     * Visitor id.
     *
     * @var integer
     */
    private $id;

    /**
     * Visitor id sector.
     *
     * @var integer
     */
    private $id_sector;

    /**
     * Visitor id labo.
     *
     * @var integer
     */
    private $id_labo;

    /**
     * Visitor name last.
     *
     * @var string
     */
    private $lastName;

    /**
     * Visitor first name.
     *
     * @var string
     */
    private $firstName;

    /**
     * Visitor address.
     *
     * @var string
     */
    private $address;

    /**
     * Visitor code.
     *
     * @var int
     */
    private $zipCode;
    
    /**
     * Visitor city.
     *
     * @var string
     */
    private $city;

    /**
     * Visitor date.
     *
     * @var date
     */
    private $date;

    /**
     * Visitor user.
     *
     * @var string
     */
    private $user;

    /**
     * Visitor password.
     *
     * @var string
     */
    private $password;

    /**
     * Visitor salt.
     *
     * @var string
     */
    private $salt;

    /**
     * Visitor role.
     *
     * @var string
     */
    private $role;

    /**
     * Visitor type.
     *
     * @var string
     */
    private $type;

    public function getId() {
        return $this->id;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function getId_sector() {
        return $this->id_sector;
    }

    public function setId_sector($id_sector) {
        $this->id_sector = $id_sector;
    }

    public function getId_labo() {
        return $this->id_labo;
    }

    public function setId_labo($id_labo) {
        $this->id_labo = $id_labo;
    }

    public function getLastName() {
        return $this->lastName;
    }

    public function setLastName($lastName) {
        $this->lastName = $lastName;
    }

    public function getFirstName() {
        return $this->firstName;
    }

    public function setFirstName($firstName) {
        $this->firstName = $firstName;
    }

    public function getAddress() {
        return $this->address;
    }

    public function setAddress($address) {
        $this->address = $address;
    }

    public function getZipCode() {
        return $this->zipCode;
    }

    public function setZipCode($zipCode) {
        $this->zipCode = $zipCode;
    }
    
    public function getCity(){
        return $this->city;
    }
    
    public function setCity($city){
        $this->city = $city;
    }

    public function getDate() {
        return $this->date;
    }

    public function setDate(date $date) {
        $this->date = $date;
    }

    public function getUser() {
        return $this->user;
    }

    public function setUser($user) {
        $this->user = $user;
    }

    public function getPassword() {
        return $this->password;
    }

    public function setPassword($password) {
        $this->password = $password;
    }

    public function getSalt() {
        return $this->salt;
    }

    public function setSalt($salt) {
        $this->salt = $salt;
    }

    public function getRole() {
        return $this->role;
    }

    public function setRole($role) {
        $this->role = $role;
    }

    public function getRoles() {
        return array($this->getRole());
    }

    public function getType() {
        return $this->type;
    }

    public function setType($type) {
        $this->type = $type;
    }

    public function eraseCredentials() {
        // Nothing to do here
    }

}
