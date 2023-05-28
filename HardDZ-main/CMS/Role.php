<?php
    include_once('./CMS/Permission.php');
    
    class Role {
        private string $name;
        private array $permissions = [];

        public function __construct(string $name, array $permissions){
            $this->permissions = $permissions;
            $this->name = $name;
        }

        public function getName() : string { 
            return $this->name;
        }
        public function getPermissions() : array {
            return $this->permissions;
        }
        public function addPermission(Permission $permission) : void {
            $this->permissions[] = $permission;
        }
        public function removePermission(Permission $permission) : void{    
            if(array_search($permission, $this->permissions)){
                unset($permission);
            }         
        }
    }
?>