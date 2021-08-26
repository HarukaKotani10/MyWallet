<?php

class Record
{

    private $IncomeID;
    private $RecordDate;
    private $Amount;
    private $Category;
    private $RecordType;

    /**
     * Get the value of IncomeID
     */
    public function getIncomeID()
    {
        return $this->IncomeID;
    }

    /**
     * Set the value of IncomeID
     */
    public function setIncomeID($IncomeID): self
    {
        $this->IncomeID = $IncomeID;

        return $this;
    }
    public function getRecordDate()
    {
        return $this->RecordDate;
    }

    /**
     * Set the value of IncomeID
     */
    public function setRecordDate($RecordDate): self
    {
        $this->RecordDate = $RecordDate;

        return $this;
    }

    /**
     * Get the value of Amount
     */
    public function getAmount()
    {
        return $this->Amount;
    }

    /**
     * Set the value of Amount
     */
    public function setAmount($Amount): self
    {
        $this->Amount = $Amount;

        return $this;
    }

    /**
     * Get the value of Category
     */
    public function getCategory()
    {
        return $this->Category;
    }

    /**
     * Set the value of Category
     */
    public function setCategory($Category): self
    {
        $this->Category = $Category;

        return $this;
    }

    /**
     * Get the value of Type
     */
    public function getRecordType()
    {
        return $this->RecordType;
    }

    /**
     * Set the value of Type
     */
    public function setRecordType($RecordType): self
    {
        $this->RecordType = $RecordType;

        return $this;
    }
}
