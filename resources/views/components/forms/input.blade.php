@if($type == 'text')
<div class="form-group">
    <label for="{{$name}}">{{$label}}</label>
    <input type="text" class="form-control @if($errors->has($name)) is-invalid @endif" id="{{$name}}" name="{{$name}}" placeholder="{{$placeholder}}" 
        value="@if(old($name)) {{old($name)}} @else {{$value}} @endif">
    <x-texts.small-error name="{{$name}}" />
</div>
@endif