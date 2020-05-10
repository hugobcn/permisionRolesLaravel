use App\Role;


public function update(Request $request, User $user)
    {
       //dd($request);
        //dd($request->role);
        
        $user->roles()->sync($request->role);
        //dd($user->roles()->sync($request->roles));
        return redirect()->route('admin.users.index')->with(['message' => 'OK, permisos cambiados']);
    }

   
    public function destroy(User $user)
    {
        //dd($user);
        
        $user->roles()->detach();
        $user->delete();
        
        return redirect()->route('admin.users.index')->with(['message' => 'OK, foto subida'])->with(['message' => 'OK, user eliminado']);
    }
