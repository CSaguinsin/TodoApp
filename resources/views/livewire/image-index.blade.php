<form wire:submit='save' class="seconddescription">
<div class="flex items-center justify-center ">
    <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="file_input">Upload file
        <input wire:model='photo' class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" id="file_input" type="file">
        @if ($photo)
        <img src="{{ $photo->temporaryUrl() }}" alt="Image preview" class="w-50 h-40 rounded-md" />
        @endif
        </label>
</div>
</form>



