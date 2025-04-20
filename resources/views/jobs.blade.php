<x-layout>
    <x-slot:heading>
        Jobs Page
    </x-slot:heading>
    <h1>Welcome to Jobs page!</h1>
    
    <h2>Jobs list:</h2>

    <ul>            
        @foreach($jobs as $job)
            <a href="jobs/{{ $job['id'] }}" class="text-blue-500 hover:underline ">
                <strong>{{ $job['title']}}:</strong>
                Pays: {{ $job['salary'] }} per year
            </a>
        @endforeach
    </ul>

</x-layout>