<div class="px-3 py-5 mb-3 shadow-sm hover:shadow-md rounded border border-gray-200">
    <div class="flex justify-between">
        <h2 class="text-xl font-bold text-green-800">{{ $job->title }}</h2>
        <button class="h-5 w-5 focus:outline-none " wire:click="addLike" >


            <svg class=" text-gray-600" xmlns="http://www.w3.org/2000/svg" fill="{{ $job->isLiked() ? 'green' : ''}}" viewBox="0 0 24 24"
                stroke-width="1.5" stroke="white" class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z" />
            </svg>
        </button>
    </div>

    <p class="text-md text-gray-800">{{ $job->description }}</p>
    <div class="flex items-center">
        <span class="h-2 w-2 bg-green-300 rounded-full mr-1 mt-1"></span>
        <a href="{{ route('jobs.show',['id'=>$job->id ])}}" class="text-blue-600 hover:text-gray-500">Consulter la mission</a>
    </div>
    <span class="text-sm text-gray-600">{{ number_format($job->price / 100, 2, ',', '') }} </span>
</div>
