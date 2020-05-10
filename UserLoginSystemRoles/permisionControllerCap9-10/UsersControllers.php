use Gate;


 public function edit(User $user)
    {
        //dd($user);
       
        if(Gate::denies('edit-users')){
            return redirect(route('admin.users.index'))->with(['message' => 'KO, no tiene autorizacion']);
        }
        
        $roles = Role::all();
        
        return view('admin.users.edit')->with([
            'user'=> $user,
            'roles'=>$roles
        ]);
        
    }

   
    public function destroy(User $user)
    {
        //dd($user);
        if(Gate::denies('delete-users')){
            return redirect(route('admin.users.index'))->with(['message' => 'KO, no tiene autorizacion']);
        }
        
        
        
        $user->roles()->detach();
        $user->delete();
        
        return redirect()->route('admin.users.index')->with(['message' => 'OK, user eliminado']);
    }
