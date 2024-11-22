<?php

namespace App\Imports;

use App\Models\tPegawai;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class tPegawaiImport implements ToModel,WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    protected $rowCount=1;
    public function model(array $row)
    {
        $this->rowCount++;
        if($this->rowCount>1){
            return new tPegawai([ 
                'kodePegawai' => $row['kodepegawai'], // Sesuaikan field dengan kolom di Excel 
                'namaPegawai' => $row['namapegawai'], // Row juga boleh di isikan dengan Index dari row excel
                'alamatPegawai' => $row['alamatpegawai'],
                'jenisKelamin' => $row['jeniskelamin'],
                'tempatLahir' => $row['tempatlahir'],
                'tanggalLahir' => $row['tanggallahir'],
                'agama' => $row['agama'],
                'jabatan' => $row['jabatan'],
                'noHp' => $row['nohp'], // tambahkan field lainnya 
            ]); 
        } else{
            return null;
        }
    }
}