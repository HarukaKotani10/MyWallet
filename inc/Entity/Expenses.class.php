<?php

class Expenses
{

    private $ExpenseID;
    private $ExpenseDate;
    private $Amount;
    private $Category;

     /**
     * Get the value of ExpenseID
     */
    public function getExpenseID()
    {
        return $this->ExpenseID;
    }

    /**
     * Set the value of ExpenseID
     */
    public function setExpenseID($ExpenseID): self
    {
        $this->ExpenseID = $ExpenseID;

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
     * Get the value of ExpenseDate
     */
    public function getExpenseDate()
    {
        return $this->ExpenseDate;
    }

    /**
     * Set the value of ExpenseDate
     */
    public function setExpenseDate($ExpenseDate): self
    {
        $this->ExpenseDate = $ExpenseDate;

        return $this;
    }
}
