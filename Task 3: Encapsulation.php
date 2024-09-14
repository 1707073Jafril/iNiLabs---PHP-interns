<?php
class Employee {
    private $name;
    private $salary;

    //Initialize employee name and salary
    public function __construct($name, $salary) {
        $this->name = $name;
        $this->setSalary($salary);  //Initialize salary with validation
    }

    //Getter for employee name
    public function getName() {
        return $this->name;
    }

    //Setter for employee name
    public function setName($name) {
        $this->name = $name;
    }

    //Getter for employee salary
    public function getSalary() {
        return $this->salary;
    }

    //Setter for employee salary
    public function setSalary($salary) {
        if ($salary < 0) {
            throw new Exception("Salary is negative!");
        }
        $this->salary = $salary;
    }

    //Display employee details
    public function displayEmployeeInfo() {
        echo "Name: " . $this->getName() . PHP_EOL;
        echo "Salary: $" . number_format($this->getSalary(), 2) . PHP_EOL;
    }
}

?>

<?php
//Creating an employee object
try {
    $employee1 = new Employee("Md. Jafril", 50000);
    $employee1->displayEmployeeInfo();  //Displays employee details
    
    //Updating salary
    $employee1->setSalary(60000);
    echo "Updated Salary: $" . $employee1->getSalary() . PHP_EOL;

    //Set an invalid salary
    $employee1->setSalary(-1000);  //This will throw an exception

} catch (Exception $e) {
    echo "Error: " . $e->getMessage() . PHP_EOL;
}
?>
