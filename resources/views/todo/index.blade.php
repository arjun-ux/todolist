@extends('layouts.main')
@section('content')
<style>
    h4 {
        font-style: italic;
    }
</style>
    <div class="container">
        <div class="row my-5">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">Add Todo</div>
                    <div class="card-body">
                        <form action="{{ route('createTodo') }}" method="post">
                            @csrf
                            <div class="mb-1">
                                <label for="inputName" class="form-label">Todo</label>
                                <input type="text" class="form-control" id="inputName" name="name">
                            </div>
                            <div class="mb-1">
                                <label for="exampleFormControlTextarea1" class="form-label">Deskripsi</label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="description"></textarea>
                            </div>
                            <div class="mb-1">
                                <label for="inputName" class="form-label">Deadline</label>
                                <input type="date" class="form-control" id="inputName" name="deadline">
                            </div>
                            <button type="submit">Simpan</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Todo List</div>
                    <div class="card-body">
                        <table class="table table-stripped">
                            <thead class="text-center">
                                <tr>
                                    <th>No</th>
                                    <th>Todo</th>
                                    <th>Deskripsi</th>
                                    <th>Deadline</th>
                                    <th>Status</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($todos as $todo)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $todo->name }}</td>
                                    <td>{{ $todo->description }}</td>
                                    <td>{{ $todo->deadline }}</td>
                                    <td>{{ $todo->status }}</td>
                                    <td></td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
