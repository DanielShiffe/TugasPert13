<div class="form-group {{ $errors->has('user_id') ? 'has-error' : ''}}">
    <label for="user_id" class="control-label">{{ 'User Id' }}</label>
    <input class="form-control" name="user_id" type="number" id="user_id" value="{{ isset($attendance->user_id) ? $attendance->user_id : ''}}" >
    {!! $errors->first('user_id', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('class') ? 'has-error' : ''}}">
    <label for="class" class="control-label">{{ 'Class' }}</label>
    <input class="form-control" name="class" type="text" id="class" value="{{ isset($attendance->class) ? $attendance->class : ''}}" >
    {!! $errors->first('class', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('room_id') ? 'has-error' : ''}}">
    <label for="room_id" class="control-label">{{ 'Room Id' }}</label>
    <input class="form-control" name="room_id" type="number" id="room_id" value="{{ isset($attendance->room_id) ? $attendance->room_id : ''}}" >
    {!! $errors->first('room_id', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('location_id') ? 'has-error' : ''}}">
    <label for="location_id" class="control-label">{{ 'Location Id' }}</label>
    <input class="form-control" name="location_id" type="number" id="location_id" value="{{ isset($attendance->location_id) ? $attendance->location_id : ''}}" >
    {!! $errors->first('location_id', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('attendance_collect_at') ? 'has-error' : ''}}">
    <label for="attendance_collect_at" class="control-label">{{ 'Attendance Collect At' }}</label>
    <input class="form-control" name="attendance_collect_at" type="datetime-local" id="attendance_collect_at" value="{{ isset($attendance->attendance_collect_at) ? $attendance->attendance_collect_at : ''}}" >
    {!! $errors->first('attendance_collect_at', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('attendance_return_at') ? 'has-error' : ''}}">
    <label for="attendance_return_at" class="control-label">{{ 'Attendance Return At' }}</label>
    <input class="form-control" name="attendance_return_at" type="datetime-local" id="attendance_return_at" value="{{ isset($attendance->attendance_return_at) ? $attendance->attendance_return_at : ''}}" >
    {!! $errors->first('attendance_return_at', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('marker_return_at') ? 'has-error' : ''}}">
    <label for="marker_return_at" class="control-label">{{ 'Marker Return At' }}</label>
    <input class="form-control" name="marker_return_at" type="datetime-local" id="marker_return_at" value="{{ isset($attendance->marker_return_at) ? $attendance->marker_return_at : ''}}" >
    {!! $errors->first('marker_return_at', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('marker_collect_at') ? 'has-error' : ''}}">
    <label for="marker_collect_at" class="control-label">{{ 'Marker Collect At' }}</label>
    <input class="form-control" name="marker_collect_at" type="datetime-local" id="marker_collect_at" value="{{ isset($attendance->marker_collect_at) ? $attendance->marker_collect_at : ''}}" >
    {!! $errors->first('marker_collect_at', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
