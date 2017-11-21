<?php
class Services {

  public static function parseToXML($htmlStr)
  {
    header('Access-Control-Allow-Origin: *');
    header("Content-type: text/xml");
      $xmlStr=str_replace('<','&lt;',$htmlStr);
      $xmlStr=str_replace('>','&gt;',$xmlStr);
      $xmlStr=str_replace('"','&quot;',$xmlStr);
      $xmlStr=str_replace("'",'&#39;',$xmlStr);
      $xmlStr=str_replace("&",'&amp;',$xmlStr);
      return $xmlStr;
  }

}
