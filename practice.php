<?php
// Abstract class for a Calculator
abstract class Calculator {
    protected $num1;
    protected $num2;
    
    // Constructor to initialize values
    public function __construct($num1, $num2) {
        $this->num1 = $num1;
        $this->num2 = $num2;
        //$this-> used to acces properties and methods and to refer the current object 
    }
    
    // Abstract method to be implemented by subclasses
    abstract public function calculate($operation);
}

// Derived class implementing the abstract class
class AdvancedCalculator extends Calculator {
    // Method implementing polymorphism (overriding abstract method)
    public function calculate($operation) {
        $result = 0;
        // Using logical operators && and ||
        if ($operation == 'add' || $operation == 'plus') {
            $result = $this->num1 + $this->num2;
        } elseif ($operation == 'subtract' && $this->num1 >= $this->num2) {
            $result = $this->num1 - $this->num2;
        } elseif ($operation == 'multiply') {
            $result = $this->num1 * $this->num2;
        } elseif ($operation == 'divide') {
            // Avoid division by zero using logical AND (&&)
            if ($this->num2 != 0 && is_numeric($this->num2)) {
                $result = $this->num1 / $this->num2;
            } else {
                return "Error: Division by zero!";
            }
        } else {
            return "Invalid operation!";
        }
        
        return "Result: " . $result;
    }
    
    // Additional method using switch case and logical operators
    public function calculateUsingSwitch($operation) {
        switch ($operation) {
            case 'add':
            case 'plus':
                return "Result: " . ($this->num1 + $this->num2);
            case 'subtract':
                return ($this->num1 >= $this->num2) ? "Result: " . ($this->num1 - $this->num2) : "Error: Cannot subtract larger number!";
            case 'multiply':
                return "Result: " . ($this->num1 * $this->num2);
            case 'divide':
                return ($this->num2 != 0) ? "Result: " . ($this->num1 / $this->num2) : "Error: Division by zero!";
            case 'modulus':
                return ($this->num2 != 0) ? "Result: " . ($this->num1 % $this->num2) : "Error: Modulus by zero!";
            default:
                return "Invalid operation!";
        }
    }
}
$x="Awoke";
echo(settype($x,"integer"));
echo(gettype($x));
// Creating an object of AdvancedCalculator class
$calc = new AdvancedCalculator(10, 5);

// Calling methods
echo $calc->calculate('add') . "<br>";
echo $calc->calculate('subtract') . "<br>";
echo $calc->calculate('multiply') . "<br>";
echo $calc->calculate('divide') . "<br>";

echo $calc->calculateUsingSwitch('add') . "<br>";
echo $calc->calculateUsingSwitch('subtract') . "<br>";
echo $calc->calculateUsingSwitch('multiply') . "<br>";
echo $calc->calculateUsingSwitch('divide') . "<br>";
echo $calc->calculateUsingSwitch('modulus') . "<br>";
?>
