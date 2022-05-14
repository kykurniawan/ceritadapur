<div>
    <div class="p-5 bg-white rounded-lg border shadow mb-5">
        <div class="mb-3">
            <input type="email" name="" id="" class="form-input block w-full rounded-lg" placeholder="Alamat Email...">
        </div>
        <div class="mb-3">
            <input type="password" name="" id="" class="form-input block w-full rounded-lg" placeholder="Kata Sandi...">
        </div>
        <div class="mb-3">
            <button class="primary-button w-full">Masuk</button>
        </div>
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
