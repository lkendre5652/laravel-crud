<div class="container">
<table class="table table-primary table-hover" >
<tr >
  <th class="table-primary">ID</th>
  <th class="table-secondary">Name</th>
  <th class="table-success">Created At</th>  
  <th class="table-success">Updated At</th>  
  <th class="table-success">Action</th>
</tr>
@foreach($Arr as $todo)
<tr>
  <td class="table-primary">{{ $todo->id }}</td>
  <td class="table-secondary">{{ $todo->name }}</td>
  <td class="table-success">{{ $todo->created_at }}</td>  
  <td class="table-success">{{ $todo->updated_at }}</td>  
  <td class="table-success" >
  <a href="/todo-create/" class="text-success">Create</a>
    <a href="todo-remove/{{ $todo->id  }}" class="text-danger" >Remove</a>
    <span class="text-warning">|</span>
    <a href="/todo-update/{{ $todo->id  }}" class="text-success">Update</a>
  </td>
</tr>
@endforeach

</table>
</div>