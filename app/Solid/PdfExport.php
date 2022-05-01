<?php

namespace App\Solid;

class PdfExport implements SaleFormatExportInterface
{
    public function export($data)
    {
        return 'PDF export';
    }
}
