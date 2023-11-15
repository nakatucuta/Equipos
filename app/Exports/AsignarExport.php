<?php

namespace App\Exports;

use App\Models\assignments;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithEvents;
use Maatwebsite\Excel\Events\AfterSheet;

class AsignarExport implements FromCollection, WithHeadings, ShouldAutoSize, WithEvents
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
    
        return  $item = DB::table('assignments as a')
        ->join('people as b', 'a.people_id', '=', 'b.id')
        ->join('items as c', 'a.item_id', '=', 'c.id')
        ->select('a.id', 'b.nombres', 'b.cargo', 'c.tipo_item', 'C.marca','c.modelo','c.service_tag','c.foto'
        ,'c.marca','b.direccion')
        ->get();
    }


    public function headings(): array
    {
        return [
            'id',
            'Nombre',
            'Cargo',
            'Tipo de item',
            'Marca',
            'Modelo',
            'Service tag',
            'Foto',
            'Marca',
            'Direccion a la que pertenece'
         
        ];
    
    }
    
    public function registerEvents(): array
    {
        return [
            AfterSheet::class    => function(AfterSheet $event) {
                $cellRange = 'A1:H1'; // All headers
                $event->sheet->getDelegate()->getStyle($cellRange)->getFont()->setSize(14);
                $event->sheet->getDelegate()->getStyle($cellRange)->getFont()->setBold(true);
                $event->sheet->getDelegate()->getStyle($cellRange)->getFill()
                ->setFillType(\PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID)
                ->getStartColor()->setARGB('e6ffe6');
                $event->sheet->getDelegate()->getStyle($cellRange)->getAlignment()->setHorizontal('center');
                $event->sheet->setAutoFilter($cellRange);
                $event->sheet->getDelegate()->getStyle('B2:V200')->applyFromArray([
                    'alignment' => [
                        'horizontal' => \PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_LEFT,
                    ]
                ]);
            },
        ];

    }
}
