<?php

namespace App\Solid;

class SaleReports
{
    public $sale;

    public function export(SaleFormatExportInterface $formatExport)
    {
        return $formatExport->export($this->sale);
    }
}
