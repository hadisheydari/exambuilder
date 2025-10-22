@if($isShow)
    <div class=" grid grid-cols-1 md:grid-cols-2 gap-4">
        <div class="flex flex-col ">
            <label for="input" class="block text-gray-700 font-medium mb-2 ">
                Question Text
            </label>
            <p
                id="questionText"
                class="  px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400  {{$field['hidden'] ?? false ? 'hidden' : ''}}"
            >this is a test Question Text for true false</p>
        </div>
        <div class="flex justify-around">
            <div class="flex items-center justify-around w-2/3 ps-4">
                <div class="flex flex-col items-center me-4">
                    <label for="true-option" class="mb-1 text-sm font-medium text-gray-900">True</label>
                    <input id="true-option" type="radio" value="true" name="is_correct"
                           class="w-5 h-5 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500">
                </div>

                <div class="flex flex-col items-center">
                    <label for="false-option" class="mb-1 text-sm font-medium text-gray-900">False</label>
                    <input id="false-option" type="radio" value="false" name="is_correct" checked
                           class="w-5 h-5 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500">
                </div>
            </div>

            <div class="flex flex-col w-1/4 mx-4">
                <label for="input" class="block text-gray-700 font-medium mb-2 ">
                    Question Score
                </label>
                <p
                    id="questionText"
                    class="  px-4 py-2  rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400  {{$field['hidden'] ?? false ? 'hidden' : ''}}"

                >0.5</p>
            </div>
        </div>
    </div>
@elseif($isCreate)
    <div class="flex flex-col gap-4 mt-3">
        <label for="input" class="block text-gray-700 font-medium mb-2 ">
            Question Text
        </label>
        <textarea
            id="questionText"
            name="questionText"
            class="  px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400 m-6"
            placeholder="text"
        >
            </textarea>
    </div>
    <div class="flex justify-around ">
        <div class="flex items-center justify-around w-2/3 ps-4 border border-gray-200 rounded-lg dark:border-gray-700">
            <div class="flex items-center me-4">
                <input id="true-option" type="radio" value="true" name="is_correct"
                       class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500">
                <label for="true-option" class="ms-2 text-sm font-medium text-gray-900">True</label>
            </div>
            <div class="flex items-center">
                <input id="false-option" type="radio" value="false" name="is_correct" checked
                       class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500">
                <label for="false-option" class="ms-2 text-sm font-medium text-gray-900">False</label>
            </div>
        </div>
        <div class="flex flex-col w-1/4 mx-4">
            <label for="input" class="block text-gray-700 font-medium mb-2 ">
                Question Score
            </label>
            <input
                type="number"
                id="questionText"
                name="questionText"
                class="  px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400  {{$field['hidden'] ?? false ? 'hidden' : ''}}"
                placeholder="score"
                step="2"
            >
        </div>
    </div>

@endif
