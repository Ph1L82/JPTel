<?php

namespace jptel\Http\Controllers;

use Illuminate\Http\Request;
use Excel;

class ExcelCreatorController extends Controller
{
    public static function simpleExcel($filename, $title = null, $data)
    {
        Excel::create($filename, function($excel) use ($title, $data)
        {
            $excel->setTitle($title);

            $excel->sheet('Reporte', function($sheet) use ($data)
            {
                $sheet->fromArray($data, null, 'A1', true);
                //$sheet->fromArray($data, null, 'A1', true, true);
                $sheet->setColumnFormat([
                        'E' => '0.00',
                        'F' => '0.00',
                        'G' => '0.00',
                    ]);
                $sheet->freezeFirstRow()
                    ->setAutoFilter()
                    ->setAllBorders('thin');
                $sheet->cells('A1:G1', function($cells){
                    $cells->setBackground('#003d99')
                        ->setFontColor('#FFFFFF')
                        ->setFontWeight('bold')
                        ->setBorder('solid','solid','solid','solid');
                });
            });
        })->download('xlsx');
    }
}
