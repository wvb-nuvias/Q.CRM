<div x-data="{
            image: @entangle('image'),
            imageerror: @entangle('imageerror'),
            isDropping: false,
            isUploading: false,
            progress: 0,
            handleFileSelect(event) {
                if (event.target.files.length) {
                    this.uploadFiles(event.target.files)
                }
            },
            handleFileDrop(event) {
                if (event.dataTransfer.files.length > 0) {
                    this.uploadFiles(event.dataTransfer.files)
                }
            },
            uploadFiles(files) {
                const $this = this;
                this.isUploading = true
                @this.uploadMultiple('files', files,
                    function (success) {
                        $this.isUploading = false
                        $this.progress = 0
                    },
                    function(error) {
                        console.log('error', error)

                    },
                    function (event) {
                        $this.progress = event.detail.progress
                    }
                )
            },
            removeUpload(filename) {
                @this.removeUpload('files', filename)
                this.image='';
            },
        }
    ">
    <div class="relative w-60 h-60 flex flex-col items-center justify-center border border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm mt-1"
         x-on:drop="isDroppingFile = false"
         x-on:drop.prevent="handleFileDrop($event)"
         x-on:dragover.prevent="isDroppingFile = true"
         x-on:dragleave.prevent="isDroppingFile = false"
    >

    @if($image)
        <button class="text-red-500 absolute top-0 right-0 w-8 h-8" @click="removeUpload('{{$image->getFilename()}}')">X</button>
        <img src="{{$image->temporaryUrl()}}" class="w-60 h-60 border border-gray-300 dark:border-gray-700 rounded-md" />
    @else
    <div class="absolute top-0 bottom-0 left-0 right-0 z-30 flex items-center justify-center bg-blue-500 opacity-90"
             x-show="isDropping"
        >
            <span class="text-3xl text-white">Release file to upload!</span>
        </div>

        <label class="flex flex-col items-center justify-center cursor-pointer rounded-2xl h-60"  for="file-upload">
            <h3 class="text-xl">Click to select image</h3>
            <em class="italic text-slate-400">(Or drag image here)</em>

            <div class="bg-gray-200 h-[2px] w-1/2 mt-3">
                <div
                    class="bg-blue-500 h-[2px]"
                    style="transition: width 1s"
                    :style="`width: ${progress}%;`"
                    x-show="isUploading"
                >
                </div>
            </div>
        </label>
    </div>
    @endif
    <input type="file" id="file-upload" @change="handleFileSelect" class="hidden" wire:model="image" />

</div>
