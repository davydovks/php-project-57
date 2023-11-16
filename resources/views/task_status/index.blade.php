@extends('layouts.app')

@section('content')
    <div class="grid col-span-full">
        <h1 class="mb-5">{{ __('views.task_status.index.header') }}</h1>
        @auth
            <div>
                <a href="{{ route('task_statuses.create') }}"
                    class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                    {{ __('views.task_status.index.create') }}
                </a>
            </div>
        @endauth
        <table class="mt-4">
            <thead class="border-b-2 border-solid border-black text-left">
                <tr>
                    <th>{{ __('views.task_status.index.id') }}</th>
                    <th>{{ __('views.task_status.index.name') }}</th>
                    <th>{{ __('views.task_status.index.created_at') }}</th>
                    @auth<th>{{ __('views.task_status.index.actions') }}</th>@endauth
                </tr>
            </thead>
            <tbody>
                @foreach ($taskStatuses as $status)
                    <tr class="border-b border-dashed text-left">
                        <td>{{ $status->id }}</td>
                        <td>{{ $status->name }}</td>
                        <td>{{ $status->created_at }}</td>
                        @auth
                            <td>
                                <a data-confirm="__('views.task_status.index.delete_confirm')" data-method="delete"
                                    class="text-red-600 hover:text-red-900"
                                    href="{{ route('task_statuses.destroy', $status->id) }}">
                                    {{ __('views.task_status.index.delete') }}
                                </a>
                                <a class="text-blue-600 hover:text-blue-900"
                                    href="{{ route('task_statuses.edit', $status->id) }}">
                                    {{ __('views.task_status.index.edit') }}
                                </a>
                            </td>
                        @endauth
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
