<?php
function getFiledArr($arr, $fields){
   if(!is_array($fields)) {
     return $arr;
   }
   $res = array();
   foreach ($fields as $key) {
      if (isset($arr[$key])) {
          $res[$key] = $arr[$key];
      }
   }
   return $res;
}
