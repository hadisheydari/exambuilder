<form action="{{$action}}" method="POST" enctype="multipart/form-data" class="p-4 border rounded-lg shadow-lg grid grid-cols-1 md:grid-cols-2 gap-4">
    @csrf
    @if ($method === 'PUT' || $method === 'PATCH')
        @method($method)
    @endif
    {{ $slot }}

@foreach($fields as $field)
        <div class="flex flex-col">
            <label for="{{$field['name']}}" class="block text-gray-700 font-medium mb-2 {{$field['hidden'] ?? false ? 'hidden' : ''}}">
                {{$field['label'] ?? ucfirst($field['name'])}}
            </label>

        @if($field['type'] === 'text' || $field['type'] === 'email' )
                <input
                    type="{{$field['type']}}"
                    id="{{$field['name']}}"
                    name="{{$field['name']}}"
                    class="  px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400  {{$field['hidden'] ?? false ? 'hidden' : ''}}"
                    placeholder="{{$field['placeholder'] ?? ''}}"
                    value="{{ old($field['name'], $field['value'] ?? '')}}"
                    {{$field['required'] ?? false ? 'required' : ''}}
                    {{$field['readonly'] ?? false ? 'readonly' : ''}}

                >
            @elseif ($field['type'] === 'textarea')
                <textarea
                    id="{{ $field['name'] }}"
                    name="{{ $field['name'] }}"
                    class="px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400 h-12"
                    placeholder="{{ old($field['placeholder'] ?? '', $field['value'] ?? '') }}"
                     {{ $field['required'] ?? false ? 'required' : '' }}
                    {{$field['readonly'] ?? false ? 'readonly' : ''}}

                >    {{ old($field['name'], $field['value'] ?? '') }}
                </textarea>
            @elseif($field['type'] === 'number'  )
                 <input
                        type="{{$field['type']}}"
                        id="{{$field['name']}}"
                        name="{{$field['name']}}"
                        class="  px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400"
                        placeholder="{{$field['placeholder'] ?? ''}}"
                        value="{{ old($field['name'], $field['value'] ?? '')}}"
                        min="{{$field['min']}}"
                        max="{{$field['max']}}"
                        {{$field['required'] ?? false ? 'required' : ''}}
                        {{$field['readonly'] ?? false ? 'readonly' : ''}}

                    >
            @elseif ($field['type'] === 'file')
                <input
                    type="file"
                    id="{{ $field['name'] }}"
                    name="{{ $field['name'] }}"
                    class="px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400 file:bg-blue-500 file:text-white file:px-4 file:py-2 file:rounded-lg file:border-none"
                    accept="image/jpeg, image/png, image/jpg"
                    {{ $field['required'] ?? false ? 'required' : '' }}
                >
            @elseif ($field['type'] === 'img')

            <img id="preview-{{ $field['name'] }}" src="{{ asset('storage/'. $field['value'] ?? '') }}" class="mt-2  w-40 h-40 object-cover rounded-lg border" />

            @elseif($field['type'] === 'date')
                <input
                    type="text"
                    id="{{$field['name']}}"
                    name="{{$field['name']}}"
                    class="datepicker   px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400"
                    placeholder="{{$field['placeholder'] ?? ''}}"
                    autocomplete="off"
                    value="{{ old($field['name'], $field['value'] ?? '')}}"
                    {{$field['disabled'] ?? false ? 'disabled' : ''}}

                >
            @endif
            @error($field['name'])
            <p class="text-red-500 text-sm mt-1">{{$message}}</p>
            @enderror
        </div>
    @endforeach
    <button type="{{$button['type']}}" onclick="{{$button['action'] ?? ''}}" class="w-60 bg-blue-500 text-white px-4 py-2 rounded-lg h-12 m-4">
        {{$button['text']}}
    </button>

</form>
<script>
    document.addEventListener("DOMContentLoaded" , function (){
        flatpickr(".datepicker", {})
    });
</script>
