<?
class registered extends users {

  public function __construct() {
    parent::__construct();
    $this->user_level = 'Regular User';
    $this->user_id='sluangra';
    $this->user_type='1';
    $this->first_name='Stephanie';
    $this->last_name='Luangraj';
    $this->email_address='sluangra@iu.edu';


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
