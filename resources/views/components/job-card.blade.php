@props(['job'])

<x-panel class="flex flex-col text-center">
    <div class="self-start text-sm">{{ $job->employer->name }}</div>

<div class="py-8 ">
    <h3 class="font-bold group-hover:text-blue-600 text-xl transition-colors duration-1000">
        <a href="{{ $job->url }}" target="_blank">{{ $job->title }}</a>
    </h3>
    <p class="text-sm mt-4">{{ $job->schedule }} - From {{ $job->salary }}</p>
</div>

<div class="flex justify-between items-center mt-auto">
    <div>
        @foreach ($job->tags as $tag )
        <x-tag href="/tags/{{ strtolower($tag->name) }}" class="px-3 py-1 text-2xs">{{ $tag->name }}</x-tag>
        @endforeach
        
        
        
    </div>
    
    <x-employer-logo :employer="$job->employer" :width="42" />
</div>
</x-panel> 