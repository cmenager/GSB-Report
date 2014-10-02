<?php

namespace GSB\DAO;

use GSB\Domain\Practitioner;

class PractitionerDAO extends DAO
{
    /**
     * Returns the list of all practitioners, sorted by name practitioner.
     *
     * @return array The list of all practitioners.
     */
    public function findAll() {
        $sql = "select * from practitioner order by practitioner_name";
        $result = $this->getDb()->fetchAll($sql);
        
        // Converts query result to an array of domain objects
        $practitioners = array();
        foreach ($result as $row) {
            $practitionerId = $row['practitioner_id'];
            $practitioners[$practitionerId] = $this->buildDomainObject($row);
        }
        return $practitioners;
    }


    /**
     * Returns the practitioners matching a given id.
     *
     * @param integer $id The practitioners id.
     *
     * @return \GSB\Domain\practitioners |throws an exception if no practitioners is found.
     */
    public function find($id) {
        $sql = "select * from practitioner where practitioner_id=?";
        $row = $this->getDb()->fetchAssoc($sql, array($id));

        if ($row)
            return $this->buildDomainObject($row);
        else
            throw new \Exception("No practitioner found for id " . $id);
    }

    /**
     * Creates a Practitioner instance from a DB query result row.
     *
     * @param array $row The DB query result row.
     *
     * @return \GSB\Domain\Practitioner
     */
    protected function buildDomainObject($row) {
        $practitioner = new Practitioner();
        $practitioner->setId($row['practitioner_id']);
        $practitioner->setType($row['practitioner_type_id']);
        $practitioner->setName($row['practitioner_name']);
        $practitioner->setFirstName($row['practitioner_first_name']);
        $practitioner->setAdress($row['practitioner_address']);
        $practitioner->setCode($row['practitioner_zip_code']);
        $practitioner->setCity($row['practitioner_city']);
        $practitioner->setNotorietyCoef($row['notoriety_coefficient']);
        return $practitioner;
    }
    
}