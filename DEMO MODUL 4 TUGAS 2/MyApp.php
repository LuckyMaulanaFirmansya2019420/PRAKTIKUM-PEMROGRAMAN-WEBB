<?php

namespace MyApp;

// Trait untuk menyimpan informasi alamat
trait AddressTrait {
    public $street;
    public $city;
    public $state;
    public $zipcode;

    public function getAddress() {
        return "{$this->street}, {$this->city}, {$this->state}, {$this->zipcode}";
    }
}

// Abstract class untuk entitas Person
abstract class Person {
    protected $name;
    protected $age;

    // Abstract method untuk menampilkan informasi
    abstract public function displayInfo();

    // Magic method __construct untuk inisialisasi
    public function __construct($name, $age) {
        $this->name = $name;
        $this->age = $age;
    }
}

// Class Student yang merupakan turunan dari class Person
class Student extends Person {
    use AddressTrait;

    protected $studentId;

    // Magic method __construct untuk inisialisasi
    public function __construct($name, $age, $studentId) {
        parent::__construct($name, $age);
        $this->studentId = $studentId;
    }

    // Method untuk menampilkan informasi
    public function displayInfo() {
        return "Student: {$this->name}, Age: {$this->age}, Student ID: {$this->studentId}, Address: {$this->getAddress()}";
    }
}

// Class Teacher yang merupakan turunan dari class Person
class Teacher extends Person {
    use AddressTrait;

    protected $teacherId;

    // Magic method __construct untuk inisialisasi
    public function __construct($name, $age, $teacherId) {
        parent::__construct($name, $age);
        $this->teacherId = $teacherId;
    }

    // Method untuk menampilkan informasi
    public function displayInfo() {
        return "Teacher: {$this->name}, Age: {$this->age}, Teacher ID: {$this->teacherId}, Address: {$this->getAddress()}";
    }
}

// Membuat objek Student
$student = new Student("John Doe", 20, "S1234");
$student->street = "123 Main St";
$student->city = "Anytown";
$student->state = "CA";
$student->zipcode = "12345";

// Membuat objek Teacher
$teacher = new Teacher("Jane Smith", 35, "T5678");
$teacher->street = "456 Elm St";
$teacher->city = "Othertown";
$teacher->state = "NY";
$teacher->zipcode = "67890";

// Menampilkan informasi siswa dan guru
echo $student->displayInfo() . "\n";
echo $teacher->displayInfo() . "\n";

?>