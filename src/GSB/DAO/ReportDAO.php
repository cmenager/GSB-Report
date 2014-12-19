<?php

namespace GSB\DAO;

use GSB\Domain\Report;

class ReportDAO extends DAO {

    
     /**
     * @var \GSB\DAO\PractitionerTypeDAO
     */
    private $practitionerDAO;

    public function setPractitionerDAO($practitionerDAO) {
        $this->practitionerDAO = $practitionerDAO;
    }
    
    
    /**
     * Returns the list of all reports, sorted by id report.
     *
     * @return array The list of all reports.
     */
    public function findAll() {
        $sql = "select * from visit_report order by report_id";
        $result = $this->getDb()->fetchAll($sql);

        // Converts query result to an array of domain objects
        $reports = array();
        foreach ($result as $row) {
            $reportId = $row['report_id'];
            $reports[$reportId] = $this->buildDomainObject($row);
        }
        return $reports;
    }

    /**
     * Returns the reports matching a given id.
     *
     * @param integer $id The report id.
     *
     * @return \GSB\Domain\Report |throws an exception if no practitioners is found.
     */
    public function find($id) {
        $sql = "select * from visit_report where report_id=?";
        $row = $this->getDb()->fetchAssoc($sql, array($id));

        if ($row)
            return $this->buildDomainObject($row);
        else
            throw new \Exception("No report found for id " . $id);
    }

    /**
     * Creates a Practitioner instance from a DB query result row.
     *
     * @param array $row The DB query result row.
     *
     * @return \GSB\Domain\Practitioner
     */
    protected function buildDomainObject($row) {
        $practitionerId = $row['practitioner_id'];
        $practitionerName = $row['practitoner_name'];
        $practitionerFirstName= $row['practitioner_first_name'];
        $practitioner = $this->practitionerDAO->find($practitionerId, $practitionerName, $practitionerFirstName);

        $report = new Report();
        $report->setId($row['report_id']);
        
        $report->setIdPractitioner($practitioner);
        
        $report->setName($practitioner);
        $report->setFirstName($practitioner);
        $report->setCity($practitioner);
        $report->setPurpose($row['purpose']);


        return $report;
    }

}
