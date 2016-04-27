<?php


class Message
{
    protected $id;
    protected $groupNumber;        
    protected $texts;
    
    public function __construct($donnes)
    {
        foreach ($donnes as $key => $value){
            $method = 'get'.ucfirst($key);

            if (method_exists($this,$method)) {
                $this->$method($value);
            }
        }
    }

   

 /**
     * @return mixed
     */
    public function getGroupNumber()
    {
        return $this->groupNumber;
    }

    /**
     * @param mixed $groupNumber
     */
    public function setGroupNumber($groupNumber)
    {
        $this->groupNumber = $groupNumber;
    }

     /**
     * @return mixed
     */
    public function getTexts()
    {
        return $this->texts;
    }

    /**
     * @param mixed $description
     */
    public function setTexts($texts)
    {
        $this->texts = $texts;
    }




    }

   