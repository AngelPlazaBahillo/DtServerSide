<?php

namespace AngelPlaza\DatatablesServerSideBundle\RequestProcessor;

use AngelPlaza\DatatablesServerSideBundle\RequestProcessor\RequestDataRepresentation\RequestColumnInfo;
use Symfony\Component\HttpFoundation\Request;

class PostRequestProcessor {

    /**
     * @var Request
     */
    private $request;

    private $draw;

    private $start;

    private $length;

    private $searchValue;

    private $searchRegex;

    private $columns;

    public function __construct(Request $request) {
//        $this->request = $request;
        $this->processServerSideRequest($request);
    }

    protected function processServerSideRequest(Request $request) {
        $postSearch = $request->get('search');

        $this->draw         = $request->get('draw');
        $this->start        = $request->get('start');
        $this->length       = $request->get('length');
        $this->searchValue  = $postSearch['value'];
        $this->searchRegex  = $postSearch['regex'] == 'false' ? false : true;
        $this->columns = RequestColumnInfo::buildFromRequest($request);

        echo "<pre>";
        die(var_dump($this));
    }
}
