@vite('resources/css/app.css')
<nav  class="p-2 my-auto">
    <ul class="flex -space-x-px text-sm justify-center ">
        {{-- Previous Page Link --}}
        @if ($paginator->onFirstPage())
            <li>
                <span class="flex items-center justify-center px-3 h-8 ml-0 leading-tight text-gray-500 bg-white dark:bg-gray-800 border border-gray-300 rounded-l-lg hover:bg-gray-100 cursor-pointer  hover:text-gray-700 ">Previous</span>
            </li>
        @else
            <li>
                <a href="{{ $paginator->previousPageUrl() }}" class="flex items-center justify-center px-3 h-8 ml-0 leading-tight text-gray-500 bg-white dark:bg-gray-800 border border-gray-300 cursor-pointer rounded-l-lg hover:bg-gray-100 hover:text-gray-700 ">Previous</a>
            </li>
        @endif

        {{-- Pagination Elements --}}
        @foreach ($elements as $element)
            @if (is_string($element))
                {{-- "Three Dots" Separator --}}
                <li>
                    <span class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white dark:bg-gray-800 border border-gray-300 hover:bg-gray-100 cursor-pointer hover:text-gray-700 ">{{ $element }}</span>
                </li>
            @endif

            @if (is_array($element))
                @foreach ($element as $page => $url)
                    @if ($page == $paginator->currentPage())
                        <li>
                            <span class="flex items-center justify-center px-3 h-8 text-blue-600 border border-gray-300 bg-blue-50 dark:bg-gray-800 hover:bg-blue-100 cursor-pointer hover:text-blue-700 ">{{ $page }}</span>
                        </li>
                    @else
                        <li>
                            <a href="{{ $url }}" class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white dark:bg-gray-800 border border-gray-300 hover:bg-gray-100 cursor-pointer hover:text-gray-700 ">{{ $page }}</a>
                        </li>
                    @endif
                @endforeach
            @endif
        @endforeach

        {{-- Next Page Link --}}
        @if ($paginator->hasMorePages())
            <li>
                <a href="{{ $paginator->nextPageUrl() }}" class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white dark:bg-gray-800 border border-gray-300 cursor-pointer rounded-r-lg hover:bg-gray-100 hover:text-gray-700 ">Next</a>
            </li>
        @else
            <li>
                <span class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white dark:bg-gray-800 border border-gray-300 rounded-r-lg cursor-pointer hover:bg-gray-100 hover:text-gray-700 ">Next</span>
            </li>
        @endif
    </ul>
</nav>
