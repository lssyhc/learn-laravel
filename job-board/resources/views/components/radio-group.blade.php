<div>
    @if ($allOption)
        <label for="{{ $name }}-all" class="mb-1 flex items-center">
            <input type="radio" name="{{ $name }}" id="{{ $name }}-all" value=""
                @checked(!request($name))>
            <span class="ml-2">All</span>
        </label>
    @endif

    @foreach ($optionsWithLabels as $label => $option)
        <label for="{{ $name }}--{{ $option }}" class="mb-1 flex items-center">
            <input type="radio" name="{{ $name }}" id="{{ $name }}--{{ $option }}"
                value="{{ $option }}" @checked($option === ($value ?? request($name)))>
            <span class="ml-2">{{ $label }}</span>
        </label>
    @endforeach

    @error($name)
        <div class="mt-1 text-xs text-red-500">
            {{ $message }}
        </div>
    @enderror
</div>
