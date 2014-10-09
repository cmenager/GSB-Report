<?php

namespace GSB\DAO;

use GSB\Domain\PractitionerType;

class PractitionerTypeDAO extends DAO
{
    /**
     * Returns the list of all PractitionerType, sorted by name.
     *
     * @return array The list of all PractitionerType.
     */
    public function findAll() {
        $sql = "select * from practitioner_type order by practitioner_type_id";
        $result = $this->getDb()->fetchAll($sql);
        
        // Converts query result to an array of domain objects
        $practitionerType = array();
        foreach ($result as $row) {
            $practitionerTypeId = $row['practitioner_type_id'];
            $practitionerType[$practitionerTypeId] = $this->buildDomainObject($row);
        }
        return $practitionerType;
    }

    /**
     * Returns the family matching the given id.
     *
     * @param integer $id The family id.
     *
     * @return \GSB\Domain\Family|throws an exception if no family is found.
     */
    public function find($id) {
        $sql = "select * from practitioner_type where practitioner_type_id=?";
        $row = $this->getDb()->fetchAssoc($sql, array($id));

        if ($row)
            return $this->buildDomainObject($row);
        else
            throw new \Exception("No type practitioner found for id " . $id);
    }

    /**
     * Creates a Family instance from a DB query result row.
     *
     * @param array $row The DB query result row.
     *
     * @return \GSB\Domain\Family
     */
    protected function buildDomainObject($row) {
        $practitionerType = new PractitionerType();
        $practitionerType->setId($row['practitioner_type_id']);
        $practitionerType->setName($row['practitioner_type_name']);
        $practitionerType->setPlace($row['practitioner_type_place']);
        return $practitionerType;
    }
}
?>