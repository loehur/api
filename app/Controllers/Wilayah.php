<?php

class Wilayah extends Controller
{
   function provinsi($token)
   {
      if ($token <> $this->valid_token) {
         echo json_encode(["message" => "Invalid Token"]);
         exit();
      }

      $json = file_get_contents('data/WILAYAH_regional/provinsi_province.json');
      print_r($json);
   }

   function kota($p, $token)
   {
      if ($token <> $this->valid_token) {
         echo json_encode(["message" => "Invalid Token"]);
         exit();
      }

      $json = file_get_contents('data/WILAYAH_regional/PROVINSI_province/' . $p . '.json');
      print_r($json);
   }

   function kecamatan($p, $token)
   {
      if ($token <> $this->valid_token) {
         echo json_encode(["message" => "Invalid Token"]);
         exit();
      }

      $json = file_get_contents('data/WILAYAH_regional/KOTA_city/' . $p . '.json');
      print_r($json);
   }
}
