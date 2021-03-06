<div class="form-group {{$class}}">
    <label for="{{$name}}">{{$label}}</label>
    <input type="{{$type}}" class="form-control @if($errors->has($name)) is-invalid @endif" id="{{$name}}" name="{{$name}}" placeholder="{{$placeholder}}" 
    @if(old($name)) value="{{old($name)}}" @else value="{{$value}}" @endif>
    <x-texts.small-error name="{{$name}}" />
</div>