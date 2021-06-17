@extends('layouts.mainblog')
@section('title', 'blog')
@section('content')

<div class="logoIsi" id="1">
    <h2>Modul 2</h2>
</div>

<!-- To Do List -->
<script type="text/javascript" src="{{ asset('assets/crud.js') }}"></script>
<section class="todo-list-wrapper">
    <div class="todo-list-container">
        <div class="mark-all-tasks">
            <div class="mark-all-tasks-container">
                <span class="mark-all-btn" role="button" id="mark-all-finished">
                    <span class="btn-label">Pilih semua</span>
                    <span class="action-circle completed">
                        <i class="material-icons">check</i>
                    </span>
                </span>
                <span class="mark-all-btn move-down" role="button" id="mark-all-incomplete">
                    <span class="btn-label">Semua sudah terpilih</span>
                    <span class="action-circle">
                        <i class="material-icons">check</i>
                    </span>
                </span>
            </div>
        </div>
        <div class="todo-list-header">
            <br>
            <h4>Target Belajar</h4>
            <br>
        </div>
        <div class="todo-list-body">
            <ul id="todo-list">
                <li class="task">
                    <div class="task-container">
                        <span class="task-label">OOP Java</span>
                        <span class="task-action-btn">
                            <span class="action-circle large delete-btn" title="Delete Task">
                                <i class="material-icons">delete</i>
                            </span>
                            <span class="action-circle large complete-btn" title="Mark Complete">
                                <i class="material-icons">check</i>
                            </span>
                        </span>
                    </div>
                </li>

            </ul>
        </div>
        <div class="todo-list-footer">
            <br>
            <div class="add-task-btn-wrapper">
                <span class="add-task-btn">
                    <i class="material-icons">add</i>
                </span>
            </div>
            <div class="new-task-wrapper">
                <textarea id="new-task" placeholder="Masukkan text disini. . ."></textarea>
                <span class="error-message hidden">Data yang anda inputkan kosong</span>
                <span class="add-new-task-btn btn" id="add-task">Add</span>
                <span class="cancel-btn btn" id="close-task-panel">Close</span>
                <span class="clear-all btn" id="clear-all">Clear All</span>
            </div>
        </div>
    </div>
</section>

<div class="notification-popup hide">
    <p>
        <span class="task"></span>
        <span class="notification-text"></span>
    </p>
</div>
@endsection