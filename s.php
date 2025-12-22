<?php
abstract class staff{
public $name;
protected $id;
private $salary;
public $task;
public function __construct($name, $id, $salary, $task){
    $this->name = $name;
    $this->id = $id;
    $this->salary = $salary;
    $this->task = $task;
}
public function get_salary(){
    return $this->salary;
}
public function set_salary($salary){
    if ($salary >= 0) {
            $this->salary = $salary;
        } else {
            echo "Salary cannot be negative.<br>";
        }
}
    
public function getTaxedSalary() {
    $taxRate = 10; 
    return $this->salary - ($this->salary * $taxRate / 100);
}

public function __destruct()
{
    echo "Staff member {$this->name} record closed.<br>";
}
abstract public function performDuty();
}
class Doctor extends staff implements SurgeonInterface{
    public $specialty;
    public function performSurgery() {
        echo "Doctor is performing surgery.<br>";
    }
public function performDuty(){
    if($this->id >0){
echo "Doctor is examining patients.<br>";
    }
     else {
        echo "not a doctor";
     }
     
}
}
class Nurse extends staff implements EmergencyInterface{
    public $shiftTime ;
    public function performDuty(){
        echo "nurs is examining patients.<br>";

}
 public function handleEmergency() {
    echo "Emergency Nurse is caring for patients.<br>";
 }

}
interface  SurgeonInterface {
    public function performSurgery() ;
    
}
interface  EmergencyInterface {
    public function handleEmergency();

    
}
class HospitalManager{
    public function checkWork(Staff $staffMember){
        $staffMember->performDuty();
    }
   
}
 $staffMember=[
    new Doctor("Ali", 1, 5000, "Cardiology"),
    new Doctor("Sara", 2, 5500, "Neurology"),
    new Nurse("Mona", 3, 3000, "Morning"),
    new Nurse("Omar", 4, 3200, "Night")
 ];
 $manager = new HospitalManager();

    foreach($staffMember as $staff){
        $manager->checkWork(   $staff );
    }
?>