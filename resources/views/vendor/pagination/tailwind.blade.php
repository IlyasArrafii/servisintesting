@if ($paginator->hasPages())
    <nav role="navigation" aria-label="{{ __('Pagination Navigation') }}" class="tw-flex tw-items-center tw-justify-between">
        <div class="tw-flex tw-flex-1 tw-justify-between sm:tw-hidden">
            @if ($paginator->onFirstPage())
                <span class="tw-relative tw-inline-flex tw-cursor-default tw-items-center tw-rounded-md tw-border tw-border-gray-300 tw-bg-white tw-px-4 tw-py-2 tw-text-sm tw-font-medium tw-leading-5 tw-text-gray-500">
                    {!! __('pagination.previous') !!}
                </span>
            @else
                <a href="{{ $paginator->previousPageUrl() }}" class="tw-relative tw-inline-flex tw-items-center tw-rounded-md tw-border tw-border-gray-300 tw-bg-white tw-px-4 tw-py-2 tw-text-sm tw-font-medium tw-leading-5 tw-text-gray-700 tw-ring-gray-300 tw-transition tw-duration-150 tw-ease-in-out hover:tw-text-gray-500 focus:tw-border-blue-300 focus:tw-outline-none focus:tw-ring active:tw-bg-gray-100 active:tw-text-gray-700">
                    {!! __('pagination.previous') !!}
                </a>
            @endif

            @if ($paginator->hasMorePages())
                <a href="{{ $paginator->nextPageUrl() }}" class="tw-relative tw-ml-3 tw-inline-flex tw-items-center tw-rounded-md tw-border tw-border-gray-300 tw-bg-white tw-px-4 tw-py-2 tw-text-sm tw-font-medium tw-leading-5 tw-text-gray-700 tw-ring-gray-300 tw-transition tw-duration-150 tw-ease-in-out hover:tw-text-gray-500 focus:tw-border-blue-300 focus:tw-outline-none focus:tw-ring active:tw-bg-gray-100 active:tw-text-gray-700">
                    {!! __('pagination.next') !!}
                </a>
            @else
                <span class="tw-relative tw-ml-3 tw-inline-flex tw-cursor-default tw-items-center tw-rounded-md tw-border tw-border-gray-300 tw-bg-white tw-px-4 tw-py-2 tw-text-sm tw-font-medium tw-leading-5 tw-text-gray-500">
                    {!! __('pagination.next') !!}
                </span>
            @endif
        </div>

        <div class="tw-hidden sm:tw-flex sm:tw-flex-1 sm:tw-items-center sm:tw-justify-between">
            <div>
                <p class="tw-text-sm tw-leading-5 tw-text-gray-700">
                    {!! __('Showing') !!}
                    @if ($paginator->firstItem())
                        <span class="tw-font-medium">{{ $paginator->firstItem() }}</span>
                        {!! __('to') !!}
                        <span class="tw-font-medium">{{ $paginator->lastItem() }}</span>
                    @else
                        {{ $paginator->count() }}
                    @endif
                    {!! __('of') !!}
                    <span class="tw-font-medium">{{ $paginator->total() }}</span>
                    {!! __('results') !!}
                </p>
            </div>

            <div>
                <span class="tw-relative tw-z-0 tw-inline-flex tw-rounded-md tw-shadow-sm">
                    {{-- Previous Page Link --}}
                    @if ($paginator->onFirstPage())
                        <span aria-disabled="true" aria-label="{{ __('pagination.previous') }}">
                            <span class="tw-relative tw-inline-flex tw-cursor-default tw-items-center tw-rounded-l-md tw-border tw-border-gray-300 tw-bg-white tw-px-2 tw-py-2 tw-text-sm tw-font-medium tw-leading-5 tw-text-gray-500" aria-hidden="true">
                                <svg class="tw-h-5 tw-w-5" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z" clip-rule="evenodd" />
                                </svg>
                            </span>
                        </span>
                    @else
                        <a href="{{ $paginator->previousPageUrl() }}" rel="prev" class="tw-relative tw-inline-flex tw-items-center tw-rounded-l-md tw-border tw-border-gray-300 tw-bg-white tw-px-2 tw-py-2 tw-text-sm tw-font-medium tw-leading-5 tw-text-gray-500 tw-ring-gray-300 tw-transition tw-duration-150 tw-ease-in-out hover:tw-text-gray-400 focus:tw-z-10 focus:tw-border-blue-300 focus:tw-outline-none focus:tw-ring active:tw-bg-gray-100 active:tw-text-gray-500" aria-label="{{ __('pagination.previous') }}">
                            <svg class="tw-h-5 tw-w-5" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z" clip-rule="evenodd" />
                            </svg>
                        </a>
                    @endif

                    {{-- Pagination Elements --}}
                    @foreach ($elements as $element)
                        {{-- "Three Dots" Separator --}}
                        @if (is_string($element))
                            <span aria-disabled="true">
                                <span class="tw-tw-relative tw-tw-inline-flex tw-tw-items-center -tw-ml-px tw-cursor-default tw-border tw-border-gray-300 tw-bg-white tw-px-4 tw-py-2 tw-text-sm tw-font-medium tw-leading-5 tw-text-gray-700">{{ $element }}</span>
                            </span>
                        @endif

                        {{-- Array Of Links --}}
                        @if (is_array($element))
                            @foreach ($element as $page => $url)
                                @if ($page == $paginator->currentPage())
                                    <span aria-current="page">
                                        <span class="tw-relative -tw-ml-px tw-inline-flex tw-cursor-default tw-items-center tw-border tw-border-gray-300 tw-bg-white tw-px-4 tw-py-2 tw-text-sm tw-font-medium tw-leading-5 tw-text-gray-500">{{ $page }}</span>
                                    </span>
                                @else
                                    <a href="{{ $url }}" class="tw-relative -tw-ml-px tw-inline-flex tw-items-center tw-border tw-border-gray-300 tw-bg-white tw-px-4 tw-py-2 tw-text-sm tw-font-medium tw-leading-5 tw-text-gray-700 tw-ring-gray-300 tw-transition tw-duration-150 tw-ease-in-out hover:tw-text-gray-500 focus:tw-z-10 focus:tw-border-blue-300 focus:tw-outline-none focus:tw-ring active:tw-bg-gray-100 active:tw-text-gray-700" aria-label="{{ __('Go to page :page', ['page' => $page]) }}">
                                        {{ $page }}
                                    </a>
                                @endif
                            @endforeach
                        @endif
                    @endforeach

                    {{-- Next Page Link --}}
                    @if ($paginator->hasMorePages())
                        <a href="{{ $paginator->nextPageUrl() }}" rel="next" class="tw-relative -tw-ml-px tw-inline-flex tw-items-center tw-rounded-r-md tw-border tw-border-gray-300 tw-bg-white tw-px-2 tw-py-2 tw-text-sm tw-font-medium tw-leading-5 tw-text-gray-500 tw-ring-gray-300 tw-transition tw-duration-150 tw-ease-in-out hover:tw-text-gray-400 focus:tw-z-10 focus:tw-border-blue-300 focus:tw-outline-none focus:tw-ring active:tw-bg-gray-100 active:tw-text-gray-500" aria-label="{{ __('pagination.next') }}">
                            <svg class="tw-h-5 tw-w-5" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd" />
                            </svg>
                        </a>
                    @else
                        <span aria-disabled="true" aria-label="{{ __('pagination.next') }}">
                            <span class="tw-relative -tw-ml-px tw-inline-flex tw-cursor-default tw-items-center tw-rounded-r-md tw-border tw-border-gray-300 tw-bg-white tw-px-2 tw-py-2 tw-text-sm tw-font-medium tw-leading-5 tw-text-gray-500" aria-hidden="true">
                                <svg class="tw-h-5 tw-w-5" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd" />
                                </svg>
                            </span>
                        </span>
                    @endif
                </span>
            </div>
        </div>
    </nav>
@endif
