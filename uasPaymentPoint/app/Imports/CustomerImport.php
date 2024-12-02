<?php

namespace App\Imports;

use App\Models\customer;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class CustomerImport implements ToModel,WithHeadingRow
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
            return new customer([ 
                'identifier' => $row['0'], // Sesuaikan field dengan kolom di Excel 
                'provider' => $row['1'], // Row juga boleh di isikan dengan Index dari row excel
                'created' => $row['2'],
                'signed_in' => $row['3'],
                'user_uid' => $row['4'],
            ]);}
        }
    }

