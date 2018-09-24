<?
class admin extends users {

  public function __construct() {
    parent::__construct();
    $this->user_level = 'Administrator';
    $this->user_id='tester';
    $this->user_type='2';
    $this->first_name='Testing';
    $this->last_name='Luangraj';
    $this->email_address='test@iu.edu';

  }
  public function __set($name,$value) {
    $this->$name = $value;
    return;

  }
  public function __get($name){
    return $this->$name;

  }

  public function __destruct(){

  }

}
?>
