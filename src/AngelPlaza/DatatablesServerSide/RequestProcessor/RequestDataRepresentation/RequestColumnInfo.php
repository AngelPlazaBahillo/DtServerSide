<?php

namespace AngelPlaza\DatatablesServerSide\RequestProcessor\RequestDataRepresentation;
use AngelPlaza\DatatablesServerSide\RequestProcessor\PostRequestInterface;
use Symfony\Component\HttpFoundation\Request;

class RequestColumnInfo {

    private $data;

    private $name;

    private $searchable;

    private $orderable;

    private $searchValue;

    private $searchRegex;

    /**
     * RequestColumnInfo constructor.
     * @param $data
     * @param $name
     * @param $searchable
     * @param $orderable
     * @param $searchValue
     * @param $searchRegex
     */
    public function __construct($data, $name, $searchable, $orderable, $searchValue, $searchRegex) {
        $this->data = $data;
        $this->name = $name;
        $this->searchable = $searchable;
        $this->orderable = $orderable;
        $this->searchValue = $searchValue;
        $this->searchRegex = $searchRegex;
    }


    /**
     * @return mixed
     */
    public function getData() {
        return $this->data;
    }

    /**
     * @return mixed
     */
    public function getName() {
        return $this->name;
    }

    /**
     * @return mixed
     */
    public function isSearchable() {
        return $this->searchable;
    }

    /**
     * @return mixed
     */
    public function isOrderable() {
        return $this->orderable;
    }

    /**
     * @return mixed
     */
    public function getSearchValue() {
        return $this->searchValue;
    }

    /**
     * @return mixed
     */
    public function getSearchRegex() {
        return $this->searchRegex;
    }

    /**
     * @param PostRequestInterface $request
     * TODO Eliminar la restricción del tipo cuando se le pueda integrar al Request de Symfony la interfaz
     * @return RequestColumnInfo[]|null
     */
    public static function buildFromRequest(Request $request) {
        $objects = null;
        $postColumns = $request->get('columns');

        if (count($postColumns) > 0) {
            $objects = [];

            foreach ($postColumns as $columnData) {
                $objects[] = new self(
                    $columnData['data'],
                    $columnData['name'],
                    $columnData['searchable'] == 'true' ? true : false,
                    $columnData['orderable'] == 'true' ? true : false,
                    $columnData['search']['value'],
                    $columnData['search']['regex'] == 'false' ? false : true
                );
            }
        }

        return $objects;
    }
}
