<div class="btn-group">
    <button onclick="editUser({{ $users->id }})" class="btn btn-warning" type="button">Edit</button>
    {{-- <form method="POST" action="/users/{{ $users->id }}">
        @csrf {{ method_field("DELETE") }} --}}
    <button type="submit" onclick="deleteUser({{ $users->id }})" class="btn btn-danger" type="button">Delete</button>
    {{-- </form> --}}
</div>