<?php


namespace App\classes;

class Series
{
    protected $i;
    protected $result;
    protected $sum;
    protected $startingNumber;
    protected $endingNumber;

    public function __construct($post = null)
    {
        $this->startingNumber = $post['starting_number'];
        $this->endingNumber   = $post['ending_number'];
    }
    public function index()
    {
        header('Location: action.php?pages=home');
    }
    public function getSeries()
    {
        for ($this->i = $this->startingNumber; $this->i <= $this->endingNumber; $this->i++)
        {
            $this->result .= $this->i. ' + ';
            $this->sum += $this->i;
        }
//        echo rtrim($this->result, ' + '). ' = '.$this->sum;
        return [
            'result' => rtrim($this->result, ' + '). ' = '.$this->sum,
            'starting_number' => $this->startingNumber,
            'ending_number' => $this->endingNumber,

        ];

    }


}