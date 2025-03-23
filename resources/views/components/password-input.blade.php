<div class="mb-4 relative">
    <label for="{{ $name }}" class="block text-gray-700 font-medium mb-2">
        {{ $label ?? ucfirst($name) }}
    </label>
    <div class="relative">
        <input
            type="password"
            id="{{ $name }}"
            name="{{ $name }}"
            required
            class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400 @error($name) border-red-500 @enderror"
            placeholder="{{ $placeholder ?? ucfirst($name) }}"
        >
        <button
            type="button"
            class="absolute inset-y-0 right-0 pr-3 flex items-center text-gray-600 cursor-pointer"
            onclick="togglePasswordVisibility('{{ $name }}')"
        >
            <i id="eye-icon-{{ $name }}" class="fa fa-eye"></i>
        </button>
    </div>
    @error($name)
    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
    @enderror
</div>

<script>
    function togglePasswordVisibility(name) {
        const passwordInput = document.getElementById(name);
        const eyeIcon = document.getElementById(`eye-icon-${name}`);

        if (passwordInput.type === 'password') {
            passwordInput.type = 'text';
            eyeIcon.classList.remove("fa-eye");
            eyeIcon.classList.add("fa-eye-slash");
        } else {
            passwordInput.type = 'password';
            eyeIcon.classList.remove("fa-eye-slash");
            eyeIcon.classList.add("fa-eye");
        }
    }
</script>
