<div class="form-group {{ $errors->has('name') ? 'has-error' : ''}}">
    <label for="name" class="control-label">{{ 'Name' }}</label>
    <input class="form-control" name="name" type="text" id="name" value="{{ isset($profile->name) ? $profile->name : ''}}" >
    {!! $errors->first('name', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('address') ? 'has-error' : ''}}">
    <label for="address" class="control-label">{{ 'Address' }}</label>
    <input class="form-control" name="address" type="text" id="address" value="{{ isset($profile->address) ? $profile->address : ''}}" >
    {!! $errors->first('address', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('email') ? 'has-error' : ''}}">
    <label for="email" class="control-label">{{ 'Email' }}</label>
    <input class="form-control" name="email" type="text" id="email" value="{{ isset($profile->email) ? $profile->email : ''}}" >
    {!! $errors->first('email', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('tel') ? 'has-error' : ''}}">
    <label for="tel" class="control-label">{{ 'Tel' }}</label>
    <input class="form-control" name="tel" type="text" id="tel" value="{{ isset($profile->tel) ? $profile->tel : ''}}" >
    {!! $errors->first('tel', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('citizen_card') ? 'has-error' : ''}}">
    <label for="citizen_card" class="control-label">{{ 'Citizen Card' }}</label>
    <input class="form-control" name="citizen_card" type="text" id="citizen_card" value="{{ isset($profile->citizen_card) ? $profile->citizen_card : ''}}" >
    {!! $errors->first('citizen_card', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('news') ? 'has-error' : ''}}">
    <label for="news" class="control-label">{{ 'News' }}</label>
    <input class="form-control" name="news" type="text" id="news" value="{{ isset($profile->news) ? $profile->news : ''}}" >
    {!! $errors->first('news', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('role') ? 'has-error' : ''}}">
    <label for="role" class="control-label">{{ 'Role' }}</label>
    <select name="role" type="text" id="role" class="form-control" >
        @foreach(["Admin","User"] as $item)
        @php
            $role = isset($profile->role) ? $profile->role : '';
        @endphp
        <option value="{{ $item }}" {{ $item == $role ? 'selected' : ''}} >
            {{ $item }}
        </option>
        @endforeach
    </select>
    {!! $errors->first('role', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
