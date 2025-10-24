@if($isShow)
    <div class="flex justify-around col-span-2    rounded-lg shadow-sm p-4">
        <div class="flex flex-col w-4/6 mx-4">
            <label for="input" class="block text-gray-700 font-semibold mb-2">
                Question Text
            </label>
            <p
                id="questionText"
                class="px-4 py-3 text-gray-800 bg-white border border-gray-300 rounded-md shadow-sm leading-relaxed {{$field['hidden'] ?? false ? 'hidden' : ''}}"
            >
                Fill in the blank:
                The capital of France is <span class="border-b-2 border-dashed border-blue-400 px-8 inline-block"></span>
                this is a test question Text for blank aswer type question

                .
            </p>
        </div>

        <div class="flex flex-col w-2/6 mx-4">
            <label for="value" class="block text-gray-700 font-semibold mb-2">
                Blank Answer
            </label>
            <input
                type="text"
                id="value"
                name="value"
                class="px-4 py-2 border border-blue-400 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 placeholder-gray-400 {{$field['hidden'] ?? false ? 'hidden' : ''}}"
                placeholder="Type your answer..."
            >
            <label for="input" class="block text-gray-700 font-medium mb-2  mt-4 ">
                Question Score
            </label>
            <p
                id="questionText"
                class="  px-4 py-2  {{$field['hidden'] ?? false ? 'hidden' : ''}}"

            >0.5</p>
        </div>

    </div>
@elseif($isCreate)
    <div class=" flex justify-around  col-span-2 mt-3">
        <div class="flex flex-col w-4/6 mx-4 ">
            <label for="input" class="block text-gray-700 font-medium mb-2 ">
                Question Text
            </label>
            <textarea
                id="questionText"
                name="questionText"
                class="  px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400  {{$field['hidden'] ?? false ? 'hidden' : ''}}"
                placeholder="text"
            >

                              </textarea>
        </div>

        <div class="flex flex-col w-2/6 mx-4">
            <label for="input" class="block text-gray-700 font-medium mb-2 ">
                Blank Answer
            </label>
            <input
                type="text"
                id="value"
                name="value"
                class="  px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400  {{$field['hidden'] ?? false ? 'hidden' : ''}}"
                placeholder="Blank Answer"
            >
        </div>

    </div>
    <div class=" flex justify-around  col-span-2 ">
        <div class="flex flex-col w-3/4 mx-4">
            <label for="input" class="block text-gray-700 font-medium mb-2 ">
                Continue Question
            </label>
            <textarea
                id="questionText"
                name="questionText2"
                class="  px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400  {{$field['hidden'] ?? false ? 'hidden' : ''}}"
                placeholder="text"
            >

                              </textarea>
        </div>

        <div class="flex flex-col w-1/4 mx-4">
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



@endif

