{{-- <x-common.resuableButton mainActionButton="Save" backUrl="lines.index"
 type="button" mainBtnClass="text-primary" mainBtnId="mainBtnId"
 cancelBtnClass = "cancelBtn" cancelBtnId = "cancelBtnId"/> --}}
<div class="grid gap-0 md:grid-cols-2 xl:grid-cols-2 ml-10">
    <div></div>
    <div class="flex flex-row justify-end">
        <button type="{{ $attributes['type'] }}"
            class="{{ config('common.commonMainButton') }} btnSubmit {{ $attributes['mainBtnClass'] }}"
            id="{{ $attributes['mainBtnId'] }}">
            {{ $attributes['mainActionButton'] }}
        </button>
        <a href="{{ route($attributes['backUrl']) }}" class="{{ config('common.commonMainButton') }}"
            class="{{ $attributes['cancelBtnClass'] }}" id="{{ $attributes['cancelBtnId'] }}">
            <button type="">
                Cancel
            </button>
        </a>
    </div>
</div>
