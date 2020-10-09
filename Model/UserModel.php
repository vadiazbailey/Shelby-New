class LoginModel(){

//Variables
private $db;

//Constructor-> le declaro con que base de datos se va a comunicar
function __construct(){
    $this->db = new PDO('mysql:host=localhost;'.'dbname=user;charset=utf8', 
    'root', '');
}

function GetUser($user){
    $sentencia = $this->db->prepare("SELECT * FROM users WHERE email=?");
    $sentencia->execute(array($user));
    return = $sentencia->fetchAll(PDO::FETCH_OBJ);
    
}
}