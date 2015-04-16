<input type="{{ $type or 'text' }}"
       name="{{ $name }}"
       class="form-control"
       id="{{ $control_id }}"
@unless(empty($control_description_id))
       aria-describedby="{{ $control_description_id }}"
@endif
       value="{{ old($name, isset($value) ? $value : null) }}"
@unless(empty($has_error))
	aria-invalid="true"
@endif
		       >
