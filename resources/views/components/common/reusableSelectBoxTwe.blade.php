{{-- Note name , class and id should be dash format --}}

{{-- Sample calling x-component --}}
{{-- <x-common.reuseableSelectBoxTWE :selectItems="$rawMaterials" title="hello" name="description"
        placeHolder="Hello Place Holder" value="" labelClass="extra-label ghost-polo"
            selectItemName="components" /> --}}

<label for="{{ $attributes['selectId'] }}" class="{{ config('common.commonFormLabel') }} {{ $attributes['labelClass'] }}"
    id="{{ $attributes['labelId'] }}" style="{{ $attributes['labelStyle'] }}">
    {{ $attributes['title'] }}
</label>

<select name="{{ $attributes['name'] }}" class="{{ config('common.commonSelectBox') }} {{ $attributes['selectClass'] }}"
    data-te-select-init data-te-select-filter="true" placeholder="{{ $attributes['placeHolder'] }}"
    {{ $attributes['disabled'] }} style="{{ $attributes['selectStyle'] }}" value="{{ $attributes['value'] }}"
    id="{{ $attributes['selectId'] }}">
    <option value="null" hidden selected>Choose</option>
    @if ($attributes['selectItems'] != '')
        @foreach ($attributes['selectItems'] as $selectItem)
            <option value="{{ $selectItem->id }}">
                {{ $selectItem->$selectItemName }}
            </option>
        @endforeach
    @endif
</select>
