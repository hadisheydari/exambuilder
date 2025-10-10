// public/js/exam/examMethods.js
document.addEventListener('alpine:init', () => {
    Alpine.data('examApp', () => ({
        isModalOpen: false,
        questionContainer: '',

        openModal() {
            this.isModalOpen = true;
        },

        closeModal() {
            this.isModalOpen = false;
        },

        selectType(type) {
            if(type === 'true-false') {
                this.questionContainer = `
                <x-exam.true-false/>
                `;
            } else if(type === 'blank') {
                this.questionContainer = `
                <x-exam.blank-answer/>

                `;
            } else if(type === 'descriptive') {
                this.questionContainer = `
                <x-exam.descriptive/>

                `;
            }
            this.closeModal();
        }
    }));
});
