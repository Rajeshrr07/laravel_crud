<!DOCTYPE html>
<html>
    <head>
        <title>TABLE</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    </head>
    <body>
        <a href="{{ url('create') }}" class="btn btn-primary float-right">Create</a>
        <table class='table'>
            <thead>
                <tr>
                    <th>First_name</th>
                    <th>Last_name</th>
                    <th>Phonenumber</th>
                    <th>Email</th>
                    <th>Gender</th>
                    <th>Qualification</th>
                    <th>image</th>
                    <th>action</th>
                </tr>
            </thead>
            <tbody> 
                
                @foreach($crud as $std)  
                        <!-- <tr border="none">   -->
                            <td>{{$std->first_name}}</td>  
                            <td>{{$std->last_name}}</td>
                            <td>{{$std->phone_number}}</td> 
                            <td>{{$std->email}}</td>   
                            <td>{{$std->gender}}</td>  
                            <td>{{$std->qualifications}}</td>  
                            <td><img src="{{ url($std->image) }}" width="100" alt="" title="" /></td>
                            <td>  
                               <form action="{{ url('destroy', $std->id)}}" method="post">  
                                  @csrf  
                                  @method('DELETE')  
                                  <button class="btn btn-danger" type="submit">Delete</button>  
                                </form>  
                            </td>  
                            <td >  
                                <form action="{{ url('edit', $std->id)}}" method="GET">  
                                  @csrf  
                                   
                                  <button class="btn btn-danger" type="submit">Edit</button>  
                                </form>  
                            </td>  
                        </tr>  
                @endforeach  
                </tbody>   
        </table>
    </body>
</html>



