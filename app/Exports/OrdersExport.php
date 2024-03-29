<?php

namespace App\Exports;

use App\Order;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\WithHeadings;

class OrdersExport implements FromCollection,WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Order::all();
    }
    public function headings(): array
    {
        return [
            'Id',
            'Client Id',
            'Invoice Id',
            'Total Amount',
            'Payment Type',
            'Payment Status',
            'Status',
            'Processed By',
            'Created at',
            'Updated at',
        ];
    }

}
