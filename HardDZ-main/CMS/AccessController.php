<?php
    include_once('./CMS/Permission.php');
    include_once('./CMS/Role.php');

    class AccessControl {
        private array $roles = [];
        private array $permissions = [];

        public function __construct(array $roles, array $permissions){
            $this->permissions = $permissions;
            $this->roles = $roles;
        }

        protected function getRoles() : array {
            return $this->roles;
        }

        protected function getPermissions() : array {
            return $this->permissions;
        }

        protected function checkAccess(Employee $employee, Permission $permission) : bool {  
            foreach($this->getRoles() as $currentRole) {
                if($currentRole->getName() == $employee->getRole()->getName()) {
                    foreach($this->getPermissions() as $currentPermission) {
                        if(
                            $currentPermission->getName() == $permission->getName() && 
                            $currentPermission->getId() == $permission->getId()
                        ) {
                            return true;
                        }
                    }  
                }
            }   
            return false;    
        }

        public function showResults(Employee $employee, Permission $permission) : void {
            echo $this->checkAccess($employee, $permission) ? 'true' : 'false';
        }
    }
?>