<?php
class Product{
  public $product_id;
  public $info;
  function __construct($product_id){
    global $conn;
    $this->product_id = $conn->real_escape_string($product_id);
  }
  function get_info(){
    global $conn;
    $sql = "SELECT * FROM `products` WHERE `id` = $this->product_id";
    $result = $conn->query($sql);
    if($result){
      $count = 0;
      $count = mysqli_num_rows($result);
      if($count>0){
        while($row = $result->fetch_assoc()){
          return $row;
        }
        $this->info = "exit while";
        return 0 ;
      }
      
    }
  }
};
?>