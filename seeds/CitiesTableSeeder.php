<?php

use Illuminate\Database\Seeder;

class CitiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cities')->delete();

        $cities = array(
            array('province_id' => '1', 'name' => 'SIMEULUE'), //ACEH
            array('province_id' => '1', 'name' => 'ACEH SINGKIL'), //ACEH
            array('province_id' => '1', 'name' => 'ACEH SELATAN'), //ACEH
            array('province_id' => '1', 'name' => 'ACEH TENGGARA'), //ACEH
            array('province_id' => '1', 'name' => 'ACEH TIMUR'), //ACEH
            array('province_id' => '1', 'name' => 'ACEH TENGAH'), //ACEH
            array('province_id' => '1', 'name' => 'ACEH BARAT'), //ACEH
            array('province_id' => '1', 'name' => 'ACEH BESAR'), //ACEH
            array('province_id' => '1', 'name' => 'PIDIE'), //ACEH
            array('province_id' => '1', 'name' => 'BIREUEN'), //ACEH
            array('province_id' => '1', 'name' => 'ACEH UTARA'), //ACEH
            array('province_id' => '1', 'name' => 'ACEH BARAT DAYA'), //ACEH
            array('province_id' => '1', 'name' => 'GAYO LUES'), //ACEH
            array('province_id' => '1', 'name' => 'ACEH TAMIANG'), //ACEH
            array('province_id' => '1', 'name' => 'NAGAN RAYA'), //ACEH
            array('province_id' => '1', 'name' => 'ACEH JAYA'), //ACEH
            array('province_id' => '1', 'name' => 'BENER MERIAH'), //ACEH
            array('province_id' => '1', 'name' => 'PIDIE JAYA'), //ACEH
            array('province_id' => '1', 'name' => 'BANDA ACEH'), //ACEH
            array('province_id' => '1', 'name' => 'SABANG'), //ACEH
            array('province_id' => '1', 'name' => 'LANGSA'), //ACEH
            array('province_id' => '1', 'name' => 'LHOKSEUMAWE'), //ACEH
            array('province_id' => '1', 'name' => 'SUBULUSSALAM'), //ACEH
            array('province_id' => '2', 'name' => 'NIAS'), //SUMATERA UTARA
            array('province_id' => '2', 'name' => 'MANDAILING NATAL'), //SUMATERA UTARA
            array('province_id' => '2', 'name' => 'TAPANULI SELATAN'), //SUMATERA UTARA
            array('province_id' => '2', 'name' => 'TAPANULI TENGAH'), //SUMATERA UTARA
            array('province_id' => '2', 'name' => 'TAPANULI UTARA'), //SUMATERA UTARA
            array('province_id' => '2', 'name' => 'TOBA SAMOSIR'), //SUMATERA UTARA
            array('province_id' => '2', 'name' => 'LABUHAN BATU'), //SUMATERA UTARA
            array('province_id' => '2', 'name' => 'ASAHAN'), //SUMATERA UTARA
            array('province_id' => '2', 'name' => 'SIMALUNGUN'), //SUMATERA UTARA
            array('province_id' => '2', 'name' => 'DAIRI'), //SUMATERA UTARA
            array('province_id' => '2', 'name' => 'KARO'), //SUMATERA UTARA
            array('province_id' => '2', 'name' => 'DELI SERDANG'), //SUMATERA UTARA
            array('province_id' => '2', 'name' => 'LANGKAT'), //SUMATERA UTARA
            array('province_id' => '2', 'name' => 'NIAS SELATAN'), //SUMATERA UTARA
            array('province_id' => '2', 'name' => 'HUMBANG HASUNDUTAN'), //SUMATERA UTARA
            array('province_id' => '2', 'name' => 'PAKPAK BHARAT'), //SUMATERA UTARA
            array('province_id' => '2', 'name' => 'SAMOSIR'), //SUMATERA UTARA
            array('province_id' => '2', 'name' => 'SERDANG BEDAGAI'), //SUMATERA UTARA
            array('province_id' => '2', 'name' => 'BATU BARA'), //SUMATERA UTARA
            array('province_id' => '2', 'name' => 'PADANG LAWAS UTARA'), //SUMATERA UTARA
            array('province_id' => '2', 'name' => 'PADANG LAWAS'), //SUMATERA UTARA
            array('province_id' => '2', 'name' => 'LABUHAN BATU SELATAN'), //SUMATERA UTARA
            array('province_id' => '2', 'name' => 'LABUHAN BATU UTARA'), //SUMATERA UTARA
            array('province_id' => '2', 'name' => 'NIAS UTARA'), //SUMATERA UTARA
            array('province_id' => '2', 'name' => 'NIAS BARAT'), //SUMATERA UTARA
            array('province_id' => '2', 'name' => 'SIBOLGA'), //SUMATERA UTARA
            array('province_id' => '2', 'name' => 'TANJUNG BALAI'), //SUMATERA UTARA
            array('province_id' => '2', 'name' => 'PEMATANG SIANTAR'), //SUMATERA UTARA
            array('province_id' => '2', 'name' => 'TEBING TINGGI'), //SUMATERA UTARA
            array('province_id' => '2', 'name' => 'MEDAN'), //SUMATERA UTARA
            array('province_id' => '2', 'name' => 'BINJAI'), //SUMATERA UTARA
            array('province_id' => '2', 'name' => 'PADANGSIDIMPUAN'), //SUMATERA UTARA
            array('province_id' => '2', 'name' => 'GUNUNGSITOLI'), //SUMATERA UTARA
            array('province_id' => '3', 'name' => 'KEPULAUAN MENTAWAI'), //SUMATERA BARAT
            array('province_id' => '3', 'name' => 'PESISIR SELATAN'), //SUMATERA BARAT
            array('province_id' => '3', 'name' => 'SOLOK'), //SUMATERA BARAT
            array('province_id' => '3', 'name' => 'SIJUNJUNG'), //SUMATERA BARAT
            array('province_id' => '3', 'name' => 'TANAH DATAR'), //SUMATERA BARAT
            array('province_id' => '3', 'name' => 'PADANG PARIAMAN'), //SUMATERA BARAT
            array('province_id' => '3', 'name' => 'AGAM'), //SUMATERA BARAT
            array('province_id' => '3', 'name' => 'LIMA PULUH KOTA'), //SUMATERA BARAT
            array('province_id' => '3', 'name' => 'PASAMAN'), //SUMATERA BARAT
            array('province_id' => '3', 'name' => 'SOLOK SELATAN'), //SUMATERA BARAT
            array('province_id' => '3', 'name' => 'DHARMASRAYA'), //SUMATERA BARAT
            array('province_id' => '3', 'name' => 'PASAMAN BARAT'), //SUMATERA BARAT
            array('province_id' => '3', 'name' => 'PADANG'), //SUMATERA BARAT
            array('province_id' => '3', 'name' => 'SOLOK'), //SUMATERA BARAT
            array('province_id' => '3', 'name' => 'SAWAH LUNTO'), //SUMATERA BARAT
            array('province_id' => '3', 'name' => 'PADANG PANJANG'), //SUMATERA BARAT
            array('province_id' => '3', 'name' => 'BUKITTINGGI'), //SUMATERA BARAT
            array('province_id' => '3', 'name' => 'PAYAKUMBUH'), //SUMATERA BARAT
            array('province_id' => '3', 'name' => 'PARIAMAN'), //SUMATERA BARAT
            array('province_id' => '4', 'name' => 'KUANTAN SINGINGI'), //RIAU
            array('province_id' => '4', 'name' => 'INDRAGIRI HULU'), //RIAU
            array('province_id' => '4', 'name' => 'INDRAGIRI HILIR'), //RIAU
            array('province_id' => '4', 'name' => 'PELALAWAN'), //RIAU
            array('province_id' => '4', 'name' => 'S I A K'), //RIAU
            array('province_id' => '4', 'name' => 'KAMPAR'), //RIAU
            array('province_id' => '4', 'name' => 'ROKAN HULU'), //RIAU
            array('province_id' => '4', 'name' => 'BENGKALIS'), //RIAU
            array('province_id' => '4', 'name' => 'ROKAN HILIR'), //RIAU
            array('province_id' => '4', 'name' => 'KEPULAUAN MERANTI'), //RIAU
            array('province_id' => '4', 'name' => 'PEKANBARU'), //RIAU
            array('province_id' => '4', 'name' => 'D U M A I'), //RIAU
            array('province_id' => '5', 'name' => 'KERINCI'), //JAMBI
            array('province_id' => '5', 'name' => 'MERANGIN'), //JAMBI
            array('province_id' => '5', 'name' => 'SAROLANGUN'), //JAMBI
            array('province_id' => '5', 'name' => 'BATANG HARI'), //JAMBI
            array('province_id' => '5', 'name' => 'MUARO JAMBI'), //JAMBI
            array('province_id' => '5', 'name' => 'TANJUNG JABUNG TIMUR'), //JAMBI
            array('province_id' => '5', 'name' => 'TANJUNG JABUNG BARAT'), //JAMBI
            array('province_id' => '5', 'name' => 'TEBO'), //JAMBI
            array('province_id' => '5', 'name' => 'BUNGO'), //JAMBI
            array('province_id' => '5', 'name' => 'JAMBI'), //JAMBI
            array('province_id' => '5', 'name' => 'SUNGAI PENUH'), //JAMBI
            array('province_id' => '6', 'name' => 'OGAN KOMERING ULU'), //SUMATERA SELATAN
            array('province_id' => '6', 'name' => 'OGAN KOMERING ILIR'), //SUMATERA SELATAN
            array('province_id' => '6', 'name' => 'MUARA ENIM'), //SUMATERA SELATAN
            array('province_id' => '6', 'name' => 'LAHAT'), //SUMATERA SELATAN
            array('province_id' => '6', 'name' => 'MUSI RAWAS'), //SUMATERA SELATAN
            array('province_id' => '6', 'name' => 'MUSI BANYUASIN'), //SUMATERA SELATAN
            array('province_id' => '6', 'name' => 'BANYU ASIN'), //SUMATERA SELATAN
            array('province_id' => '6', 'name' => 'OGAN KOMERING ULU SELATAN'), //SUMATERA SELATAN
            array('province_id' => '6', 'name' => 'OGAN KOMERING ULU TIMUR'), //SUMATERA SELATAN
            array('province_id' => '6', 'name' => 'OGAN ILIR'), //SUMATERA SELATAN
            array('province_id' => '6', 'name' => 'EMPAT LAWANG'), //SUMATERA SELATAN
            array('province_id' => '6', 'name' => 'PENUKAL ABAB LEMATANG ILIR'), //SUMATERA SELATAN
            array('province_id' => '6', 'name' => 'MUSI RAWAS UTARA'), //SUMATERA SELATAN
            array('province_id' => '6', 'name' => 'PALEMBANG'), //SUMATERA SELATAN
            array('province_id' => '6', 'name' => 'PRABUMULIH'), //SUMATERA SELATAN
            array('province_id' => '6', 'name' => 'PAGAR ALAM'), //SUMATERA SELATAN
            array('province_id' => '6', 'name' => 'LUBUKLINGGAU'), //SUMATERA SELATAN
            array('province_id' => '7', 'name' => 'BENGKULU SELATAN'), //BENGKULU
            array('province_id' => '7', 'name' => 'REJANG LEBONG'), //BENGKULU
            array('province_id' => '7', 'name' => 'BENGKULU UTARA'), //BENGKULU
            array('province_id' => '7', 'name' => 'KAUR'), //BENGKULU
            array('province_id' => '7', 'name' => 'SELUMA'), //BENGKULU
            array('province_id' => '7', 'name' => 'MUKOMUKO'), //BENGKULU
            array('province_id' => '7', 'name' => 'LEBONG'), //BENGKULU
            array('province_id' => '7', 'name' => 'KEPAHIANG'), //BENGKULU
            array('province_id' => '7', 'name' => 'BENGKULU TENGAH'), //BENGKULU
            array('province_id' => '7', 'name' => 'BENGKULU'), //BENGKULU
            array('province_id' => '8', 'name' => 'LAMPUNG BARAT'), //LAMPUNG
            array('province_id' => '8', 'name' => 'TANGGAMUS'), //LAMPUNG
            array('province_id' => '8', 'name' => 'LAMPUNG SELATAN'), //LAMPUNG
            array('province_id' => '8', 'name' => 'LAMPUNG TIMUR'), //LAMPUNG
            array('province_id' => '8', 'name' => 'LAMPUNG TENGAH'), //LAMPUNG
            array('province_id' => '8', 'name' => 'LAMPUNG UTARA'), //LAMPUNG
            array('province_id' => '8', 'name' => 'WAY KANAN'), //LAMPUNG
            array('province_id' => '8', 'name' => 'TULANGBAWANG'), //LAMPUNG
            array('province_id' => '8', 'name' => 'PESAWARAN'), //LAMPUNG
            array('province_id' => '8', 'name' => 'PRINGSEWU'), //LAMPUNG
            array('province_id' => '8', 'name' => 'MESUJI'), //LAMPUNG
            array('province_id' => '8', 'name' => 'TULANG BAWANG BARAT'), //LAMPUNG
            array('province_id' => '8', 'name' => 'PESISIR BARAT'), //LAMPUNG
            array('province_id' => '8', 'name' => 'BANDAR LAMPUNG'), //LAMPUNG
            array('province_id' => '8', 'name' => 'METRO'), //LAMPUNG
            array('province_id' => '9', 'name' => 'BANGKA'), //KEPULAUAN BANGKA BELITUNG
            array('province_id' => '9', 'name' => 'BELITUNG'), //KEPULAUAN BANGKA BELITUNG
            array('province_id' => '9', 'name' => 'BANGKA BARAT'), //KEPULAUAN BANGKA BELITUNG
            array('province_id' => '9', 'name' => 'BANGKA TENGAH'), //KEPULAUAN BANGKA BELITUNG
            array('province_id' => '9', 'name' => 'BANGKA SELATAN'), //KEPULAUAN BANGKA BELITUNG
            array('province_id' => '9', 'name' => 'BELITUNG TIMUR'), //KEPULAUAN BANGKA BELITUNG
            array('province_id' => '9', 'name' => 'PANGKAL PINANG'), //KEPULAUAN BANGKA BELITUNG
            array('province_id' => '10', 'name' => 'KARIMUN'), //KEPULAUAN RIAU
            array('province_id' => '10', 'name' => 'BINTAN'), //KEPULAUAN RIAU
            array('province_id' => '10', 'name' => 'NATUNA'), //KEPULAUAN RIAU
            array('province_id' => '10', 'name' => 'LINGGA'), //KEPULAUAN RIAU
            array('province_id' => '10', 'name' => 'KEPULAUAN ANAMBAS'), //KEPULAUAN RIAU
            array('province_id' => '10', 'name' => 'B A T A M'), //KEPULAUAN RIAU
            array('province_id' => '10', 'name' => 'TANJUNG PINANG'), //KEPULAUAN RIAU
            array('province_id' => '11', 'name' => 'KEPULAUAN SERIBU'), //DKI JAKARTA
            array('province_id' => '11', 'name' => 'JAKARTA SELATAN'), //DKI JAKARTA
            array('province_id' => '11', 'name' => 'JAKARTA TIMUR'), //DKI JAKARTA
            array('province_id' => '11', 'name' => 'JAKARTA PUSAT'), //DKI JAKARTA
            array('province_id' => '11', 'name' => 'JAKARTA BARAT'), //DKI JAKARTA
            array('province_id' => '11', 'name' => 'JAKARTA UTARA'), //DKI JAKARTA
            array('province_id' => '12', 'name' => 'BOGOR'), //JAWA BARAT
            array('province_id' => '12', 'name' => 'SUKABUMI'), //JAWA BARAT
            array('province_id' => '12', 'name' => 'CIANJUR'), //JAWA BARAT
            array('province_id' => '12', 'name' => 'BANDUNG'), //JAWA BARAT
            array('province_id' => '12', 'name' => 'GARUT'), //JAWA BARAT
            array('province_id' => '12', 'name' => 'TASIKMALAYA'), //JAWA BARAT
            array('province_id' => '12', 'name' => 'CIAMIS'), //JAWA BARAT
            array('province_id' => '12', 'name' => 'KUNINGAN'), //JAWA BARAT
            array('province_id' => '12', 'name' => 'CIREBON'), //JAWA BARAT
            array('province_id' => '12', 'name' => 'MAJALENGKA'), //JAWA BARAT
            array('province_id' => '12', 'name' => 'SUMEDANG'), //JAWA BARAT
            array('province_id' => '12', 'name' => 'INDRAMAYU'), //JAWA BARAT
            array('province_id' => '12', 'name' => 'SUBANG'), //JAWA BARAT
            array('province_id' => '12', 'name' => 'PURWAKARTA'), //JAWA BARAT
            array('province_id' => '12', 'name' => 'KARAWANG'), //JAWA BARAT
            array('province_id' => '12', 'name' => 'BEKASI'), //JAWA BARAT
            array('province_id' => '12', 'name' => 'BANDUNG BARAT'), //JAWA BARAT
            array('province_id' => '12', 'name' => 'PANGANDARAN'), //JAWA BARAT
            array('province_id' => '12', 'name' => 'DEPOK'), //JAWA BARAT
            array('province_id' => '12', 'name' => 'CIMAHI'), //JAWA BARAT
            array('province_id' => '12', 'name' => 'BANJAR'), //JAWA BARAT
            array('province_id' => '13', 'name' => 'CILACAP'), //JAWA TENGAH
            array('province_id' => '13', 'name' => 'BANYUMAS'), //JAWA TENGAH
            array('province_id' => '13', 'name' => 'PURBALINGGA'), //JAWA TENGAH
            array('province_id' => '13', 'name' => 'BANJARNEGARA'), //JAWA TENGAH
            array('province_id' => '13', 'name' => 'KEBUMEN'), //JAWA TENGAH
            array('province_id' => '13', 'name' => 'PURWOREJO'), //JAWA TENGAH
            array('province_id' => '13', 'name' => 'WONOSOBO'), //JAWA TENGAH
            array('province_id' => '13', 'name' => 'MAGELANG'), //JAWA TENGAH
            array('province_id' => '13', 'name' => 'BOYOLALI'), //JAWA TENGAH
            array('province_id' => '13', 'name' => 'KLATEN'), //JAWA TENGAH
            array('province_id' => '13', 'name' => 'SUKOHARJO'), //JAWA TENGAH
            array('province_id' => '13', 'name' => 'WONOGIRI'), //JAWA TENGAH
            array('province_id' => '13', 'name' => 'KARANGANYAR'), //JAWA TENGAH
            array('province_id' => '13', 'name' => 'SRAGEN'), //JAWA TENGAH
            array('province_id' => '13', 'name' => 'GROBOGAN'), //JAWA TENGAH
            array('province_id' => '13', 'name' => 'BLORA'), //JAWA TENGAH
            array('province_id' => '13', 'name' => 'REMBANG'), //JAWA TENGAH
            array('province_id' => '13', 'name' => 'PATI'), //JAWA TENGAH
            array('province_id' => '13', 'name' => 'KUDUS'), //JAWA TENGAH
            array('province_id' => '13', 'name' => 'JEPARA'), //JAWA TENGAH
            array('province_id' => '13', 'name' => 'DEMAK'), //JAWA TENGAH
            array('province_id' => '13', 'name' => 'SEMARANG'), //JAWA TENGAH
            array('province_id' => '13', 'name' => 'TEMANGGUNG'), //JAWA TENGAH
            array('province_id' => '13', 'name' => 'KENDAL'), //JAWA TENGAH
            array('province_id' => '13', 'name' => 'BATANG'), //JAWA TENGAH
            array('province_id' => '13', 'name' => 'PEKALONGAN'), //JAWA TENGAH
            array('province_id' => '13', 'name' => 'PEMALANG'), //JAWA TENGAH
            array('province_id' => '13', 'name' => 'TEGAL'), //JAWA TENGAH
            array('province_id' => '13', 'name' => 'BREBES'), //JAWA TENGAH
            array('province_id' => '13', 'name' => 'SURAKARTA'), //JAWA TENGAH
            array('province_id' => '13', 'name' => 'SALATIGA'), //JAWA TENGAH
            array('province_id' => '14', 'name' => 'KULON PROGO'), //DI YOGYAKARTA
            array('province_id' => '14', 'name' => 'BANTUL'), //DI YOGYAKARTA
            array('province_id' => '14', 'name' => 'GUNUNG KIDUL'), //DI YOGYAKARTA
            array('province_id' => '14', 'name' => 'SLEMAN'), //DI YOGYAKARTA
            array('province_id' => '14', 'name' => 'YOGYAKARTA'), //DI YOGYAKARTA
            array('province_id' => '15', 'name' => 'PACITAN'), //JAWA TIMUR
            array('province_id' => '15', 'name' => 'PONOROGO'), //JAWA TIMUR
            array('province_id' => '15', 'name' => 'TRENGGALEK'), //JAWA TIMUR
            array('province_id' => '15', 'name' => 'TULUNGAGUNG'), //JAWA TIMUR
            array('province_id' => '15', 'name' => 'BLITAR'), //JAWA TIMUR
            array('province_id' => '15', 'name' => 'KEDIRI'), //JAWA TIMUR
            array('province_id' => '15', 'name' => 'MALANG'), //JAWA TIMUR
            array('province_id' => '15', 'name' => 'LUMAJANG'), //JAWA TIMUR
            array('province_id' => '15', 'name' => 'JEMBER'), //JAWA TIMUR
            array('province_id' => '15', 'name' => 'BANYUWANGI'), //JAWA TIMUR
            array('province_id' => '15', 'name' => 'BONDOWOSO'), //JAWA TIMUR
            array('province_id' => '15', 'name' => 'SITUBONDO'), //JAWA TIMUR
            array('province_id' => '15', 'name' => 'PROBOLINGGO'), //JAWA TIMUR
            array('province_id' => '15', 'name' => 'PASURUAN'), //JAWA TIMUR
            array('province_id' => '15', 'name' => 'SIDOARJO'), //JAWA TIMUR
            array('province_id' => '15', 'name' => 'MOJOKERTO'), //JAWA TIMUR
            array('province_id' => '15', 'name' => 'JOMBANG'), //JAWA TIMUR
            array('province_id' => '15', 'name' => 'NGANJUK'), //JAWA TIMUR
            array('province_id' => '15', 'name' => 'MADIUN'), //JAWA TIMUR
            array('province_id' => '15', 'name' => 'MAGETAN'), //JAWA TIMUR
            array('province_id' => '15', 'name' => 'NGAWI'), //JAWA TIMUR
            array('province_id' => '15', 'name' => 'BOJONEGORO'), //JAWA TIMUR
            array('province_id' => '15', 'name' => 'TUBAN'), //JAWA TIMUR
            array('province_id' => '15', 'name' => 'LAMONGAN'), //JAWA TIMUR
            array('province_id' => '15', 'name' => 'GRESIK'), //JAWA TIMUR
            array('province_id' => '15', 'name' => 'BANGKALAN'), //JAWA TIMUR
            array('province_id' => '15', 'name' => 'SAMPANG'), //JAWA TIMUR
            array('province_id' => '15', 'name' => 'PAMEKASAN'), //JAWA TIMUR
            array('province_id' => '15', 'name' => 'SUMENEP'), //JAWA TIMUR
            array('province_id' => '15', 'name' => 'SURABAYA'), //JAWA TIMUR
            array('province_id' => '15', 'name' => 'BATU'), //JAWA TIMUR
            array('province_id' => '16', 'name' => 'PANDEGLANG'), //BANTEN
            array('province_id' => '16', 'name' => 'LEBAK'), //BANTEN
            array('province_id' => '16', 'name' => 'TANGERANG'), //BANTEN
            array('province_id' => '16', 'name' => 'SERANG'), //BANTEN
            array('province_id' => '16', 'name' => 'TANGERANG SELATAN'), //BANTEN
            array('province_id' => '17', 'name' => 'JEMBRANA'), //BALI
            array('province_id' => '17', 'name' => 'TABANAN'), //BALI
            array('province_id' => '17', 'name' => 'BADUNG'), //BALI
            array('province_id' => '17', 'name' => 'GIANYAR'), //BALI
            array('province_id' => '17', 'name' => 'KLUNGKUNG'), //BALI
            array('province_id' => '17', 'name' => 'BANGLI'), //BALI
            array('province_id' => '17', 'name' => 'KARANGASEM'), //BALI
            array('province_id' => '17', 'name' => 'BULELENG'), //BALI
            array('province_id' => '17', 'name' => 'DENPASAR'), //BALI
            array('province_id' => '18', 'name' => 'LOMBOK BARAT'), //NUSA TENGGARA BARAT
            array('province_id' => '18', 'name' => 'LOMBOK TENGAH'), //NUSA TENGGARA BARAT
            array('province_id' => '18', 'name' => 'LOMBOK TIMUR'), //NUSA TENGGARA BARAT
            array('province_id' => '18', 'name' => 'SUMBAWA'), //NUSA TENGGARA BARAT
            array('province_id' => '18', 'name' => 'DOMPU'), //NUSA TENGGARA BARAT
            array('province_id' => '18', 'name' => 'BIMA'), //NUSA TENGGARA BARAT
            array('province_id' => '18', 'name' => 'SUMBAWA BARAT'), //NUSA TENGGARA BARAT
            array('province_id' => '18', 'name' => 'LOMBOK UTARA'), //NUSA TENGGARA BARAT
            array('province_id' => '18', 'name' => 'MATARAM'), //NUSA TENGGARA BARAT
            array('province_id' => '19', 'name' => 'SUMBA BARAT'), //NUSA TENGGARA TIMUR
            array('province_id' => '19', 'name' => 'SUMBA TIMUR'), //NUSA TENGGARA TIMUR
            array('province_id' => '19', 'name' => 'KUPANG'), //NUSA TENGGARA TIMUR
            array('province_id' => '19', 'name' => 'TIMOR TENGAH SELATAN'), //NUSA TENGGARA TIMUR
            array('province_id' => '19', 'name' => 'TIMOR TENGAH UTARA'), //NUSA TENGGARA TIMUR
            array('province_id' => '19', 'name' => 'BELU'), //NUSA TENGGARA TIMUR
            array('province_id' => '19', 'name' => 'ALOR'), //NUSA TENGGARA TIMUR
            array('province_id' => '19', 'name' => 'LEMBATA'), //NUSA TENGGARA TIMUR
            array('province_id' => '19', 'name' => 'FLORES TIMUR'), //NUSA TENGGARA TIMUR
            array('province_id' => '19', 'name' => 'SIKKA'), //NUSA TENGGARA TIMUR
            array('province_id' => '19', 'name' => 'ENDE'), //NUSA TENGGARA TIMUR
            array('province_id' => '19', 'name' => 'NGADA'), //NUSA TENGGARA TIMUR
            array('province_id' => '19', 'name' => 'MANGGARAI'), //NUSA TENGGARA TIMUR
            array('province_id' => '19', 'name' => 'ROTE NDAO'), //NUSA TENGGARA TIMUR
            array('province_id' => '19', 'name' => 'MANGGARAI BARAT'), //NUSA TENGGARA TIMUR
            array('province_id' => '19', 'name' => 'SUMBA TENGAH'), //NUSA TENGGARA TIMUR
            array('province_id' => '19', 'name' => 'SUMBA BARAT DAYA'), //NUSA TENGGARA TIMUR
            array('province_id' => '19', 'name' => 'NAGEKEO'), //NUSA TENGGARA TIMUR
            array('province_id' => '19', 'name' => 'MANGGARAI TIMUR'), //NUSA TENGGARA TIMUR
            array('province_id' => '19', 'name' => 'SABU RAIJUA'), //NUSA TENGGARA TIMUR
            array('province_id' => '19', 'name' => 'MALAKA'), //NUSA TENGGARA TIMUR
            array('province_id' => '20', 'name' => 'SAMBAS'), //KALIMANTAN BARAT
            array('province_id' => '20', 'name' => 'BENGKAYANG'), //KALIMANTAN BARAT
            array('province_id' => '20', 'name' => 'LANDAK'), //KALIMANTAN BARAT
            array('province_id' => '20', 'name' => 'MEMPAWAH'), //KALIMANTAN BARAT
            array('province_id' => '20', 'name' => 'SANGGAU'), //KALIMANTAN BARAT
            array('province_id' => '20', 'name' => 'KETAPANG'), //KALIMANTAN BARAT
            array('province_id' => '20', 'name' => 'SINTANG'), //KALIMANTAN BARAT
            array('province_id' => '20', 'name' => 'KAPUAS HULU'), //KALIMANTAN BARAT
            array('province_id' => '20', 'name' => 'SEKADAU'), //KALIMANTAN BARAT
            array('province_id' => '20', 'name' => 'MELAWI'), //KALIMANTAN BARAT
            array('province_id' => '20', 'name' => 'KAYONG UTARA'), //KALIMANTAN BARAT
            array('province_id' => '20', 'name' => 'KUBU RAYA'), //KALIMANTAN BARAT
            array('province_id' => '20', 'name' => 'PONTIANAK'), //KALIMANTAN BARAT
            array('province_id' => '20', 'name' => 'SINGKAWANG'), //KALIMANTAN BARAT
            array('province_id' => '21', 'name' => 'KOTAWARINGIN BARAT'), //KALIMANTAN TENGAH
            array('province_id' => '21', 'name' => 'KOTAWARINGIN TIMUR'), //KALIMANTAN TENGAH
            array('province_id' => '21', 'name' => 'KAPUAS'), //KALIMANTAN TENGAH
            array('province_id' => '21', 'name' => 'BARITO SELATAN'), //KALIMANTAN TENGAH
            array('province_id' => '21', 'name' => 'BARITO UTARA'), //KALIMANTAN TENGAH
            array('province_id' => '21', 'name' => 'SUKAMARA'), //KALIMANTAN TENGAH
            array('province_id' => '21', 'name' => 'LAMANDAU'), //KALIMANTAN TENGAH
            array('province_id' => '21', 'name' => 'SERUYAN'), //KALIMANTAN TENGAH
            array('province_id' => '21', 'name' => 'KATINGAN'), //KALIMANTAN TENGAH
            array('province_id' => '21', 'name' => 'PULANG PISAU'), //KALIMANTAN TENGAH
            array('province_id' => '21', 'name' => 'GUNUNG MAS'), //KALIMANTAN TENGAH
            array('province_id' => '21', 'name' => 'BARITO TIMUR'), //KALIMANTAN TENGAH
            array('province_id' => '21', 'name' => 'MURUNG RAYA'), //KALIMANTAN TENGAH
            array('province_id' => '21', 'name' => 'PALANGKA RAYA'), //KALIMANTAN TENGAH
            array('province_id' => '22', 'name' => 'TANAH LAUT'), //KALIMANTAN SELATAN
            array('province_id' => '22', 'name' => 'KOTABARU'), //KALIMANTAN SELATAN
            array('province_id' => '22', 'name' => 'BANJAR'), //KALIMANTAN SELATAN
            array('province_id' => '22', 'name' => 'BARITO KUALA'), //KALIMANTAN SELATAN
            array('province_id' => '22', 'name' => 'TAPIN'), //KALIMANTAN SELATAN
            array('province_id' => '22', 'name' => 'HULU SUNGAI SELATAN'), //KALIMANTAN SELATAN
            array('province_id' => '22', 'name' => 'HULU SUNGAI TENGAH'), //KALIMANTAN SELATAN
            array('province_id' => '22', 'name' => 'HULU SUNGAI UTARA'), //KALIMANTAN SELATAN
            array('province_id' => '22', 'name' => 'TABALONG'), //KALIMANTAN SELATAN
            array('province_id' => '22', 'name' => 'TANAH BUMBU'), //KALIMANTAN SELATAN
            array('province_id' => '22', 'name' => 'BALANGAN'), //KALIMANTAN SELATAN
            array('province_id' => '22', 'name' => 'BANJARMASIN'), //KALIMANTAN SELATAN
            array('province_id' => '22', 'name' => 'BANJAR BARU'), //KALIMANTAN SELATAN
            array('province_id' => '23', 'name' => 'PASER'), //KALIMANTAN TIMUR
            array('province_id' => '23', 'name' => 'KUTAI BARAT'), //KALIMANTAN TIMUR
            array('province_id' => '23', 'name' => 'KUTAI KARTANEGARA'), //KALIMANTAN TIMUR
            array('province_id' => '23', 'name' => 'KUTAI TIMUR'), //KALIMANTAN TIMUR
            array('province_id' => '23', 'name' => 'BERAU'), //KALIMANTAN TIMUR
            array('province_id' => '23', 'name' => 'PENAJAM PASER UTARA'), //KALIMANTAN TIMUR
            array('province_id' => '23', 'name' => 'MAHAKAM HULU'), //KALIMANTAN TIMUR
            array('province_id' => '23', 'name' => 'BALIKPAPAN'), //KALIMANTAN TIMUR
            array('province_id' => '23', 'name' => 'SAMARINDA'), //KALIMANTAN TIMUR
            array('province_id' => '23', 'name' => 'BONTANG'), //KALIMANTAN TIMUR
            array('province_id' => '24', 'name' => 'MALINAU'), //KALIMANTAN UTARA
            array('province_id' => '24', 'name' => 'BULUNGAN'), //KALIMANTAN UTARA
            array('province_id' => '24', 'name' => 'TANA TIDUNG'), //KALIMANTAN UTARA
            array('province_id' => '24', 'name' => 'NUNUKAN'), //KALIMANTAN UTARA
            array('province_id' => '24', 'name' => 'TARAKAN'), //KALIMANTAN UTARA
            array('province_id' => '25', 'name' => 'BOLAANG MONGONDOW'), //SULAWESI UTARA
            array('province_id' => '25', 'name' => 'MINAHASA'), //SULAWESI UTARA
            array('province_id' => '25', 'name' => 'KEPULAUAN SANGIHE'), //SULAWESI UTARA
            array('province_id' => '25', 'name' => 'KEPULAUAN TALAUD'), //SULAWESI UTARA
            array('province_id' => '25', 'name' => 'MINAHASA SELATAN'), //SULAWESI UTARA
            array('province_id' => '25', 'name' => 'MINAHASA UTARA'), //SULAWESI UTARA
            array('province_id' => '25', 'name' => 'BOLAANG MONGONDOW UTARA'), //SULAWESI UTARA
            array('province_id' => '25', 'name' => 'SIAU TAGULANDANG BIARO'), //SULAWESI UTARA
            array('province_id' => '25', 'name' => 'MINAHASA TENGGARA'), //SULAWESI UTARA
            array('province_id' => '25', 'name' => 'BOLAANG MONGONDOW SELATAN'), //SULAWESI UTARA
            array('province_id' => '25', 'name' => 'BOLAANG MONGONDOW TIMUR'), //SULAWESI UTARA
            array('province_id' => '25', 'name' => 'MANADO'), //SULAWESI UTARA
            array('province_id' => '25', 'name' => 'BITUNG'), //SULAWESI UTARA
            array('province_id' => '25', 'name' => 'TOMOHON'), //SULAWESI UTARA
            array('province_id' => '25', 'name' => 'KOTAMOBAGU'), //SULAWESI UTARA
            array('province_id' => '26', 'name' => 'BANGGAI KEPULAUAN'), //SULAWESI TENGAH
            array('province_id' => '26', 'name' => 'BANGGAI'), //SULAWESI TENGAH
            array('province_id' => '26', 'name' => 'MOROWALI'), //SULAWESI TENGAH
            array('province_id' => '26', 'name' => 'POSO'), //SULAWESI TENGAH
            array('province_id' => '26', 'name' => 'DONGGALA'), //SULAWESI TENGAH
            array('province_id' => '26', 'name' => 'TOLI-TOLI'), //SULAWESI TENGAH
            array('province_id' => '26', 'name' => 'BUOL'), //SULAWESI TENGAH
            array('province_id' => '26', 'name' => 'PARIGI MOUTONG'), //SULAWESI TENGAH
            array('province_id' => '26', 'name' => 'TOJO UNA-UNA'), //SULAWESI TENGAH
            array('province_id' => '26', 'name' => 'SIGI'), //SULAWESI TENGAH
            array('province_id' => '26', 'name' => 'BANGGAI LAUT'), //SULAWESI TENGAH
            array('province_id' => '26', 'name' => 'MOROWALI UTARA'), //SULAWESI TENGAH
            array('province_id' => '26', 'name' => 'PALU'), //SULAWESI TENGAH
            array('province_id' => '27', 'name' => 'KEPULAUAN SELAYAR'), //SULAWESI SELATAN
            array('province_id' => '27', 'name' => 'BULUKUMBA'), //SULAWESI SELATAN
            array('province_id' => '27', 'name' => 'BANTAENG'), //SULAWESI SELATAN
            array('province_id' => '27', 'name' => 'JENEPONTO'), //SULAWESI SELATAN
            array('province_id' => '27', 'name' => 'TAKALAR'), //SULAWESI SELATAN
            array('province_id' => '27', 'name' => 'GOWA'), //SULAWESI SELATAN
            array('province_id' => '27', 'name' => 'SINJAI'), //SULAWESI SELATAN
            array('province_id' => '27', 'name' => 'MAROS'), //SULAWESI SELATAN
            array('province_id' => '27', 'name' => 'PANGKAJENE DAN KEPULAUAN'), //SULAWESI SELATAN
            array('province_id' => '27', 'name' => 'BARRU'), //SULAWESI SELATAN
            array('province_id' => '27', 'name' => 'BONE'), //SULAWESI SELATAN
            array('province_id' => '27', 'name' => 'SOPPENG'), //SULAWESI SELATAN
            array('province_id' => '27', 'name' => 'WAJO'), //SULAWESI SELATAN
            array('province_id' => '27', 'name' => 'SIDENRENG RAPPANG'), //SULAWESI SELATAN
            array('province_id' => '27', 'name' => 'PINRANG'), //SULAWESI SELATAN
            array('province_id' => '27', 'name' => 'ENREKANG'), //SULAWESI SELATAN
            array('province_id' => '27', 'name' => 'LUWU'), //SULAWESI SELATAN
            array('province_id' => '27', 'name' => 'TANA TORAJA'), //SULAWESI SELATAN
            array('province_id' => '27', 'name' => 'LUWU UTARA'), //SULAWESI SELATAN
            array('province_id' => '27', 'name' => 'LUWU TIMUR'), //SULAWESI SELATAN
            array('province_id' => '27', 'name' => 'TORAJA UTARA'), //SULAWESI SELATAN
            array('province_id' => '27', 'name' => 'MAKASSAR'), //SULAWESI SELATAN
            array('province_id' => '27', 'name' => 'PAREPARE'), //SULAWESI SELATAN
            array('province_id' => '27', 'name' => 'PALOPO'), //SULAWESI SELATAN
            array('province_id' => '28', 'name' => 'BUTON'), //SULAWESI TENGGARA
            array('province_id' => '28', 'name' => 'MUNA'), //SULAWESI TENGGARA
            array('province_id' => '28', 'name' => 'KONAWE'), //SULAWESI TENGGARA
            array('province_id' => '28', 'name' => 'KOLAKA'), //SULAWESI TENGGARA
            array('province_id' => '28', 'name' => 'KONAWE SELATAN'), //SULAWESI TENGGARA
            array('province_id' => '28', 'name' => 'BOMBANA'), //SULAWESI TENGGARA
            array('province_id' => '28', 'name' => 'WAKATOBI'), //SULAWESI TENGGARA
            array('province_id' => '28', 'name' => 'KOLAKA UTARA'), //SULAWESI TENGGARA
            array('province_id' => '28', 'name' => 'BUTON UTARA'), //SULAWESI TENGGARA
            array('province_id' => '28', 'name' => 'KONAWE UTARA'), //SULAWESI TENGGARA
            array('province_id' => '28', 'name' => 'KOLAKA TIMUR'), //SULAWESI TENGGARA
            array('province_id' => '28', 'name' => 'KONAWE KEPULAUAN'), //SULAWESI TENGGARA
            array('province_id' => '28', 'name' => 'MUNA BARAT'), //SULAWESI TENGGARA
            array('province_id' => '28', 'name' => 'BUTON TENGAH'), //SULAWESI TENGGARA
            array('province_id' => '28', 'name' => 'BUTON SELATAN'), //SULAWESI TENGGARA
            array('province_id' => '28', 'name' => 'KENDARI'), //SULAWESI TENGGARA
            array('province_id' => '28', 'name' => 'BAUBAU'), //SULAWESI TENGGARA
            array('province_id' => '29', 'name' => 'BOALEMO'), //GORONTALO
            array('province_id' => '29', 'name' => 'GORONTALO'), //GORONTALO
            array('province_id' => '29', 'name' => 'POHUWATO'), //GORONTALO
            array('province_id' => '29', 'name' => 'BONE BOLANGO'), //GORONTALO
            array('province_id' => '29', 'name' => 'GORONTALO UTARA'), //GORONTALO
            array('province_id' => '30', 'name' => 'MAJENE'), //SULAWESI BARAT
            array('province_id' => '30', 'name' => 'POLEWALI MANDAR'), //SULAWESI BARAT
            array('province_id' => '30', 'name' => 'MAMASA'), //SULAWESI BARAT
            array('province_id' => '30', 'name' => 'MAMUJU'), //SULAWESI BARAT
            array('province_id' => '30', 'name' => 'PASANGKAYU'), //SULAWESI BARAT
            array('province_id' => '30', 'name' => 'MAMUJU TENGAH'), //SULAWESI BARAT
            array('province_id' => '31', 'name' => 'MALUKU TENGGARA BARAT'), //MALUKU
            array('province_id' => '31', 'name' => 'MALUKU TENGGARA'), //MALUKU
            array('province_id' => '31', 'name' => 'MALUKU TENGAH'), //MALUKU
            array('province_id' => '31', 'name' => 'BURU'), //MALUKU
            array('province_id' => '31', 'name' => 'KEPULAUAN ARU'), //MALUKU
            array('province_id' => '31', 'name' => 'SERAM BAGIAN BARAT'), //MALUKU
            array('province_id' => '31', 'name' => 'SERAM BAGIAN TIMUR'), //MALUKU
            array('province_id' => '31', 'name' => 'MALUKU BARAT DAYA'), //MALUKU
            array('province_id' => '31', 'name' => 'BURU SELATAN'), //MALUKU
            array('province_id' => '31', 'name' => 'AMBON'), //MALUKU
            array('province_id' => '31', 'name' => 'TUAL'), //MALUKU
            array('province_id' => '32', 'name' => 'HALMAHERA BARAT'), //MALUKU UTARA
            array('province_id' => '32', 'name' => 'HALMAHERA TENGAH'), //MALUKU UTARA
            array('province_id' => '32', 'name' => 'KEPULAUAN SULA'), //MALUKU UTARA
            array('province_id' => '32', 'name' => 'HALMAHERA SELATAN'), //MALUKU UTARA
            array('province_id' => '32', 'name' => 'HALMAHERA UTARA'), //MALUKU UTARA
            array('province_id' => '32', 'name' => 'HALMAHERA TIMUR'), //MALUKU UTARA
            array('province_id' => '32', 'name' => 'PULAU MOROTAI'), //MALUKU UTARA
            array('province_id' => '32', 'name' => 'PULAU TALIABU'), //MALUKU UTARA
            array('province_id' => '32', 'name' => 'TERNATE'), //MALUKU UTARA
            array('province_id' => '32', 'name' => 'TIDORE KEPULAUAN'), //MALUKU UTARA
            array('province_id' => '33', 'name' => 'FAKFAK'), //PAPUA BARAT
            array('province_id' => '33', 'name' => 'KAIMANA'), //PAPUA BARAT
            array('province_id' => '33', 'name' => 'TELUK WONDAMA'), //PAPUA BARAT
            array('province_id' => '33', 'name' => 'TELUK BINTUNI'), //PAPUA BARAT
            array('province_id' => '33', 'name' => 'MANOKWARI'), //PAPUA BARAT
            array('province_id' => '33', 'name' => 'SORONG SELATAN'), //PAPUA BARAT
            array('province_id' => '33', 'name' => 'SORONG'), //PAPUA BARAT
            array('province_id' => '33', 'name' => 'RAJA AMPAT'), //PAPUA BARAT
            array('province_id' => '33', 'name' => 'TAMBRAUW'), //PAPUA BARAT
            array('province_id' => '33', 'name' => 'MAYBRAT'), //PAPUA BARAT
            array('province_id' => '33', 'name' => 'MANOKWARI SELATAN'), //PAPUA BARAT
            array('province_id' => '33', 'name' => 'PEGUNUNGAN ARFAK'), //PAPUA BARAT
            array('province_id' => '34', 'name' => 'MERAUKE'), //PAPUA
            array('province_id' => '34', 'name' => 'JAYAWIJAYA'), //PAPUA
            array('province_id' => '34', 'name' => 'JAYAPURA'), //PAPUA
            array('province_id' => '34', 'name' => 'NABIRE'), //PAPUA
            array('province_id' => '34', 'name' => 'KEPULAUAN YAPEN'), //PAPUA
            array('province_id' => '34', 'name' => 'BIAK NUMFOR'), //PAPUA
            array('province_id' => '34', 'name' => 'PANIAI'), //PAPUA
            array('province_id' => '34', 'name' => 'PUNCAK JAYA'), //PAPUA
            array('province_id' => '34', 'name' => 'MIMIKA'), //PAPUA
            array('province_id' => '34', 'name' => 'BOVEN DIGOEL'), //PAPUA
            array('province_id' => '34', 'name' => 'MAPPI'), //PAPUA
            array('province_id' => '34', 'name' => 'ASMAT'), //PAPUA
            array('province_id' => '34', 'name' => 'YAHUKIMO'), //PAPUA
            array('province_id' => '34', 'name' => 'PEGUNUNGAN BINTANG'), //PAPUA
            array('province_id' => '34', 'name' => 'TOLIKARA'), //PAPUA
            array('province_id' => '34', 'name' => 'SARMI'), //PAPUA
            array('province_id' => '34', 'name' => 'KEEROM'), //PAPUA
            array('province_id' => '34', 'name' => 'WAROPEN'), //PAPUA
            array('province_id' => '34', 'name' => 'SUPIORI'), //PAPUA
            array('province_id' => '34', 'name' => 'MAMBERAMO RAYA'), //PAPUA
            array('province_id' => '34', 'name' => 'NDUGA'), //PAPUA
            array('province_id' => '34', 'name' => 'LANNY JAYA'), //PAPUA
            array('province_id' => '34', 'name' => 'MAMBERAMO TENGAH'), //PAPUA
            array('province_id' => '34', 'name' => 'YALIMO'), //PAPUA
            array('province_id' => '34', 'name' => 'PUNCAK'), //PAPUA
            array('province_id' => '34', 'name' => 'DOGIYAI'), //PAPUA
            array('province_id' => '34', 'name' => 'INTAN JAYA'), //PAPUA
            array('province_id' => '34', 'name' => 'DEIYAI'), //PAPUA
        );

        DB::table('cities')->insert($cities);
    }
}
