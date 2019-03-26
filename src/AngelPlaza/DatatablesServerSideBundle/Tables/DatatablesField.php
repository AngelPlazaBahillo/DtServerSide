<?php

namespace AngelPlaza\DatatablesServerSideBundle\Tables;

class DatatablesField {

    /**
     * @var string
     */
    private $dataName;
    /**
     * @var string
     */
    private $label;

    /**
     * @var bool
     */
    private $isOrderable;
    /**
     * @var bool
     */
    private $isSearchable;
    /**
     * @var bool
     */
    private $isVisible;

    /**
     * DatatablesField constructor.
     * @param string $dataName
     * @param string $label
     * @param bool $isOrderable
     * @param bool $isSearchable
     * @param bool $isVisible
     */
    public function __construct(string $dataName, string $label, bool $isOrderable, bool $isSearchable, bool $isVisible) {
        $this->dataName = $dataName;
        $this->label = $label;
        $this->isOrderable = $isOrderable;
        $this->isSearchable = $isSearchable;
        $this->isVisible = $isVisible;
    }

    /**
     * @return string
     */
    public function getDataName(): string {
        return $this->dataName;
    }

    /**
     * @return string
     */
    public function getLabel(): string {
        return $this->label;
    }

    /**
     * @return bool
     */
    public function isOrderable(): bool {
        return $this->isOrderable;
    }

    /**
     * @return bool
     */
    public function isSearchable(): bool {
        return $this->isSearchable;
    }

    /**
     * @return bool
     */
    public function isVisible(): bool {
        return $this->isVisible;
    }





}
