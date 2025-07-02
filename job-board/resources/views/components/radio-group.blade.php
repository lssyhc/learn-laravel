<div>
    <label for="{{$name}}-all" class="mb-1 flex items-center">
        <input type="radio" name="{{$name}}" id="{{$name}}-all" value="" @checked(!request($name))>
        <span class="ml-2">All</span>
    </label>

    @foreach ($optionsWithLabels as $label => $option)
    <label for="{{$name}}--{{$option}}" class="mb-1 flex items-center">
        <input type="radio" name="{{$name}}" id="{{$name}}--{{$option}}" value="{{$option}}"
            @checked($option===request($name))>
        <span class="ml-2">{{$label}}</span>
    </label>
    @endforeach
</div>
