document.addEventListener('DOMContentLoaded', function () {
    const addTodoBtn = document.getElementById('add-todo-btn');
    const todoSection = document.querySelector('.todo-section');

    addTodoBtn.addEventListener('click', function () {
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

        todoSection.appendChild(newTodoContainer);

        const deleteBtn = newTodoContainer.querySelector('.delete-btn');
        deleteBtn.addEventListener('click', function () {
            const confirmed = confirm('Apakah Anda yakin ingin menghapus item ini?');
            if (confirmed) {
                newTodoContainer.remove();
            }
        });
    });
});
document.addEventListener('DOMContentLoaded', function() {
    document.getElementById('user-form').addEventListener('submit', function(e) {
        e.preventDefault(); // Mencegah reload halaman
        
        let formData = new FormData(this);

        fetch('/users', {
            method: 'POST',
            body: formData,
            headers: {
                'X-Requested-With': 'XMLHttpRequest',
                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
            }
        })
        
        
        .then(response => response.json())
        .then(data => {
            alert(data.message);
            // Reset form setelah sukses
            document.getElementById('user-form').reset();
        })
        .catch(error => {
            console.error('Error:', error);
        });
    });
});
