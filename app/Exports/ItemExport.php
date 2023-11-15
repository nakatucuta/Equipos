<?php

namespace App\Exports;

use App\Models\Item;
use Maatwebsite\Excel\Concerns\FromCollection;

use Maatwebsite\Excel\Concerns\WithHeadings;

use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithEvents;
use Maatwebsite\Excel\Events\AfterSheet;

class ItemExport implements FromCollection, WithHeadings, ShouldAutoSize, WithEvents
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Item::all();
    }

    public function headings(): array
    {
        return [
            'ID',
            'Estado',
          
            'Tipo_item',
            'Fecha De Compra',
            'Marca',
            'Modelo',
            'Activo',
            'Service Tag',
            'Procesador',
            'Tipo equipo',
            'Memoria ram',
            'Capacidad ram',
            'Cantidad ram',
            'Capacidad Disco duro',
            'Tecnologia disco duro',
            'Cantidad disco duro',
            'Sistema operativo',
            'Nombre aw',
            'Ip',
            'Mac',
            'Fecha de mantenimiento',
            'Oficce',
            'Tipo',
            'Correo Ofice',
            'Antivirus',
            'Acceso Remoto',
            'Copia de seguridad',
            'Nombre de la carpeta',
            'Correo copia de seguridad',
            'Board',
            'Ubicacion de la  foto',
            'Cantidad',
            'Fecha de creacion del dato',
            'Fecha de actualizacion del dato',
           
         
        ];
    
    }


    public function registerEvents(): array
    {
        return [
            AfterSheet::class    => function(AfterSheet $event) {
                $cellRange = 'A1:AH1'; // All headers
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
