{{--
     <x-common.reusableModalChoose modalTitle="hello Modal" modalId="this-is-id"
        modalClass="this-is-class" rootFormId="rootForm" rootFormClass="rootFormClass"
        rootDiv="rootDiv" :selectItems="$operators" selectName="name" />
    --}}

<button data-modal-target="{{ $attributes['modalId'] }}" data-modal-toggle="{{ $attributes['modalId'] }}"
    class="block text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
    type="button">
    Toggle modal
</button>

<div id="{{ $attributes['modalId'] }}" tabindex="-1" aria-hidden="true"
    class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-full {{ $attributes['modalClass'] }}"
    style="background-color: rgba(0,0,0,0.5);">
    <div class="relative w-full h-full max-w-2xl">
        <!-- Modal content -->
        <br>
        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700 mt-96 lg:mt-20">
            <!-- Modal header -->
            <div class="flex items-start justify-between p-4 border-b rounded-t dark:border-gray-600">
                <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                    {{ $attributes['modalTitle'] }}
                </h3>
                <button type="button" class="{{ config('common.commonModalCross') }}"
                    data-modal-hide="{{ $attributes['modalId'] }}">
                    <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                            clip-rule="evenodd"></path>
                    </svg>
                    <span class="sr-only">Close modal</span>
                </button>
            </div>
            <!-- Modal body -->
            <div class="p-6 space-y-6 h-50">
                <div class="relative w-full" id="{{ $attributes['rootDiv'] }}">
                    <form action="" onsubmit="event.preventDefault()" id="POForm" class="POForm">
                        @csrf
                        <input type="text" id="keyword"
                            class=" bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500
                        focus:border-blue-500 block w-full pl-10 p-2.5  dark:bg-gray-700 dark:border-gray-600
                        dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            placeholder="Search" required autocomplete="off">
                        <br>
                        @if ($attributes['selectItems'] != '')
                            @foreach ($attributes['selectItems'] as $item)
                                <div class="grid gap-2 md:grid-cols-2 xl:grid-cols-2 bg-white
                                 rounded-lg shadow-lg place-content-center place-items-center mainDialog"
                                    id="">
                                    <input type="hidden" value="{{ $item->id }}" class="styleId">
                                    <div class="styleName px-4 py-3" id="styleName">
                                        {{ isset($item->$selectName) ? $item->$selectName : 'default' }}
                                    </div>
                                    <div class="px-4 py-3 mb-2 mt-2" id="">
                                        <button type="button" class="{{ config('common.commonModalChooseBtn') }}">
                                            Choose
                                        </button>
                                    </div>
                                </div>
                                <br>
                            @endforeach
                        @endif
                    </form>
                    <div
                        class="flex items-center p-6 space-x-2 border-t border-gray-200 rounded-b dark:border-gray-600 justify-end">
                        <button data-modal-hide="{{ $attributes['modalId'] }}" type="button" id="dialogConfirm"
                            class="{{ config('common.commonModalConfirmBtn') }}">
                            Confirm
                        </button>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
