<link rel="stylesheet" href="{{asset('plugins/select2/css/select2.min.css')}}">
<link rel="stylesheet" href="{{asset('plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css')}}">

<div class="form-group col-md-6">
    <label>{{$label}}</label>
    <select class="form-control select2" data-placeholder="{{$placeholder}}" style="width: 100%;" name="{{$name}}" id="{{$name}}">
        @foreach($options->options as $key => $item)
            <option value="{{$key}}" @if($key == old($name) || $key == $value) selected @endif>{{$item}}</option>
        @endforeach
    </select>
    <x-texts.small-error name="{{$name}}" />
</div>