document.addEventListener('alpine:init', () => {
    Alpine.data('examApp', () => ({
        isModalOpen: false,
        showForm: false,
        selectedType: '',

        openModal() {
            this.isModalOpen = true;
        },

        closeModal() {
            this.isModalOpen = false;
        },

        selectType(type) {
            this.selectedType = type;
            this.showForm = true;
            this.closeModal();
        },

        submitQuestion() {
            // بعد از ثبت سوال، فرم هیدن شود
            this.showForm = false;
            this.selectedType = '';
        }
    }));
});
