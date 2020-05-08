App/

public function users(){
        return $this->belongsTo('App\User', 'user_id');
    }

