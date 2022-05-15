<div>
    <div class="p-5 bg-white rounded-lg border shadow mb-5">
        @if (session()->has('signup.message'))
            <x-globals.alert dismissable class="bg-red-200 text-red-800 mb-3 rounded-lg">
                {{ session('signup.message') }}
            </x-globals.alert>
        @endif
        <form wire:submit.prevent="submit">
            <div class="mb-3">
                <input wire:model="name" type="text" id="signup.name" class="form-input block w-full rounded-lg"
                    placeholder="Nama Kamu...">
                @error('name')
                    <small class="text-red-500">{{ $message }}</small>
                @enderror
            </div>
            <div class="mb-3">
                <input wire:model="email" type="email" id="signup.email" class="form-input block w-full rounded-lg"
                    placeholder="Alamat Email...">
                @error('email')
                    <small class="text-red-500">{{ $message }}</small>
                @enderror
            </div>
            <div class="mb-3">
                <input wire:model="password" type="password" id="signup.password"
                    class="form-input block w-full rounded-lg" placeholder="Kata Sandi...">
                @error('password')
                    <small class="text-red-500">{{ $message }}</small>
                @enderror
            </div>
            <div class="mb-3">
                <input wire:model="password_confirmation" type="password" id="signup.password_confirmation"
                    class="form-input block w-full rounded-lg" placeholder="Ulangi Kata Sandi...">
                @error('password_confirmation')
                    <small class="text-red-500">{{ $message }}</small>
                @enderror
            </div>
            <div class="mb-3">
                <button wire:loading.attr="disabled" wire:target="submit" type="submit" class="primary-button w-full">
                    <span wire:loading.delay.remove wire:target="submit">Buat Akun</span>
                    <span wire:loading.delay wire:target="submit">
                        <x-globals.spinner class="w-4 h-4 text-gray fill-blue-600 inline" /> Memproses
                    </span>
                </button>
            </div>
        </form>
        <div class="mb-3 text-center">
            <p class="text-gray-500 font-semibold">Atau gunakan metode lain</p>
        </div>
        <div class="mb-2 flex gap-2 flex-col sm:flex-row">
            <button class="login-with-google-button w-full">Daftar dengan Google</button>
            <button class="login-with-facebook-button w-full">Daftar dengan Facebook</button>
        </div>
    </div>
    <div class="text-center">
        <p class="text-gray-600">Sudah punya akun? <a href="{{ route('auth.signin') }}" class="primary-link">Masuk
                di sini.</a></p>
    </div>
</div>
