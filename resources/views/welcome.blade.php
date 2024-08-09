<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Linktree-like To Do List App</title>
    <link rel="stylesheet" href="./css/style.css"> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"> 
</head>
<body>
    <div class="container" >
        <header>
        <img src="{{ asset('energeek.png') }}">
        </header>
        <main>
<form id="user-form">
    <div class="user-info">
        <label for="name">Nama</label>
        <input type="text" id="name" name="name" placeholder="Nama">
    </div>
    <div class="user-info">
        <label for="username">Username</label>
        <input type="text" id="username" name="username" placeholder="Username">
    </div>
    <div class="user-info">
        <label for="email">Email</label>
        <input type="text" id="email" name="email" placeholder="Email">
    </div>
    <button type="submit" id="save-btn">SIMPAN</button>
</form>

            <div class="todo-section-header">
                <h2>To Do List</h2>
                <button id="add-todo-btn"><i class="fas fa-plus"></i> Tambah To Do</button>
            </div>
            <div class="todo-section-header">
            </div>
            <div class="todo-section-header">
            </div>
            <div class="todo-section">
                <div class="todo-input-container">
                    <div class="todo-input">
                        <label for="todo-title">Judul To Do</label>
                        <div class="input-with-icon">
                            <input type="text" id="todo-title" placeholder="Contoh : Perbaikan Api Master">
                        </div>
                    </div>
                    <div class="todo-category">
                        <label for="todo-category">Kategori</label>
                        <div class="input-with-icon">
                            <input type="text" id="todo-category" placeholder="To Do">
                            <i class="fas fa-chevron-down"></i> 
                        </div>
                    </div>                    
                    <button class="delete-btn"><i class="fas fa-trash-alt"></i></button> 
                </div>
            </div>
            <div class="todo-section">
                <div class="todo-input-container">
                    <div class="todo-input">
                        <label for="todo-title">Judul To Do</label>
                        <div class="input-with-icon">
                            <input type="text" id="todo-title" placeholder="Contoh : Perbaikan Api Master">
                        </div>
                    </div>
                    <div class="todo-category">
                        <label for="todo-category">Kategori</label>
                        <div class="input-with-icon">
                            <input type="text" id="todo-category" placeholder="To Do">
                            <i class="fas fa-chevron-down"></i>
                        </div>
                    </div>                    
                    <button class="delete-btn"><i class="fas fa-trash-alt"></i></button>
                </div>
            </div>
            <div class="todo-section">
                <div class="todo-input-container">
                    <div class="todo-input">
                        <label for="todo-title">Judul To Do</label>
                        <div class="input-with-icon">
                            <input type="text" id="todo-title" placeholder="Contoh : Perbaikan Api Master">
                        </div>
                    </div>
                    <div class="todo-category">
                        <label for="todo-category">Kategori</label>
                        <div class="input-with-icon">
                            <input type="text" id="todo-category" placeholder="To Do">
                            <i class="fas fa-chevron-down"></i>
                        </div>
                    </div>                    
                    <button class="delete-btn"><i class="fas fa-trash-alt"></i></button>
                </div>
    </div>
            <div class="save-section">
                <button id="save-btn">SIMPAN</button>
            </div>
            <script src="{{ asset('js/script.js') }}"></script>
<style>* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body {
    font-family: Arial, sans-serif;
    background: #000;
    color: #333;
}

.container {
    max-width: 800px;
    margin: 20px auto;
    padding: 80px;
    background: #f6f6f6;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

header {
    text-align: center;
    margin-bottom: 50px;
}

header img {
    height: 50px;
    color: #fb3535;
}

.user-info-container {
    border: 1px solid #ddd; 
    border-radius: 6px; 
    padding: 20px; 
    background: #fff; 
    margin-bottom: 50px; 
    display: flex; 
    gap: 20px; 
}

.user-info {
    flex: 1;
}

.user-info label {
    font-weight: bold;
    margin-bottom: 5px;
    display: block; 
    font-size: small;
}

.user-info input {
    padding: 8px;
    border: 1px solid #ddd;
    border-radius: 6px;
    width: 100%; 
}

.todo-section-header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-bottom: 10px;
}

.todo-section-header h2 {
    font-size: large; 
    margin: 0;
    font-weight: bold;
}

#add-todo-btn {
    background: #f87979; 
    color: #fff;
    border: none;
    padding: 10px 20px;
    border-radius: 6px;
    cursor: pointer;
    font-size: 1em;
    display: flex;
    align-items: center;
    justify-content: center;
}

#add-todo-btn i {
    margin-right: 12px;
}

#add-todo-btn:hover {
    background: #ffffff;
    color: #c82333;
    border-radius: 6px;
}

.todo-section {
    margin-bottom: 20px;
    display: flex;
    flex-direction: column;
}

.todo-input-container {
    display: flex;
    align-items: center;
    justify-content: space-between;
    margin-bottom: 20px;
}

.todo-input,
.todo-category {
    display: flex;
    flex-direction: column;
}

.todo-input label,
.todo-category label {
    font-weight: bold;
    margin-bottom: 5px;
    font-size: small;
}

.todo-input input {
    width: 470px;
    padding: 8px;
    border: 1px solid #ddd;
    border-radius: 6px;
}

.input-with-icon {
    position: relative;
}

.input-with-icon i {
    position: absolute;
    right: 10px;
    top: 50%;
    transform: translateY(-50%);
    pointer-events: none;
    color: #aaa;
}

.todo-category input {
    width: 100px;
    padding: 8px;
    border: 1px solid #ddd;
    border-radius: 6px;
}

.delete-btn {
    background: #dc3545; 
    color: #fff;
    border: none;
    padding: 8px 10px;
    border-radius: 6px;
    cursor: pointer;
    font-size: 1em;
    align-self: flex-end;
    margin-top: -6px; 
}

.delete-btn:hover {
    background: #f02c40;
}

.delete-btn i {
    pointer-events: none;
}

.save-section {
    text-align: center;
    margin-top: 40px;
}

.save-section button {
    background: #059e33;
    color: #fff;
    border: none;
    padding: 10px 290px;
    border-radius: 6px;
    cursor: pointer;
    font-size: 1em;
    
}

.save-section button:hover {
    background: #ffffff;
    color: #00ff04;
}
</style>
</body>
</html>
