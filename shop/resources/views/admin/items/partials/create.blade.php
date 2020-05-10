<label for="">Id</label>
<input type="text" class="form-control"  name="p_id" value="{{ $item->p_id ?? '' }}" required>

<label for="">Name</label>
<input type="text" class="form-control"  name="Name" value="{{ $item->Name ?? '' }}" required>


<label for=""> Registration Type</label>
<input type="text" class="form-control"  name="Rtype" value="{{ $item->Rtype ?? '' }}" required> 


<label for="">Acronym</label>
<input type="text" class="form-control"" name="Acr" value="{{ $item->Acr ?? '' }}" required>


<label for="">Status</label>
<select name="Status" class="form-control form-control-sm"  required>
    @foreach ($statuses as $status)
    <option>{{ $status->name  }}</option>
     @endforeach
  </select>

<label for="">Group</label>
<select name="Group" class="form-control form-control-sm" required>
    @foreach ($Groups as $Group)
    <option>{{ $Group->name  }}</option>
     @endforeach
  </select>

<label for="">Type</label>
<select name="Type" class="form-control form-control-sm" required>
    @foreach ($Types as $Type)
    <option>{{ $Type->name  }}</option>
     @endforeach
  </select>

<label for="">Desciption</label>
<textarea rows="4"  type="text" class="form-control"  name="Desciption" required> {{ $item->Desciption ?? '' }} </textarea> 

<label for="">System Type</label>
<input type="text" class="form-control"  name="Stype" value="{{ $item->Stype ?? '' }}" required>

<label for="">Operating Plan Category</label>
<input type="text" class="form-control" name="Oplan" value="{{ $item->Oplan ?? '' }}" required>




<label for="">Operating Plan Future Category</label>
<input type="text" class="form-control"  name="Fplan" value="{{ $item->Fplan ?? '' }}" required>
 






<label for="">GM Business Owner</label>
<input type="text" class="form-control"  name="Bowner" value="{{ $item->Bowner ?? '' }}" required>


<label for="">GM Alternate Business Owner</label>
<input type="text" class="form-control" name="ABowner" value="{{ $item->ABowner ?? '' }}" required>


<label for="">GM Application Operations Owner</label>
<input type="text" class="form-control"  name="Oowner" value="{{ $item->Oowner ?? '' }}" required>


<label for="">GM Alternate Application Operations Owner</label>
<input type="text" class="form-control"  name="AOowner" value="{{ $item->AOowner ?? '' }}" required>


<label for="">GM Innovation Owner</label>
<input type="text" class="form-control"  name="Innovation" value="{{ $item->Innovation ?? '' }}" required>


<label for="">GM Alternate Innovation Owner</label>
<input type="text" class="form-control" name="AIowner" value="{{ $item->AIowner ?? '' }}" required>


<label for="">Hosted by</label>
<input type="text" class="form-control"  name="Hostedb" value="{{ $item->Hostedb ?? '' }}" required>


<label for="">Region</label>
<input type="text" class="form-control" name="Region" value="{{ $item->Region ?? '' }}" required>


<label for="">Owning Country</label>
<input type="text" class="form-control"  name="Owninc" value="{{ $item->Owninc ?? '' }}" required>


<label for="">Country use</label>
<input type="text" class="form-control" name="Countryu" value="{{ $item->Countryu ?? '' }}" required>

<label for="">Launch date</label>

  <div class="form-group">
    <label for="inputDate">Введите дату:</label>
    <input type="date" class="form-control" name="Launchd" value="{{ $item->Launchd ?? '' }}" required>
  </div>




<label for="">Inactive date</label>

  <div class="form-group">
    <label for="inputDate">Введите дату:</label>
    <input type="date" class="form-control" name="Inactived" value="{{ $item->Inactived ?? '' }}" required>
  </div>




<label for="">Retire date</label>

  <div class="form-group">
    <label for="inputDate">Введите дату:</label>
    <input type="date" class="form-control"  name="Retired" value="{{ $item->Retired ?? '' }}" required>
  </div>




<label for="">Cancel  date</label>

  <div class="form-group">
    <label for="inputDate">Введите дату:</label>
    <input type="date" class="form-control"  name="Canceld" value="{{ $item->Canceld ?? '' }}" required>
  </div>




<label for="">help</label>
<input type="text" class="form-control" name="help" value="{{ $item->help ?? '' }}" required>



<label for="">foto1</label>
@if (isset($item->id))
<a href="{{ asset('/storage/').'/'.$item->foto1 ?? '' }}"><img  class="img-thumbnail shadow-lg"  src="{{ asset('/storage/').'/'.$item->foto1 ?? '' }}" alt="card" width="100" height="100"></a>
@endif
<div class="custom-file">
  <input type="file" name="foto1" class="custom-file-input" id="customFileLang" lang="ru"  value="{{ $item->foto1 ?? '' }}">
  <label class="custom-file-label" for="customFileLang" >Выберите файл</label>
</div>


<label for="">foto2</label>
@if (isset($item->id))
<a href="{{ asset('/storage/').'/'.$item->foto2 ?? '' }}"><img class="img-thumbnail shadow-lg"  src="{{ asset('/storage/').'/'.$item->foto2 ?? '' }}" alt="card" width="100" height="100"></a>
@endif
<div class="custom-file">
  <input type="file" name="foto2" class="custom-file-input" id="customFileLang" lang="ru" value="{{ $item->foto2 ?? '' }}"  >
  <label class="custom-file-label" for="customFileLang" >Выберите файл</label>
</div>


<label for="">foto3</label>
@if (isset($item->id))
<a href="{{ asset('/storage/').'/'.$item->foto3 ?? '' }}"><img class="img-thumbnail shadow-lg"  src="{{ asset('/storage/').'/'.$item->foto3 ?? '' }}" alt="card" width="100" height="100"></a>
@endif

<div class="custom-file">
  <input type="file" name="foto3" class="custom-file-input" id="customFileLang " lang="ru" value="{{ $item->foto3 ?? '' }}" >
  <label class="custom-file-label" for="customFileLang" >Выберите файл</label>
</div>


<label for="">foto4</label>
@if (isset($item->id))
<a href="{{ asset('/storage/').'/'.$item->foto4 ?? '' }}"><img class="img-thumbnail shadow-lg"  src="{{ asset('/storage/').'/'.$item->foto4 ?? '' }}" alt="card" width="100" height="100"></a>
@endif

<div class="custom-file">
  <input type="file" name="foto4" class="custom-file-input" id="customFileLang" lang="ru"  value="{{ $item->foto4 ?? '' }}" >
  <label class="custom-file-label" for="customFileLang">Выберите файл</label>
</div>


<label for="">File</label>
@if (isset($item->id))
<a href="{{ asset('/storage/').'/'.$item->foto5 ?? '' }}" required> <img class="img-thumbnail shadow-lg"  src="{{ asset('/ppt.png') }}" > </a>
@endif

<div class="custom-file">
  <input type="file" name="foto5" class="custom-file-input" id="customFileLangHTML"  value="{{ $item->foto5 ?? '' }}">
  <label class="custom-file-label" for="customFileLang">Выберите файл</label>
</div>


