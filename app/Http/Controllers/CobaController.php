<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CobaController extends Controller
{
    public function inputArray()
    {
        $array = [
            [
                "norec" => "a516faf0-1980-11ed-85c9-5d3d2533",
                "statusenabled" => true,
                "jeniskelamin" => "PEREMPUAN",
                "tglregistrasi" => "2022-09-12 00:00:00",
                "nocm" => "00072782",
                "nocmfk" => 4893,
                "noregistrasi" => "2208001735",
                "namaruangan" => "IGD UMUM",
                "namapasien" => "CHAERUNNISA",
                "kelompokpasien" => "BPJS",
                "namarekanan" => "BPJS KESEHATAN - NON POLRI",
                "namadokter" => "dr. DERYANT IMAGODEI NORON",
                "tglpulang" => "2022-09-12 00:00:00",
                "statuspasien" => "BARU",
                "norec_pa" => "5578d8d0-3249-11ed-bab5-f989f98e",
                "objectasuransipasienfk" => 253705,
                "pgid" => 30017,
                "objectruanganlastfk" => 569,
                "nosep" => "0119R0040922V000240",
                "norec_br" => null,
                "nostruklastfk" => "66607a50-510d-11ed-bd42-e78e480c",
                "noreservasi" => null,
                "kelasditanggung" => "Kelas II",
                "namakelas" => "Non Kelas",
                "tgllahir" => "1977-07-14 00:00:00",
                "objectdepartemenfk" => 24,
                "objectkelasfk" => 6,
                "deptid" => 24,
                "ppkrujukan" => "-",
                "istelemedicine" => null,
                "jaminankhusus" => null,
                "noidentitas" => "0000000000000000",
                "statusschedule" => "",
                "isdiagnosis" => "Other Specified Counselling"
            ],
            [
                "norec" => "a565e9a0-3f97-11ed-b717-635bc9ec",
                "statusenabled" => true,
                "jeniskelamin" => "LAKI-LAKI",
                "tglregistrasi" => "2022-09-29 08:39:29",
                "nocm" => "00072779",
                "nocmfk" => 4890,
                "noregistrasi" => "2209000001",
                "namaruangan" => "Poliklinik Penyakit Dalam",
                "namapasien" => "HARI MULYONO",
                "kelompokpasien" => "Umum/Pribadi",
                "namarekanan" => "Umum / Diri Sendiri",
                "namadokter" => "dr. PANJI GUGAH BHASKARA, Sp. PD",
                "tglpulang" => "2022-09-29 08:39:29",
                "statuspasien" => "LAMA",
                "norec_pa" => null,
                "objectasuransipasienfk" => null,
                "pgid" => 30007,
                "objectruanganlastfk" => 33,
                "nosep" => null,
                "norec_br" => null,
                "nostruklastfk" => null,
                "noreservasi" => null,
                "kelasditanggung" => null,
                "namakelas" => "Non Kelas",
                "tgllahir" => "1994-12-16 00:00:00",
                "objectdepartemenfk" => 18,
                "objectkelasfk" => 6,
                "deptid" => 18,
                "ppkrujukan" => null,
                "istelemedicine" => null,
                "jaminankhusus" => null,
                "noidentitas" => "00000000",
                "statusschedule" => "2209000001",
                "isdiagnosis" => false
            ],
            [
                "norec" => "bb5c3c30-3f9c-11ed-920d-a3e252d9",
                "statusenabled" => true,
                "jeniskelamin" => "LAKI-LAKI",
                "tglregistrasi" => "2022-09-29 09:15:49",
                "nocm" => "00072852",
                "nocmfk" => 4963,
                "noregistrasi" => "2209000002",
                "namaruangan" => "Poliklinik Penyakit Dalam",
                "namapasien" => "TEST",
                "kelompokpasien" => "Umum/Pribadi",
                "namarekanan" => "Umum / Diri Sendiri",
                "namadokter" => "dr. PANJI GUGAH BHASKARA, Sp. PD",
                "tglpulang" => "2022-09-29 09:15:49",
                "statuspasien" => "BARU",
                "norec_pa" => null,
                "objectasuransipasienfk" => null,
                "pgid" => 30007,
                "objectruanganlastfk" => 33,
                "nosep" => null,
                "norec_br" => null,
                "nostruklastfk" => null,
                "noreservasi" => null,
                "kelasditanggung" => null,
                "namakelas" => "Non Kelas",
                "tgllahir" => "2022-09-01 00:00:00",
                "objectdepartemenfk" => 18,
                "objectkelasfk" => 6,
                "deptid" => 18,
                "ppkrujukan" => null,
                "istelemedicine" => null,
                "jaminankhusus" => null,
                "noidentitas" => "0000000000000000",
                "statusschedule" => "2209000002",
                "isdiagnosis" => false
            ],
            [
                "norec" => "befb9dd0-3fa3-11ed-942b-79197053",
                "statusenabled" => true,
                "jeniskelamin" => "LAKI-LAKI",
                "tglregistrasi" => "2022-09-29 10:05:55",
                "nocm" => "0001822",
                "nocmfk" => 1824,
                "noregistrasi" => "2209000003",
                "namaruangan" => "Poliklinik Penyakit Dalam",
                "namapasien" => "MOCHAMAD RAGA PERBAWA",
                "kelompokpasien" => "Umum/Pribadi",
                "namarekanan" => "Umum / Diri Sendiri",
                "namadokter" => "dr. PANJI GUGAH BHASKARA, Sp. PD",
                "tglpulang" => "2022-09-29 10:05:55",
                "statuspasien" => "LAMA",
                "norec_pa" => null,
                "objectasuransipasienfk" => null,
                "pgid" => 30007,
                "objectruanganlastfk" => 33,
                "nosep" => null,
                "norec_br" => null,
                "nostruklastfk" => "de560240-5118-11ed-82be-0d2df1a9",
                "noreservasi" => null,
                "kelasditanggung" => null,
                "namakelas" => "Non Kelas",
                "tgllahir" => "1980-01-01 00:00:00",
                "objectdepartemenfk" => 18,
                "objectkelasfk" => 6,
                "deptid" => 18,
                "ppkrujukan" => null,
                "istelemedicine" => null,
                "jaminankhusus" => null,
                "noidentitas" => "000000000",
                "statusschedule" => "2209000003",
                "isdiagnosis" => "Other Specified Counselling"
            ],
            [
                "norec" => "53c41c30-3fa5-11ed-9706-cb3e77b0",
                "statusenabled" => true,
                "jeniskelamin" => "LAKI-LAKI",
                "tglregistrasi" => "2022-09-29 10:16:42",
                "nocm" => "00072853",
                "nocmfk" => 4964,
                "noregistrasi" => "2209000004",
                "namaruangan" => "Poliklinik Kebidanan & Kandungan",
                "namapasien" => "TESTING BAYI",
                "kelompokpasien" => "Umum/Pribadi",
                "namarekanan" => "Umum / Diri Sendiri",
                "namadokter" => "dr. MOHAMMAD WAHYU F. Sp. OG",
                "tglpulang" => "2022-09-29 10:16:42",
                "statuspasien" => "BARU",
                "norec_pa" => null,
                "objectasuransipasienfk" => null,
                "pgid" => 30002,
                "objectruanganlastfk" => 552,
                "nosep" => null,
                "norec_br" => null,
                "nostruklastfk" => null,
                "noreservasi" => null,
                "kelasditanggung" => null,
                "namakelas" => "Non Kelas",
                "tgllahir" => "2022-09-01 00:00:00",
                "objectdepartemenfk" => 18,
                "objectkelasfk" => 6,
                "deptid" => 18,
                "ppkrujukan" => null,
                "istelemedicine" => null,
                "jaminankhusus" => null,
                "noidentitas" => "0000000000000000",
                "statusschedule" => "2209000004",
                "isdiagnosis" => false
            ]
        ];
        return $array;
    }
    public function api11()
    {
        $arr = array();
        $arrPenyakit = array();
        // return $this->inputArray();
        foreach ($this->inputArray() as $a) {
            // echo $a['jumlahpasien'];
            if (!in_array($a['namaruangan'], $arrPenyakit)) {
                $arrPenyakit[] = $a['namaruangan'];
            }
        }
        // return $arrPenyakit;

        foreach ($arrPenyakit as $b) {
            $jumlahPasien = 0;
            foreach ($this->inputArray() as $a) {
                // echo $a['jumlahpasien'];
                if ($b == $a['namaruangan']) {
                    $jumlahPasien++;
                }
            }
            $arr[] = [
                'namaruangan' => $b,
                'jumlahpasien' => $jumlahPasien
            ];
        }
        // return $arrPenyakit;

        return response()->json($arr);
    }
    public function api12()
    {
        $arr = array();
        $arrDokter = array();
        // return $this->inputArray();
        foreach ($this->inputArray() as $a) {
            // echo $a['jumlahpasien'];
            if (!in_array($a['namadokter'], $arrDokter)) {
                $arrDokter[] = $a['namadokter'];
            }
        }
        // return $arrPenyakit;

        foreach ($arrDokter as $b) {
            $jumlahPasien = 0;
            foreach ($this->inputArray() as $a) {
                // echo $a['jumlahpasien'];
                if ($b == $a['namadokter']) {
                    $jumlahPasien++;
                }
            }
            $arr[] = [
                'namadokter' => $b,
                'jumlahpasien' => $jumlahPasien
            ];
        }
        // return $arrPenyakit;

        return response()->json($arr);
    }
    public function countPasien()
    {
        $arr = array();
        foreach ($this->inputArray() as $a) {
            $arr[] = [
                'nama' => $a['namapasien'],
                'jumlahHuruf' => strlen($a['namapasien'])
            ];
        }
        return response()->json($arr);
    }
    public function datePasien()
    {
        $arr = array();
        foreach ($this->inputArray() as $a) {
            $arr[] = [
                'nama' => $a['namapasien'],
                'tanggal' => date('d F Y H:i:s', strtotime($a['tglregistrasi']))
            ];
        }
        return response()->json($arr);
    }
    public function noPasien()
    {
        $arr = array();
        foreach ($this->inputArray() as $key => $a) {
            $arr[] = collect($a)->prepend($key + 1, 'no');
        }
        return response()->json($arr);
    }
}
