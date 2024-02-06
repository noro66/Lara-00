<section>
    <header>
        <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
            {{ __('Avatar Information') }}
        </h2>

        <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
            {{ __("Update your account's Avatar ") }}
        </p>
        @if(session('status') === 'Avatar Updated !')
            <div class="mb-4 font-medium text-sm  text-green-600">
                {{session('status')}}
            </div>
        @endif
    </header>

    <form method="post" action="{{ route('profile.avatar') }}" class="mt-6 space-y-6" enctype="multipart/form-data">
        @csrf
        @method('patch')
        <img src="{{url('storage/' . ltrim($user->avatar, 'public/'))}}" class="rounded-full" alt="">
        <div>
            <x-input-label for="Avatar" value="Avatar" />
            <x-text-input id="Avatar"     capture="user"  accept="image/*" name="avatar" type="file" class="mt-1 p-1 block w-full"  autofocus/>
            <x-input-error class="mt-2" :messages="$errors->get('avatar')" />
        </div>

        <div class="flex items-center gap-4">
            <x-primary-button>{{ __('Save') }}</x-primary-button>

            @if (session('status') === 'avatar-updated')
                <p
                    x-data="{ show: true }"
                    x-show="show"
                    x-transition
                    x-init="setTimeout(() => show = false, 2000)"
                    class="text-sm text-gray-600 dark:text-gray-400"
                >{{ __('Saved.') }}</p>
            @endif
        </div>
    </form>
</section>
