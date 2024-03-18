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

   function kota($token)
   {
      $id = $_POST['id'];
      if ($token <> $this->valid_token) {
         echo json_encode(["message" => "Invalid Token"]);
         exit();
      }

      $json = file_get_contents('data/WILAYAH_regional/PROVINSI_province/' . $id . '.json');
      print_r($json);
   }

   function kecamatan($token)
   {
      $id = $_POST['id'];
      if ($token <> $this->valid_token) {
         echo json_encode(["message" => "Invalid Token"]);
         exit();
      }

      $json = file_get_contents('data/WILAYAH_regional/KOTA_city/' . $id . '.json');
      print_r($json);
   }
}
