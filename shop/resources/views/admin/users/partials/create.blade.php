<label for="">Name</label>
<input type="text" class="form-control"  name="name" value="{{ $user->name ?? '' }}" required>

<label for="">email</label>
<input type="text" class="form-control"  name="email" value="{{ $user->email ?? '' }}" required>


<label for="">Password</label>
<input type="text" class="form-control"  name="password"  required> 





<label for="">Role</label>
<select name="role" class="form-control form-control-sm" required>
    @foreach ($roles as $role)
    <option  @isset($user->id)
        @if ($user->role==$role->name)
        selected=""
        @endif
        @endisset>
        
        {{ $role->name ?? ""  }}</option>
     @endforeach
  </select>




