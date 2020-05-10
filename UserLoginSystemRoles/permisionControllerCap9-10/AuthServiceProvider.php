use Gate;


 public function boot()
    {
        $this->registerPolicies();
        
       Gate::define('manage-users', function($user){
      
            return $user->hasAnyRoles(['admin','author']);
            
        });
        
         Gate::define('edit-users', function($user){
      
            return $user->hasAnyRoles(['admin','author']);
            
        });
        
        
        Gate::define('delete-users', function($user){
      
            return $user->hasRole('admin');
            
        });
        
        //crear filtros segun usuarios

        
    }
