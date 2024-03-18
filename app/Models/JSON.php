<?php

class JSON extends Public_Variables
{

  

   function get($file)
   {
      $json = file_get_contents($file);
      $json_data = json_decode($json, true);
      return $json_data;
   }
}
