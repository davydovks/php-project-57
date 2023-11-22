@extends('layouts.app')

@section('content')
    <div class="grid col-span-full">
        <h1 class="mb-5">{{ __('views.task.index.header') }}</h1>

        <div class="w-full flex items-center">
            <div>
                {{ Form::open(['route' => 'tasks.index', 'method' => 'GET']) }}
                    <div class="flex">
                        <div>
                            {{ Form::select('filter[status_id]', $taskStatusesById, Arr::get($filter, 'status_id'), ['class' => 'rounded border-gray-300', 'placeholder' =>  __('views.task.index.status')]) }}
                        </div>
                        <div>
                            {{ Form::select('filter[created_by_id]', $usersById, Arr::get($filter, 'created_by_id'), ['class' => 'ml-2 rounded border-gray-300', 'placeholder' =>  __('views.task.index.created_by')]) }}
                        </div>
                        <div>
                            {{ Form::select('filter[assigned_to_id]', $usersById, Arr::get($filter, 'assigned_to_id'), ['class' => 'ml-2 rounded border-gray-300', 'placeholder' =>  __('views.task.index.assigned_to')]) }}
                        </div>
                        <div>
                            <input class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded ml-2"
                                type="submit" value="{{ __('views.task.index.apply') }}">
                        </div>
                    </div>
                {{ Form::close() }}
            </div>

            <div class="ml-auto">
                <x-link-button route="{{ route('tasks.create') }}" text="{{ __('views.task.index.create_task') }}"
                    class="ml-2" />
            </div>
        </div>

        <table class="mt-4">
            <thead class="border-b-2 border-solid border-black text-left">
                <tr>
                    <th>{{ __('views.task.index.id') }}</th>
                    <th>{{ __('views.task.index.status') }}</th>
                    <th>{{ __('views.task.index.name') }}</th>
                    <th>{{ __('views.task.index.created_by') }}</th>
                    <th>{{ __('views.task.index.assigned_to') }}</th>
                    <th>{{ __('views.task.index.created_at') }}</th>
                    @auth
                        <th>{{ __('views.task.index.actions') }}</th>
                    @endauth
                </tr>
            </thead>
            <tbody>
                @foreach ($tasks as $task)
                    <tr class="border-b border-dashed text-left">
                        <td>{{ $task->id }}</td>
                        <td>{{ $task->status->name }}</td>
                        <td>
                            <x-link-blue route="{{ route('tasks.show', $task->id) }}" text="{{ $task->name }}" />
                        </td>
                        <td>{{ $task->createdBy->name }}</td>
                        <td>{{ $task->assignedTo->name }}</td>
                        <td>{{ $task->created_at->format('d.m.Y') }}</td>
                        @auth
                            <td>
                                <x-link-red route="{{ route('tasks.destroy', $task->id) }}"
                                    confirm="{{ __('views.actions.delete_confirm') }}"
                                    text="{{ __('views.actions.delete') }}" />
                                <x-link-blue route="{{ route('tasks.edit', $task->id) }}"
                                    text="{{ __('views.actions.edit') }}" />
                            </td>
                        @endauth
                    </tr>
                @endforeach
            </tbody>
        </table>
        <div class="mt-4">
            {{ $tasks->links() }}
        </div>
    </div>
@endsection
