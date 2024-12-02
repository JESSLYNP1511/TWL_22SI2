<?php

namespace App\Imports;

use App\Models\userInformation;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;


class userInformationImport implements ToModel,WithHeadingRow 
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
            return new userInformation([ 
                'cust_id' => $row['0'], // Sesuaikan field dengan kolom di Excel 
                'nama' => $row['1'], // Row juga boleh di isikan dengan Index dari row excel
                'email' => $row['2'],
                'alamat' => $row['3'],
                'noHp' => $row['4'],
            ]);}
        }
    }

