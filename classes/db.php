<?php
$servername = "localhost";
$username = "root";
$password = "123456";
$dbname = "DMCdbPDO";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // sql to create table
    $sql = "CREATE TABLE MyGuests (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    firstname VARCHAR(30) NOT NULL,
    lastname VARCHAR(30) NOT NULL,
    email VARCHAR(50),
    reg_date TIMESTAMP
    )";

    // use exec() because no results are returned
    $conn->exec($sql);
    echo "Table MyGuests created successfully";
    }
catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }

$conn = null;
?>




<?php

    $con = mysqli_connect('localhost','my user id','my password');
    if(!con)
    { echo 'not connected to server';}else { echo 'something else is wrong' ;}

    if(!mysqli_select_db($con,'my user id')
    { echo 'Database error selection';}

    $YES = $_POST['YES'];
    $NO = $_POST['NO'];

    $sql = INSERT INTO users (YES,NO) VALUES ('$YES','$NO');

    if(!mysqli_query($con,$sql))
    { echo 'Answer not submitted please try again!!!!!!!!';}
    else{
    echo 'Your answer successfully submitted \n Thanks for participating';}

    header(" refresh:2; url=index.html");

?>

<?php
class dbconnect{
public $host='localhost';
public $user='root';
public $pass='123456';
public $dbcon;
public $dbname='skv';
public $sql;
public $res;
public $nrow;
public $ires;
public $iid;
function __construct()
{
	$this->dbcon=mysqli_connect($this->host,$this->user,$this->pass);
	$connected=mysqli_select_db($this->dbname, $this->dbcon);
	if(! $this->dbcon) {
	         throw new Exception("Unable to use the database ".$dbname."!");
	       }

	}
function selecttb()
{
	$this->res=mysqli_query($this->sql);
	$this->nrow=mysqli_affected_rows();
	}
function inserttb()
{
	$insert=mysqli_query($this->sql);
	if(!$insert) {
	         $this->ires=0;
			 return;
		   }
	$this->ires=1;
	$this->iid=mysqli_insert_id();
	}
function updatetb()
{
	mysqli_query($this->sql);
	}
function deletetb()
{
	mysqli_query($this->sql);

	}
}
?>
