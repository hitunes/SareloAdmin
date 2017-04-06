<?php
namespace App\Interfaces;

interface Taxable 
{
    public function getServiceCharge();
    public function getVat();
    public function deductVat();
    public function deductServiceCharge();
}