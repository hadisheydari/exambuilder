document.addEventListener('alpine:init', () => {
    Alpine.data('examApp', () => ({
        isModalOpen: false,
        showForm: false,
        selectedType: '',

        // ---------- Modal ----------
        openModal() {
            console.log('Modal opened');
            this.isModalOpen = true;
        },

        closeModal() {
            console.log('Modal closed');
            this.isModalOpen = false;
        },

        selectType(type) {
            console.log('Selected type:', type);
            this.selectedType = type;
            this.showForm = true;
            this.closeModal();

            // Scroll form into view
            this.$nextTick(() => {
                if (this.$refs.form) {
                    console.log('Scrolling to form');
                    this.$refs.form.scrollIntoView({ behavior: 'smooth', block: 'center' });
                }
            });
        },

        // ---------- Submit Question ----------
        async submitQuestion() {
            console.log('Submitting question...');

            try {
                const form = this.$refs.form;
                if (!form) throw new Error('Form not found!');

                const formData = new FormData(form);
                console.log('Form data prepared:', Array.from(formData.entries()));

                const response = await fetch(form.action, {
                    method: 'POST',
                    headers: {
                        'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content,
                        'Accept': 'application/json',
                    },
                    body: formData
                });

                console.log('Response status:', response.status);

                if (!response.ok) throw new Error('Request failed: ' + response.status);

                const data = await response.json();
                console.log('✅ Question added:', data);

                alert('سؤال با موفقیت ثبت شد!');
                this.resetForm();

            } catch (error) {
                console.error('❌ Error submitting question:', error);
                alert('خطا در ارسال سؤال!');
            }
        },

        resetForm() {
            console.log('Resetting form');
            this.showForm = false;
            this.selectedType = '';
            if (this.$refs.form) this.$refs.form.reset();
        }
    }));
});
