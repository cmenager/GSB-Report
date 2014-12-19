<?php

namespace GSB\Domain;

class Report 
{
    /**
     * Report id.
     *
     * @var integer
     */
    private $id;

    /**
     * Practitioner.
     *
     * @var \GSB\Domaine\Practitioner
     */
    private $idPractitioner;

    /**
     * Visitor
     *
     * @var \GSB\Domain\Visitor
     */
    private $idVisitor;

    /**
     * date.
     *
     * @var date
     */
    private $date;

    /**
     * assessement.
     *
     * @var string
     */
    private $assessment;

    /**
     * purpose.
     *
     * @var string
     */
    private $purpose;

    
    public function getId() {
        return $this->id;
    }

    public function getIdPractitioner() {
        return $this->idPractitioner;
    }

    public function getIdVisitor() {
        return $this->idVisitor;
    }

    public function getDate() {
        return $this->date;
    }

    public function getAssessment() {
        return $this->assessment;
    }

    public function getPurpose() {
        return $this->purpose;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function setIdPractitioner($idPractitioner) {
        $this->idPractitioner = $idPractitioner;
    }

    public function setIdVisitor($idVisitor) {
        $this->idVisitor = $idVisitor;
    }

    public function setDate(date $date) {
        $this->date = $date;
    }

    public function setAssessment($assessment) {
        $this->assessment = $assessment;
    }

    public function setPurpose($purpose) {
        $this->purpose = $purpose;
    }


    
}