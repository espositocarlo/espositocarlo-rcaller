<?php


class CodeUtils {
  
  public static function addNumericArray(&$sb, $name, $arr, $useEquals) {
    if ($useEquals) {
      //RCode.append(name).append("=").append("c(");
      $sb .= $name . "=" . "c(";
    } else {
      //RCode.append(name).append("<-").append("c(");
      $sb .= $name . "<-" . "c(";
    }
    for ($i = 0; $i < count($arr); $i++) {
      //RCode.append(String.valueOf(arr[i]));
      $sb .= $arr[$i];
      if (i < arr.length - 1) {
        //RCode.append(", ");
        $sb .= ", ";
      }
    }
    if ($useEquals) {
      //RCode.append(")");
      $sb .= ")";
    } else {
      //RCode.append(");").append("\n");
      $sb .= ");" . "\n";
    }
  }
  
  
 
   public static function addStringArray(&$sb, $name, $arr, $useEquals) {
    if ($useEquals) {
      //RCode.append(name).append("=").append("c(");
      $sb .= $sb . $name . "=" . "c(";
    } else {
      //RCode.append(name).append("<-").append("c(");
      $sb .= $sb . $name . "<-" . "c(";
    }
    for ($i = 0; $i < count($arr); $i++) {
      //RCode.append("\"").append(arr[i]).append("\"");
      $sb .= "\"". $arr[$i]. "\"";
      if (i < count($arr) - 1) {
        //RCode.append(", ");
        $sb .= ", ";
      }
    }
    if ($useEquals) {
      //RCode.append(")");
      $sb .= ")";
    } else {
      //RCode.append(");").append("\n");
      $sb .= ");" . "\n";
    }
  }

}

?>