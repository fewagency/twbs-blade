<div class="checkbox">{{-- TODO: set class disabled as option --}}
    <label>
        <input type="{{ $type or 'checkbox' }}" name="{{ $name }}" id="{{ $control_id }}"
               value="{{ $value = isset($value) ? $value : 1 }}"
                {{-- set checked --}}
                @if(!empty($checked) or old($name) == $value )
                    checked
                @endif
        @unless(empty($control_description_id))
               aria-describedby="{{ $control_description_id }}"
                @endunless
        @unless(empty($has_error))
               aria-invalid="true"
                @endunless
                {{-- set attribute disabled as option --}}
                >
        @unless(empty($no_label))
            {{ $label }}
        @endunless
    </label>
</div>