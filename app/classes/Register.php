<?php


namespace App\classes;


class Register
{
    protected $name;
    protected $email;
    protected $mobile;
    protected $result;

    public function __construct($post = null)
    {
      if (isset($post['full_name']))
      {
          $this->name =$post['full_name'];
          $this->email =$post['email'];
          $this->mobile =$post['mobile'];
      }
    }
    public function  add()
    {
//       session_start();
       $_SESSION[0]['name'] = $this->name;
       $_SESSION[0]['email'] = $this->email;
       $_SESSION[0]['mobile'] = $this->mobile;
       return 'Data store successfully';
    }
    public function allData()
    {
        $this->result = [
            'name' => $_SESSION[0]['name'],
            'email'=> $_SESSION[0]['email'],
            'mobile'=> $_SESSION[0]['mobile'],

        ];

        return $this->result;

    }

}