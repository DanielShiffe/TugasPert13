<div class="form-group {{ $errors->has('user_id') ? 'has-error' : ''}}">
    <label for="user_id" class="control-label">{{ 'User Id' }}</label>
    <input class="form-control" name="user_id" type="number" id="user_id" value="{{ isset($reservation->user_id) ? $reservation->user_id : ''}}" >
    {!! $errors->first('user_id', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('reservation_code') ? 'has-error' : ''}}">
    <label for="reservation_code" class="control-label">{{ 'Reservation Code' }}</label>
    <input class="form-control" name="reservation_code" type="text" id="reservation_code" value="{{ isset($reservation->reservation_code) ? $reservation->reservation_code : ''}}" >
    {!! $errors->first('reservation_code', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('room_id') ? 'has-error' : ''}}">
    <label for="room_id" class="control-label">{{ 'Room Id' }}</label>
    <input class="form-control" name="room_id" type="number" id="room_id" value="{{ isset($reservation->room_id) ? $reservation->room_id : ''}}" >
    {!! $errors->first('room_id', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('start') ? 'has-error' : ''}}">
    <label for="start" class="control-label">{{ 'Start' }}</label>
    <input class="form-control" name="start" type="date" id="start" value="{{ isset($reservation->start) ? $reservation->start : ''}}" >
    {!! $errors->first('start', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('end') ? 'has-error' : ''}}">
    <label for="end" class="control-label">{{ 'End' }}</label>
    <input class="form-control" name="end" type="date" id="end" value="{{ isset($reservation->end) ? $reservation->end : ''}}" >
    {!! $errors->first('end', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('description') ? 'has-error' : ''}}">
    <label for="description" class="control-label">{{ 'Description' }}</label>
    <input class="form-control" name="description" type="text" id="description" value="{{ isset($reservation->description) ? $reservation->description : ''}}" >
    {!! $errors->first('description', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('reservation_status_id') ? 'has-error' : ''}}">
    <label for="reservation_status_id" class="control-label">{{ 'Reservation Status Id' }}</label>
    <input class="form-control" name="reservation_status_id" type="number" id="reservation_status_id" value="{{ isset($reservation->reservation_status_id) ? $reservation->reservation_status_id : ''}}" >
    {!! $errors->first('reservation_status_id', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
