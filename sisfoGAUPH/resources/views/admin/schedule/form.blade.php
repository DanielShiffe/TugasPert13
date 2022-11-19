<div class="form-group {{ $errors->has('room_id') ? 'has-error' : ''}}">
    <label for="room_id" class="control-label">{{ 'Room Id' }}</label>
    <input class="form-control" name="room_id" type="number" id="room_id" value="{{ isset($schedule->room_id) ? $schedule->room_id : ''}}" >
    {!! $errors->first('room_id', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('lesson_id') ? 'has-error' : ''}}">
    <label for="lesson_id" class="control-label">{{ 'Lesson Id' }}</label>
    <input class="form-control" name="lesson_id" type="number" id="lesson_id" value="{{ isset($schedule->lesson_id) ? $schedule->lesson_id : ''}}" >
    {!! $errors->first('lesson_id', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('location_id') ? 'has-error' : ''}}">
    <label for="location_id" class="control-label">{{ 'Location Id' }}</label>
    <input class="form-control" name="location_id" type="number" id="location_id" value="{{ isset($schedule->location_id) ? $schedule->location_id : ''}}" >
    {!! $errors->first('location_id', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('start') ? 'has-error' : ''}}">
    <label for="start" class="control-label">{{ 'Start' }}</label>
    <input class="form-control" name="start" type="date" id="start" value="{{ isset($schedule->start) ? $schedule->start : ''}}" >
    {!! $errors->first('start', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('end') ? 'has-error' : ''}}">
    <label for="end" class="control-label">{{ 'End' }}</label>
    <input class="form-control" name="end" type="date" id="end" value="{{ isset($schedule->end) ? $schedule->end : ''}}" >
    {!! $errors->first('end', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
