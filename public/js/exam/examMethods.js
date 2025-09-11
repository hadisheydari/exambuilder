const modalOverlay = document.getElementById('ModalOverlay');
const modal = document.getElementById('Modal');
const addBtn = document.getElementById('AddQuestion');
const closeBtn = document.getElementById('Close');
const form = document.getElementById('typeForm');

function openModal() {
    modalOverlay.classList.remove('hidden');
    setTimeout(() => {
        modalOverlay.classList.remove('opacity-0');
        modal.classList.remove('opacity-0', 'scale-95');
        modal.classList.add('opacity-100', 'scale-100');
    }, 50);
    addBtn.classList.add('hidden');
}

function closeModal() {
    modalOverlay.classList.add('opacity-0');
    modal.classList.add('opacity-0', 'scale-95');
    modal.classList.remove('opacity-100', 'scale-100');
    setTimeout(() => {
        modalOverlay.classList.add('hidden');
        addBtn.classList.remove('hidden');
    }, 300);
}



addBtn.onclick = openModal;
closeBtn.onclick = closeModal;
modalOverlay.onclick = e => { if (e.target === modalOverlay) closeModal(); };


function typeSelection($type) {
    if($type === 'true-false'){
        modalOverlay.classList.add('hidden');
        addBtn.classList.remove('hidden');

    }
}
