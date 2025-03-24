<form action="{{$action}}" method="{{$method}}" class=" p-4 border rounded-lg shadow-lg  grid grid-cols-1 md:grid-cols-2 gap-4">
    @csrf
    @foreach($fields as $field)
        <div class="flex flex-col">
            <label for="{{$field['name']}}" class="block text-gray-700 font-medium mb-2">
                {{$field['label'] ?? ucfirst($field['name'])}}
            </label>
            @if($field['type'] === 'text' || $field['type'] === 'email' )
                <input
                    type="{{$field['type']}}"
                    id="{{$field['name']}}"
                    name="{{$field['name']}}"
                    class="  px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400"
                    placeholder="{{$field['placeholder'] ?? ''}}"
                    value="{{ old($field['name'], $data[$field['name']] ?? '')}}"
                    {{$field['required'] ?? false ? 'required' : ''}}
                >
            @elseif ($field['type'] === 'textarea')
                <textarea
                    id="{{ $field['name'] }}"
                    name="{{ $field['name'] }}"
                    class="px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400 h-12"
                    placeholder="{{ old($field['placeholder'] ?? '') }}"
                    {{ $field['required'] ?? false ? 'required' : '' }}
                ></textarea>
            @elseif ($field['type'] === 'file')
                <input
                    type="file"
                    id="{{ $field['name'] }}"
                    name="{{ $field['name'] }}"
                    class="px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400 file:bg-blue-500 file:text-white file:px-4 file:py-2 file:rounded-lg file:border-none"
                    {{ $field['required'] ?? false ? 'required' : '' }}
                >

            @elseif($field['type'] === 'date')
                <input
                    type="text"
                    id="{{$field['name']}}"
                    name="{{$field['name']}}"
                    class="datepicker   px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400"
                    placeholder="{{$field['placeholder'] ?? ''}}"
                    autocomplete="off"
                    value="{{ old($field['name'], $data[$field['name']] ?? '')}}"
                >
            @endif
            @error($field['name'])
            <p class="text-red-500 text-sm mt-1">{{$message}}</p>
            @enderror
        </div>
    @endforeach
    <button type="submit" class="w-60 bg-blue-500 text-white px-4 py-2 rounded-lg h-12 m-4">
        submit
    </button>

</form>
<script>
    document.addEventListener("DOMContentLoaded" , function (){
        flatpickr(".datepicker", {
            dateFormat :'y-m-d',
        })
    });
</script>
