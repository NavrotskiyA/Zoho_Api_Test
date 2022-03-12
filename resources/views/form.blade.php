@extends('layouts.index')

@section('main')
    <form action="{{ route('index.store') }}" method="POST">
        @csrf
        <div class="card" style="width: 18rem;">
            <div class="card-body">
                <h5 class="card-title">New Deal</h5>
                <label for="Deal">
                    <h5>Deal name</h5>
                    <input type="text" name="dealName" required>
                </label>
                <br>
                <label for="Stage">
                    <h5>Stage</h5>
                    <input type="text" name="stage" required>
                </label>
                <br>
                <label for="Stage">
                    <h5>Pipeline</h5>
                    <input type="text" name="pipeline" required>
                </label>
            </div>
            <div class="card-body">
                <h5 class="card-title">New Task</h5>
                <label for="Deal">
                    <h5>Task subject</h5>
                    <input type="text" name="subject" required>
                </label>
            </div>
            <button class="btn btn-primary" type="submit">Create</button>
        </div>
    </form>
@endsection
