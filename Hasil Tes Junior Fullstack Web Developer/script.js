document.addEventListener('DOMContentLoaded', function () {
    const addTodoBtn = document.getElementById('add-todo-btn');
    const todoSection = document.querySelector('.todo-section');

    addTodoBtn.addEventListener('click', function () {
        // Buat elemen baru
        const newTodoContainer = document.createElement('div');
        newTodoContainer.classList.add('todo-input-container');
        
        newTodoContainer.innerHTML = `
            <div class="todo-input">
                <label for="todo-title">Judul To Do</label>
                <div class="input-with-icon">
                    <input type="text" placeholder="Contoh : Perbaikan Api Master">
                </div>
            </div>
            <div class="todo-category">
                <label for="todo-category">Kategori</label>
                <div class="input-with-icon">
                    <input type="text" placeholder="To Do">
                    <i class="fas fa-chevron-down"></i>
                </div>
            </div>
            <button class="delete-btn"><i class="fas fa-trash-alt"></i></button>
        `;

        // Tambahkan elemen baru ke dalam todo-section
        todoSection.appendChild(newTodoContainer);

        // Tambahkan event listener untuk tombol delete di elemen baru
        const deleteBtn = newTodoContainer.querySelector('.delete-btn');
        deleteBtn.addEventListener('click', function () {
            const confirmed = confirm('Apakah Anda yakin ingin menghapus item ini?');
            if (confirmed) {
                newTodoContainer.remove();
            }
        });
    });

    // Tambahkan event listener untuk tombol delete yang sudah ada
    const deleteBtns = document.querySelectorAll('.delete-btn');
    deleteBtns.forEach(btn => {
        btn.addEventListener('click', function () {
            const confirmed = confirm('Apakah Anda yakin ingin menghapus item ini?');
            if (confirmed) {
                btn.closest('.todo-input-container').remove();
            }
        });
    });
});
