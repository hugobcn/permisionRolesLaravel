use App\Role;
use Gate;


   public function hasAnyRoles($roles) {
        
        if($this->roles()->whereIn('name',$roles)->first())
        {
            return true;
        }
            return false;
        
       
    }
    
    public function hasRole($role) {
        
        if($this->roles()->where('name',$role)->first())
        {
            return true;
        }
            return false;
        
        
    }
