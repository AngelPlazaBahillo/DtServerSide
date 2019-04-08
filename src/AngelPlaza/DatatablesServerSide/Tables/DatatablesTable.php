<?php

namespace AngelPlaza\DatatablesServerSide\Tables;

class DatatablesTable {

    private $idTable;

    private $entityClassName;

    /**
     * @var DatatablesField[]
     */
    private $fields;

    /**
     * DatatablesTable constructor.
     * @param $idTable
     * @param $entityClassName
     */
    public function __construct($idTable, $entityClassName) {
        $this->idTable          = $idTable;
        $this->entityClassName  = $entityClassName;
        $this->pResetFields();
    }

    /**
     * @return DatatablesField[]
     */
    public function getFields(): array {
        return $this->fields;
    }


    /**
     * @return mixed
     */
    public function getIdTable() {
        return $this->idTable;
    }

    /**
     * @param DatatablesField[] $fields
     */
    public function setFields(array $fields) {
        $this->pResetFields();

        foreach ($fields as $field) {
            $this->addField($field);
        }

    }

    /**
     * @param DatatablesField $field
     */
    public function addField(DatatablesField $field) {
        $this->fields[$field->getDataName()] = $field;
    }

    private function pResetFields() {
        $this->fields           = [];
    }


}
