App/

public function roles(){
        return $this->belongsToMany('App\Role','role_id');
    }

