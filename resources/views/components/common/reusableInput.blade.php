{{-- Note name , class and id should be dash format --}}

{{-- Sample calling x-component --}}
{{-- <x-common.reuseableInput
    title="hello" name="description" type="text"
    labelId = "label-id" inputId="dec-id" type="text"
    placeHolder="Hello Place Holder" value="" disable="disabled"
    autoComplete="off" labelClass="extra-label"
    inputClass = "extra-input"  labelStyle="width : 100px ; height : 100px"
    inputStyle="width : 100px ; height : 100px"
    required="required" /> --}}


<label for="{{ $attributes['inputId'] }}" class="{{ config('common.commonFormLabel') }} {{ $attributes['labelClass'] }}"
    id="{{ $attributes['labelId'] }}" style="{{ $attributes['labelStyle'] }}">
    {{ $attributes['title'] }}
</label>
<input type="{{ $attributes['type'] }}" id="{{ $attributes['inputId'] }}" value="{{ $attributes['value'] }}"
    name="{{ $attributes['name'] }}" class="{{ config('common.commonFormM') }}{{ $attributes['inputClass'] }}"
    placeholder="{{ $attributes['placeHolder'] }}" {{ $attributes['disabled'] }}
    autocomplete="{{ $attributes['autocomplete'] }}" style="{{ $attributes['inputStyle'] }}"
    {{ $attributes['required'] }}>
</input>
