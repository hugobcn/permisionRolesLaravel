/resources/views/admin/user

 
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        
         @if(session('message'))
        <div class="alert alert-success col-md-6" >{{session('message')}}</div>
        
        @endif
         
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Users</div>

               

                   <tr>
                                <th scope="row">{{$user->id}}</th>
                                <td> {{$user->name}}</td>
                                <td>{{$user->email }}</td>
                                <td>{{implode(', ',$user->roles()->get()->pluck('name')->toArray()) }}</td>
                                <td>
                                    
                                  @can('edit-users')                                      
                                    <a href="{{ route('admin.users.edit', $user->id)}}">
                                        <button type="button" class="btn btn-primary float-left">Edit</button>
                                    </a>  
                                  @endcan
                                  
                                  @can('delete-users')  
                                    <form action="{{ route('admin.users.destroy', $user)}}" method="POST" CLASS="float-left">
                                            @csrf
                                            {{method_field('DELETE')}}
                                          <button type="submit" class="btn btn-warning">Delete</button>
                                        
                                    </form>
                                  @endcan  
                                </td>
                            </tr>
                 
                    @endforeach    
                                                      
                        </tbody>


        </div>
    </div>
</div>
@endsection



