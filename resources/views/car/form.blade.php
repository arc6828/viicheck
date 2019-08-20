<div class="form-group {{ $errors->has('brand') ? 'has-error' : ''}}">
    <label for="brand" class="control-label">{{ 'Brand' }}</label>
    <input class="form-control" name="brand" type="text" id="brand" value="{{ isset($car->brand) ? $car->brand : ''}}" >
    {!! $errors->first('brand', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('series') ? 'has-error' : ''}}">
    <label for="series" class="control-label">{{ 'Series' }}</label>
    <input class="form-control" name="series" type="text" id="series" value="{{ isset($car->series) ? $car->series : ''}}" >
    {!! $errors->first('series', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('colour') ? 'has-error' : ''}}">
    <label for="colour" class="control-label">{{ 'Colour' }}</label>
    <input class="form-control" name="colour" type="text" id="colour" value="{{ isset($car->colour) ? $car->colour : ''}}" >
    {!! $errors->first('colour', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('year') ? 'has-error' : ''}}">
    <label for="year" class="control-label">{{ 'Year' }}</label>
    <input class="form-control" name="year" type="number" id="year" value="{{ isset($car->year) ? $car->year : ''}}" >
    {!! $errors->first('year', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('mileage') ? 'has-error' : ''}}">
    <label for="mileage" class="control-label">{{ 'Mileage' }}</label>
    <input class="form-control" name="mileage" type="number" id="mileage" value="{{ isset($car->mileage) ? $car->mileage : ''}}" >
    {!! $errors->first('mileage', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
