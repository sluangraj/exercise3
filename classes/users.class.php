<?
abstract class users {
  protected $user_id;
  protected $user_type;
  protected $first_name;
  protected $last_name;
  protected $email_address;
  protected $user_level;

  public function __construct() {
    $this->user_id = "sluangra";

  }
  public function __set($name,$value) {

  }
  public function __get($name){


  }

  public function __destruct(){

  }

  static public function addUsers($a,$b){
    return ($a + $b) * $a;
  }

}
?>
