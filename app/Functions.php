<?php 
function searchForId($id, $array) {
   foreach ($array as $key => $val) {
       if ($val['product_id'] === $id) {
           return $key;
       }
   }
   return null;
}
?>