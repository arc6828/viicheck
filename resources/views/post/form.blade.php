<div class="form-group {{ $errors->has('name') ? 'has-error' : ''}}">
    <label for="name" class="control-label">{{ 'Name' }}</label>
    <input class="form-control" name="name" type="text" id="name" value="{{ isset($post->name) ? $post->name : ''}}" >
    {!! $errors->first('name', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('address') ? 'has-error' : ''}}">
    <label for="address" class="control-label">{{ 'Address' }}</label>
    <input class="form-control" name="address" type="text" id="address" value="{{ isset($post->address) ? $post->address : ''}}" >
    {!! $errors->first('address', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('email') ? 'has-error' : ''}}">
    <label for="email" class="control-label">{{ 'Email' }}</label>
    <input class="form-control" name="email" type="text" id="email" value="{{ isset($post->email) ? $post->email : ''}}" >
    {!! $errors->first('email', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('tel') ? 'has-error' : ''}}">
    <label for="tel" class="control-label">{{ 'Tel' }}</label>
    <input class="form-control" name="tel" type="text" id="tel" value="{{ isset($post->tel) ? $post->tel : ''}}" >
    {!! $errors->first('tel', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('citizen_card') ? 'has-error' : ''}}">
    <label for="citizen_card" class="control-label">{{ 'Citizen Card' }}</label>
    <input class="form-control" name="citizen_card" type="text" id="citizen_card" value="{{ isset($post->citizen_card) ? $post->citizen_card : ''}}" >
    {!! $errors->first('citizen_card', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('news') ? 'has-error' : ''}}">
    <label for="news" class="control-label">{{ 'News' }}</label>
    <input class="form-control" name="news" type="text" id="news" value="{{ isset($post->news) ? $post->news : ''}}" >
    {!! $errors->first('news', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
