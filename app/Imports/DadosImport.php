<?php

namespace App\Imports;

use App\Task;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\Importable;
use Maatwebsite\Excel\Concerns\SkipsEmptyRows;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\WithValidation;

class DadosImport implements ToModel
{
    use Importable;
    /**
     * @param Collection $collection
     */
    public function model(array $row)
    {
        if($row[1] && $row[2]){
            return new Task([
                'id'        => $row[0],
                'firstname' => $row[1],
                'lastname'  => $row[2],
                'email'     => $row[3]
            ]);
        }
    }

}
