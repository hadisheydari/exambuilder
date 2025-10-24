@if($isShow)
    <div class="flex flex-col ">
        <label for="input" class="block text-gray-700 font-medium mb-2 ">
            Question Text
        </label>
        <p
            id="questionText"
            class="  px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400  {{$field['hidden'] ?? false ? 'hidden' : ''}}"
        >this is a test Question Text for true false</p>
    </div>

    <textarea
        id="questionText"
        name="questionText"
        class="px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400 {{$field['hidden'] ?? false ? 'hidden' : ''}}"
        placeholder="write the answer"
    ></textarea>
@elseif($isCreate)
    <div class="flex  col-span-2 mt-3 justify-around">
        <div class="flex flex-col w-3/4 mx-4">

                <label for="questionText" class="block text-gray-700 font-medium mb-2">
                    Question Text
                </label>
                <textarea
                    id="questionText"
                    name="questionText"
                    class="px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400 {{$field['hidden'] ?? false ? 'hidden' : ''}}"
                    placeholder="Enter the question text"
                ></textarea>
            </div>
        <div class="flex flex-col w-1/4 mx-4 mt-3">

        <label for="input" class="block text-gray-700 font-medium mb-2 ">
                    Question Score
                </label>
                <input
                    type="number"
                    id="score"
                    name="score"
                    class="  px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400  {{$field['hidden'] ?? false ? 'hidden' : ''}}"
                    placeholder="score"
                    step="2"
                >
            </div>



    </div>

    <div class="flex flex-col col-span-2 mt-4">
        <label class="block text-gray-700 font-medium mb-2">
            Key Words
        </label>

        <!-- container برای نگهداری همه keyword inputs -->
        <div id="keywordsContainer" class="flex flex-wrap gap-4">
            <div class="flex flex-col w-1/3 keyword-item bg-gray-50 p-3 rounded-lg shadow-sm">
                <div class="flex justify-between items-center mb-1">
                    <label class="text-gray-700 font-medium">Key word</label>
                    <button type="button" class="Close text-red-400 hover:text-red-600 transition text-xl">
                        <i class="fa fa-times"></i>
                    </button>
                </div>
                <input
                    type="text"
                    name="key_word[]"
                    class="px-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400"
                    placeholder="word"
                >
            </div>
        </div>

        <button
            type="button"
            id="addKeywordBtn"
            class="w-1/4 bg-blue-900 text-white px-4 py-2 rounded-lg h-12 mt-3"
        >
            Add Key Word
        </button>
    </div>



@endif
