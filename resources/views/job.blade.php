<x-layout>
    <x-slot:heading>
            Job Listings
        </x-slot:heading>
    
    <h2 class='font-bold'>{{$job['title']}}</h2>
   <p>This Job pays {{ $job['salary']}} Per Year</p>
    </x-layout>