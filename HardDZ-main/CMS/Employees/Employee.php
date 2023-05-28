<?php
include_once('./CMS/Role.php');
include_once('./CMS/Departments/Department.php');

class Employee {
    private string $name;
    private string $email;
    private string $password;
    private Department $department;
    private Role $role;

    public function __construct(string $name, string $email, string $password, Department $department, Role $role){
        $this->name = $name;
        $this->email = $email;
        $this->password = $password;
        $this->department = $department;
        $this->role = $role;
    }

    public function getName() : string { 
        return $this->name;
    }
    protected function getEmail() : string { 
        return $this->email;
    }
    protected function getPassword() : string { 
        return $this->password;
    }
    public function getDepartment() : Department { 
        return $this->department;
    }
    public function getRole() : Role { 
        return $this->role;
    }
}
?>