<?php
class panier{
public $name;
private static $nbpanier=0;
public function _construct($name){
$this->name=$name;
}
public function set($key, $value){
$_SESSION['paniers'][$this->name][$key]=$value;

}
public function get($key){
if (isset($_SESSION['paniers'][$this->name][$key]))
return $_SESSION['paniers'][$this->name][$key];
return null;
}
public function delete($key){
if (isset($_SESSION['paniers'][$this->name][$key]))
unset($_SESSION['paniers'][$this->name][$key]);

}
public function getpanier(){
if (isset($_SESSION['paniers'][$this->name]))
return $_SESSION['paniers'][$this->name];
return array();
}
public function clear(){
if (isset($_SESSION['paniers'][$this->name][$key]))
unset($_SESSION['paniers'][$this->name]);
}
}
?>