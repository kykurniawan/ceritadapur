<div>
    <div class="p-5 bg-white rounded-lg border shadow mb-5">
        @if (session()->has('signin.message'))
            <x-globals.alert dismissable class="bg-red-200 text-red-800 mb-3 rounded-lg">
                {{ session('signin.message') }}
            </x-globals.alert>
        @endif
        <div wire:loading.delay wire:target="submit">
            <x-globals.alert class="bg-white border rounded-lg text-gray-600 mb-3">
                <x-globals.spinner class="w-5 h-5 text-gray-200 fill-blue-600 inline" /> Memeriksa kredensial...
            </x-globals.alert>
        </div>
        <form wire:submit.prevent="submit">
            @csrf
            <div class="mb-3">
                <input type="email" wire:model="email" id="signin.email" class="form-input block w-full rounded-lg"
                    placeholder="Alamat Email...">
                @error('email')
                    <small class="text-red-500">{{ $message }}</small>
                @enderror
            </div>
            <div class="mb-3">
                <input type="password" wire:model="password" id="signin.password"
                    class="form-input block w-full rounded-lg" placeholder="Kata Sandi...">
                @error('password')
                    <small class="text-red-500">{{ $message }}</small>
                @enderror
            </div>
            <div class="mb-3">
                <button wire:loading.attr="disabled" type="submit" class="primary-button w-full">Masuk</button>
            </div>
        </form>
        <div class="mb-3 text-center">
            <p class="text-gray-500 font-semibold">Atau gunakan metode lain</p>
        </div>
        <div class="mb-2 flex gap-2 flex-col sm:flex-row">
            <button class="login-with-google-button w-full">Masuk dengan Google</button>
            <button class="login-with-facebook-button w-full">Masuk dengan Facebook</button>
        </div>
    </div>
    <div class="text-center">
        <p class="text-gray-600">Belum punya akun? <a href="{{ route('auth.signup') }}" class="primary-link">Daftar
                dulu.</a></p>
        <p><a href="" class="primary-link">Saya lupa kata sandi</a></p>
    </div>
</div>
