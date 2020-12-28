@if($type == 'text')
<div class="form-group">
    <label for="{{$name}}">{{$label}}</label>
    <input type="text" class="form-control" id="{{$name}}" name="{{$name}}" placeholder="{{$placeholder}}" value="{{$value}}">
</div>
@endif