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
            class="@error($name) border-red-500 @enderror w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400"
            placeholder="{{ $placeholder ?? ucfirst($name) }}"
        >
        <button
            type="button"
            class="absolute inset-y-0 right-0 pr-3 flex items-center text-gray-600"
            onclick="togglePasswordVisibility('{{ $name }}')"
        >
            <svg id="toggle-eye-{{ $name }}" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                <path id="eye-closed-{{ $name }}" stroke-linecap="round" stroke-linejoin="round" d="M3.98 8.73C4.73 7.82 7.27 5 12 5s7.27 2.82 8.02 3.73C21.26 9.55 22 11 22 12s-.74 2.45-1.98 3.27C19.27 16.18 16.73 19 12 19s-7.27-2.82-8.02-3.73C2.74 14.45 2 13 2 12s.74-2.45 1.98-3.27z" />
                <path id="eye-pupil-{{ $name }}" stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
            </svg>
        </button>
    </div>
    @error($name)
    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
    @enderror
</div>
<script>
    function togglePasswordVisibility(name) {
        const passwordInput = document.getElementById(name);
        const eyeIcon = document.getElementById(`toggle-eye-${name}`);
        const eyeClosedPath = document.getElementById(`eye-closed-${name}`);
        const eyePupilPath = document.getElementById(`eye-pupil-${name}`);

        if (passwordInput.type === 'password') {
            passwordInput.type = 'text';
            eyeClosedPath.setAttribute(
                "d",
                "M3.98 8.73C4.73 7.82 7.27 5 12 5s7.27 2.82 8.02 3.73C21.26 9.55 22 11 22 12s-.74 2.45-1.98 3.27C19.27 16.18 16.73 19 12 19s-7.27-2.82-8.02-3.73C2.74 14.45 2 13 2 12s.74-2.45 1.98-3.27z"
            );
            eyePupilPath.setAttribute(
                "d",
                "M12 12a3 3 0 11-6 0 3 3 0 016 0z"
            );
        } else {
            passwordInput.type = 'password';
            eyeClosedPath.setAttribute(
                "d",
                "M3.98 8.73C4.73 7.82 7.27 5 12 5s7.27 2.82 8.02 3.73C21.26 9.55 22 11 22 12s-.74 2.45-1.98 3.27C19.27 16.18 16.73 19 12 19s-7.27-2.82-8.02-3.73C2.74 14.45 2 13 2 12s.74-2.45 1.98-3.27z"
            );
            eyePupilPath.setAttribute(
                "d",
                "M15 12a3 3 0 11-6 0 3 3 0 016 0z"
            );
        }
    }
</script>
