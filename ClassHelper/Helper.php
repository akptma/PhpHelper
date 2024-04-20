<?php
class AnyHelper
{

    public  function  Encode($String)
    {
        $Encode = base64_encode(base64_encode($String));
        return $Encode;
    }

    public function Decode($String)
    {
        $Decode = base64_decode(base64_decode($String));
        return $Decode;
    }

    public function NumberFormat($Number)
    {
        $ChangeTypeData = (string) $Number;
        $ArrSearch = [',','.'];
        $ReplaceChar = '';
        $Result = str_replace($ArrSearch,$ReplaceChar, $ChangeTypeData);
        return $Result;
    }

    public function ConvDateIndonesia ($Date)
    {

            $Month = array (1 =>   'Januari',
                'Februari',
                'Maret',
                'April',
                'Mei',
                'Juni',
                'Juli',
                'Agustus',
                'September',
                'Oktober',
                'November',
                'Desember'
            );
            $Split = explode(' ', $Date);
            $SplitDate = explode('-',$Split[0]);
            $GetTime = $Split[1];
            return $SplitDate[2] . ' ' . $Month[ (int)$SplitDate[1] ] . ' ' . $SplitDate[0] . ' ' . $GetTime;
    }

}