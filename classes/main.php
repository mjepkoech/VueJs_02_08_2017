<?php
include("person.php");        
include("student.php");    
include("teacher.php");
        
//Creating an object of the class "teacher"
$t1=new teacher();
$t1->name="Ronnie";
$t1->forename="Nyaga";
$t1->email="@ronnie.com";

echo $t1->name.", ".$t1->forename.": ".$t1->email;
$t1->ID();

//Creating an object of the class "student"
$s1=new student();
$s1->name="millie";
$s1->forename="queen";

echo $s1->name."; ".$s1->forename;
$s1->ID();
?>
//person.php
<?php
class person
{
  //Attribute
  public $name;
  public $forename;
}
?>
