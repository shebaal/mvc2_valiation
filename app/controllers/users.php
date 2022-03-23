<?php
require_once 'controller.php';




class Users extends Controller
{
    

    public function __construct()
    {

        echo "<h1>inside users controller construct</h1>";
    }




    function index()
    {

        echo "<h1>index of users</h1>";
    }
    function show($id)
    {


        $user = $this->model('user');
        
        $userName = $user->select($id);
        $this->view('user_view', $userName);
    }
    function add()
    {

        echo "<h1>add of users</h1>";
    }

    function add_user()
    {
        print_r($_POST);
        
        if(isset($_POST['submit']))
        {
             

            $validate = new Data_Validator();
    
       
            $userName=$_POST['name'];
            $password=$_POST['password'];
            $email=$_POST['email'];

            $validate->set('name', $userName)->is_required()->min_length(5)
            ->set('password', $password)->is_required()->max_length(5)
            ->set('email', $email)->is_required()->is_email()
            ;
           if($validate->validate()==true)
           {
               $user_data =array(
                   'name'=>$userName,
                   'password'=>md5($password),
                   'email'=>$email
                   
               );
               $u=$this->model('user');
               $message="";
               if($u->insert($user_data)){
                   $type='success';
                    $message="user created successful";
                    $this->view('feedback',array('type'=>$type,'message'=>$message));

                }
               else {
                   $type='danger';
                   $message="can not create user please check your data ";
               
                   $this->view('register',array('type'=>$type,'message'=>$message,'form_values'=>$_POST));

                }
           } 
           else{
            $todos_erros = $validate->get_errors(); 
            $erros_nome = $validate->get_errors('name'); 
            $erros_email = $validate->get_errors('email'); 
            $erros_password = $validate->get_errors('password'); 
            foreach ($erros_nome as $erro){
                echo '<p>' . $erro . '</p>';
            }
            foreach ($erros_email as $erro){
                echo '<p>' . $erro . '</p>';
            }
            foreach ($erros_password as $erro){
                echo '<p>' . $erro . '</p>';
            }
        }

        }
        
    }
    function register()
    {
        $this->view('register');
    }

    function list_all()
    { $users=$this->model("user");
        $result=$users->select();
        $this->view('users_table',$result);

    }
    function status($id){
    $user=$this->model("user");
        $user->changeStatus($id);
        $this->list_all();

//        header('location:users/list_all');


        
    }
}


class Data_Validator {

    protected $_data     = array();
    protected $_errors   = array();
    protected $_pattern  = array();
    protected $_messages = array();

    /**
     * Construct method (Set the error messages default)
     * @access public
     * @return void
     */
    public function __construct() {
        $this->set_messages_default();
        $this->define_pattern();
    }


    /**
     * Set a data for validate
     * @access public
     * @param $name String The name of data
     * @param $value Mixed The value of data
     * @return Data_Validator The self instance
     */
    public function set($name, $value){
        $this->_data['name'] = $name;
        $this->_data['value'] = $value;
        return $this;
    }


    /**
     * Set error messages default born in the class
     * @access protected
     * @return void
     */
    protected function set_messages_default(){
        $this->_messages = array(
            'is_required'    => 'is_required %s ',
            'min_length'     => 'is_required %s at least have %s character(es)',
            'max_length'     => 'is_required %s must contain as much as possible %s character(es)',
            
            'is_email'       => 'Email %s is not valid ',
        );
    }


    /**
     * The number of validators methods available in DataValidator
     * @access public
     * @return int Number of validators methods
     */
    public function get_number_validators_methods(){
        return count($this->_messages);
    }

    /**
     * Define a custom error message for some method
     * @access public
     * @param String $name The name of the method
     * @param String $value The custom message
     * @return void
     */
    public function set_message($name, $value){
        if (array_key_exists($name, $this->_messages)){
            $this->_messages[$name] = $value;
        }
    }


    /**
     * Get the error messages
     * @access public
     * @param String $param [optional] A specific method
     * @return Mixed One array with all error messages or a message of specific method
     */
    public function get_messages($param = false){
        if ($param){
            return $this->_messages[$param];
        }
        return $this->_messages;
    }


    /**
     * Define the pattern of name of error messages
     * @access public
     * @param String $prefix [optional] The prefix of name
     * @param String $sufix [optional] The sufix of name
     * @return void
     */
    public function define_pattern($prefix = '', $sufix = ''){
        $this->_pattern['prefix'] = $prefix;
        $this->_pattern['sufix']  = $sufix;
    }


    /**
     * Set a error of the invalid data
     * @access protected
     * @param String $error The error message
     * @return void
     */
    protected function set_error($error){
        $this->_errors[$this->_pattern['prefix'] . $this->_data['name'] . $this->_pattern['sufix']][] = $error;
    }

    /**
     * Verify if the current data is not null
     * @access public
     * @return Data_Validator The self instance
     */
    public function is_required(){
        if (empty ($this->_data['value'])){
            $this->set_error(sprintf($this->_messages['is_required'], $this->_data['name']));
        }
        return $this;
    }


    /**
     * Verify if the length of current value is less than the parameter
     * @access public
     * @param Int $length The value for compare
     * @param Boolean $inclusive [optional] Include the lenght in the comparison
     * @return Data_Validator The self instance
     */
    public function min_length($length, $inclusive = false){
        $verify = ($inclusive === true ? strlen($this->_data['value']) >= $length : strlen($this->_data['value']) > $length);
        if (!$verify){
            $this->set_error(sprintf($this->_messages['min_length'], $this->_data['name'], $length));
        }
        return $this;
    }


    /**
     * Verify if the length of current value is more than the parameter
     * @access public
     * @param Int $length The value for compare
     * @param Boolean $inclusive [optional] Include the lenght in the comparison
     * @return Data_Validator The self instance
     */
    public function max_length($length, $inclusive = false){
        $verify = ($inclusive === true ? strlen($this->_data['value']) <= $length : strlen($this->_data['value']) < $length);
        if (!$verify){
            $this->set_error(sprintf($this->_messages['max_length'], $this->_data['name'], $length));
        }
        return $this;
    }


   







    /**
     * Verify if the current data is a valid email
     * @access public
     * @return Data_Validator The self instance
     */
    public function is_email(){
        if (filter_var($this->_data['value'], FILTER_VALIDATE_EMAIL) === false) {
            $this->set_error(sprintf($this->_messages['is_email'], $this->_data['value']));
        }
        return $this;
    }



  

    /**
     * Validate the data
     * @access public
     * @return bool The validation of data
     */
    public function validate(){
        return (count($this->_errors) > 0 ? false : true);
    }


    /**
     * The messages of invalid data
     * @param String $param [optional] A specific error
     * @return Mixed One array with messages or a message of specific error
     */
    public function get_errors($param = false){
        if ($param){
            if(isset($this->_errors[$this->_pattern['prefix'] . $param . $this->_pattern['sufix']])){
                return $this->_errors[$this->_pattern['prefix'] . $param . $this->_pattern['sufix']];
            }
            else{
                return false;
            }
        }
        return $this->_errors;
    }
}

