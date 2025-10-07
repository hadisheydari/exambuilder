document.addEventListener('DOMContentLoaded', () => {
    const addKeywordBtn = document.getElementById('addKeywordBtn');
    const keywordsContainer = document.getElementById('keywordsContainer');

    // ایجاد فیلد جدید keyword
    function createKeywordField() {
        const keywordDiv = document.createElement('div');
        keywordDiv.classList.add('flex', 'flex-col', 'w-1/3', 'keyword-item', 'bg-gray-50', 'p-3', 'rounded-lg', 'shadow-sm');

        keywordDiv.innerHTML = `
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
        `;

        // حذف فیلد با کلیک روی ضربدر
        keywordDiv.querySelector('.Close').addEventListener('click', () => {
            keywordDiv.remove();
        });

        keywordsContainer.appendChild(keywordDiv);
    }

    // رویداد کلیک روی Add Key Word
    addKeywordBtn.addEventListener('click', createKeywordField);

    // حذف فیلد اولیه
    document.querySelectorAll('.Close').forEach(btn => {
        btn.addEventListener('click', e => {
            e.target.closest('.keyword-item').remove();
        });
    });
});
