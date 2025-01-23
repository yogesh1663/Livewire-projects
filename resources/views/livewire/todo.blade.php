<section>
    <div class="container">
        <div class="card">

            <div class="text-center card-header">
                Todo App
            </div>
            <div class="card-body">
                <div class="d-flex justify-content-center align-items-center">
                    <div class="mb-3 input-group" style="max-width:400px">
                        <input type="text" class="form-control" placeholder="Enter your todo list"
                            aria-describedby="button-addon2" wire:model='task' name="task">
                        <button class="btn btn-sm btn-primary" type="button" id="button-addon2"
                            wire:click='handleAddList'>Add</button>
                    </div>
                </div>
                <div class="d-flex justify-content-center align-items-center">
                    @error('task')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
            </div>
            <div class="card-footer">
                <div class="d-flex justify-content-center align-items-center">
                    <table class="table" style="max-width: 600px">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Task</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($lists as $index => $list)
                            <tr wire:key='{{$index}}'>
                                <th scope="row">{{$loop->iteration}}</th>
                                <td class="{{ $list['is_completed'] ? 'text-decoration-line-through' : '' }}">
                                    {{ $list['task'] }}
                                </td>
                                <td>
                                    <button type="button" class="btn btn-sm btn-success"
                                        wire:click='handleDone({{$index}})'>Done</button>
                                    <button class="btn btn-sm btn-danger" type="button"
                                        wire:click='handleDelete({{$index}})'
                                        wire:confirm='Are you sure you want to delete this task?'>Delete</button>
                                </td>
                            </tr>
                            @empty
                            <tr>
                                <td>
                                    <p>no file found</p>
                                </td>
                            </tr>
                            @endforelse

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>