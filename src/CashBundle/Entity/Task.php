<?php 

namespace CashBundle\Entity;
 
class Task
{
    protected $cantidad;
 
    public function getCantidad()
    {
        return $this->cantidad;
    }
    public function setTask($cantidad)
    {
        $this->cantidad = $cantidad;
    }

}