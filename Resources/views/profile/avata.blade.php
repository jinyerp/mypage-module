<div>
    <div class="space-y-1">
        <label class="mx-0 mt-0 mb-1 text-lg font-bold tracking-normal leading-snug text-slate-700">Photo</label>

        <div class="sm:flex sm:items-center sm:space-x-4 space-y-4 sm:space-y-0">
            {{-- 아바타 이미지 출력, loading... --}}
            <div class="relative">
                <div wire:loading.delay>
                    <div class="absolute top-0 right-0 w-full h-full flex justify-center items-center">
                        <img src="/images/loading.gif" alt="loading">
                    </div>
                </div>
                <div
                class="inline-flex items-center justify-center w-16 h-16 rounded-full bg-gray-100 text-gray-300">

                    @if($profile && $profile->image)
                    <img src="/mypage/{{$profile->image}}" alt="User Avatar" class="inline-block w-16 h-16 rounded-full">
                    @endif
                </div>
            </div>

            {{-- upload progress --}}
            <div class="space-y-2">
                {{-- livewire upload progress bar --}}
                <div
                x-data="{ isUploading: false, progress: 0 }"
                x-on:livewire-upload-start="isUploading = true"
                x-on:livewire-upload-finish="isUploading = false"
                x-on:livewire-upload-error="isUploading = false"
                x-on:livewire-upload-progress="progress = $event.detail.progress"
                >
                    <!-- File Input -->
                    <div>
                        <label class="block">
                            <span class="sr-only">Choose profile photo</span>
                            <input wire:model="photo"
                                class="block w-full text-sm text-gray-500 file:mr-4 file:py-2 file:px-4 file:rounded file:border-0 file:text-sm file:font-semibold file:bg-indigo-50 file:text-indigo-700 hover:file:bg-indigo-100"
                                type="file" id="photo" name="photo">
                        </label>
                    </div>

                    <!-- Progress Bar -->
                    <div x-show="isUploading">
                        <progress
                            class="w-full h-1 bg-indigo-100 rounded-lg"
                                max="100" x-bind:value="progress"></progress>
                    </div>

                    <!-- message -->
                    <div>
                        @error('photo') <span class="error">{{ $message }}</span> @enderror
                    </div>
                </div>
            </div>

        </div>
    </div>

    <br>

</div>
