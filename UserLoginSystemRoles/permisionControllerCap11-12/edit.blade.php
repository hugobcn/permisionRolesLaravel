
 <div class="card-body">                   
                    <form action ="{{route('admin.users.update',$user)}}" method="POST">
                       @csrf
                       
                        <div class="form-group row">
                            <label for="name" class="col-md-2 col-form-label text-md-right">Email</label>

                            <div class="col-md-6">
                                <input id="email" type="email"  name="email" value="{{ $user->email }}" required autofocus>

                                
                            </div>
                        </div>
   <div class="form-group row">
                            <label for="name" class="col-md-2 col-form-label text-md-right">Name</label>

                            <div class="col-md-6">
                                <input id="name" type="text"  name="name" value="{{ $user->name }}"  autofocus>
                            </div>
                        </div>
                       
                       {{--@method('PUT')--}}
                        {{method_field('PUT')}} 
                        <div class="form-group row">
                            <label for="roles" class="col-md-2 col-form-label text-md-right">Roles</label>
                             <div class="col-md-6">
                        @foreach($roles as $role)
                            <div class='form-check'>
                                {{--@if($user->roles->pluck('id')->contains($role->id) checked @endif
                                poner las que estan puestas--}}
                                <input type='checkbox' name='role[]' value='{{ $role->id}}'
                                @if($user->roles->pluck('id')->contains($role->id)) checked @endif/>                                  
                                <label>{{$role->name}}</label>
                            </div>                
                        @endforeach
                             </div>
                        </div>
                        <button type='submit' class='btn btn-primary'>
                            Update
                        </button>

