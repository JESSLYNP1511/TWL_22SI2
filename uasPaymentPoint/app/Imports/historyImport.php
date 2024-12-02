<?php

namespace App\Imports;

use App\Models\history;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;


class historyImport implements ToModel,WithHeadingRow 
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    protected $rowCount=0;
    public function model(array $row)
    {
        $this->rowCount++;
        if($this->rowCount>1 && isset($row[0])){
            return new history([ 
                'cust_id' => $row['0'], // Sesuaikan field dengan kolom di Excel 
                'email' => $row['1'], // Row juga boleh di isikan dengan Index dari row excel
                'type' => $row['2'],
                'price' => $row['3'],
                'status' => $row['4'],
                'paymentMethod' => $row['5'],
                'date' => $row['6'],
                'refNo' => $row['7'],
            ]);}
        }
    }

