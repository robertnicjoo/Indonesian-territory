<?php

use Illuminate\Database\Seeder;

class ProvincesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('provinces')->delete();

        $provinces = array(
            array('name' => 'ACEH'), //1
            array('name' => 'SUMATERA UTARA'), //2
            array('name' => 'SUMATERA BARAT'), //3
            array('name' => 'RIAU'), //4
            array('name' => 'JAMBI'), //5
            array('name' => 'SUMATERA SELATAN'), //6
            array('name' => 'BENGKULU'), //7
            array('name' => 'LAMPUNG'), //8
            array('name' => 'KEPULAUAN BANGKA BELITUNG'), //9
            array('name' => 'KEPULAUAN RIAU'), //10
            array('name' => 'DKI JAKARTA'), //11
            array('name' => 'JAWA BARAT'), //12
            array('name' => 'JAWA TENGAH'), //13
            array('name' => 'DI YOGYAKARTA'), //14
            array('name' => 'JAWA TIMUR'), //15
            array('name' => 'BANTEN'), //16
            array('name' => 'BALI'), //17
            array('name' => 'NUSA TENGGARA BARAT'), //18
            array('name' => 'NUSA TENGGARA TIMUR'), //19
            array('name' => 'KALIMANTAN BARAT'), //20
            array('name' => 'KALIMANTAN TENGAH'), //21
            array('name' => 'KALIMANTAN SELATAN'), //22
            array('name' => 'KALIMANTAN TIMUR'), //23
            array('name' => 'KALIMANTAN UTARA'), //24
            array('name' => 'SULAWESI UTARA'), //25
            array('name' => 'SULAWESI TENGAH'), //26
            array('name' => 'SULAWESI SELATAN'), //27
            array('name' => 'SULAWESI TENGGARA'), //28
            array('name' => 'GORONTALO'), //29
            array('name' => 'SULAWESI BARAT'), //30
            array('name' => 'MALUKU'), //31
            array('name' => 'MALUKU UTARA'), //32
            array('name' => 'PAPUA BARAT'), //33
            array('name' => 'PAPUA'), //34
        );

            DB::table('provinces')->insert($provinces);
    }
}
