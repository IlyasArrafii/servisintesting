@if ($paginator->hasPages())
    <nav role="navigation" aria-label="Pagination Navigation" class="tw-flex tw-justify-between">
        {{-- Previous Page Link --}}
        @if ($paginator->onFirstPage())
            <span class="tw-relative tw-inline-flex tw-cursor-default tw-items-center tw-rounded-md tw-border tw-border-gray-300 tw-bg-white tw-px-4 tw-py-2 tw-text-sm tw-font-medium tw-leading-5 tw-text-gray-500">
                {!! __('pagination.previous') !!}
            </span>
        @else
            <a href="{{ $paginator->previousPageUrl() }}" rel="prev" class="tw-relative tw-inline-flex tw-items-center tw-rounded-md tw-border tw-border-gray-300 tw-bg-white tw-px-4 tw-py-2 tw-text-sm tw-font-medium tw-leading-5 tw-text-gray-700 tw-ring-gray-300 tw-transition tw-duration-150 tw-ease-in-out hover:tw-text-gray-500 focus:tw-border-blue-300 focus:tw-outline-none focus:tw-ring active:tw-bg-gray-100 active:tw-text-gray-700">
                {!! __('pagination.previous') !!}
            </a>
        @endif

        {{-- Next Page Link --}}
        @if ($paginator->hasMorePages())
            <a href="{{ $paginator->nextPageUrl() }}" rel="next" class="tw-relative tw-inline-flex tw-items-center tw-rounded-md tw-border tw-border-gray-300 tw-bg-white tw-px-4 tw-py-2 tw-text-sm tw-font-medium tw-leading-5 tw-text-gray-700 tw-ring-gray-300 tw-transition tw-duration-150 tw-ease-in-out hover:tw-text-gray-500 focus:tw-border-blue-300 focus:tw-outline-none focus:tw-ring active:tw-bg-gray-100 active:tw-text-gray-700">
                {!! __('pagination.next') !!}
            </a>
        @else
            <span class="tw-relative tw-inline-flex tw-cursor-default tw-items-center tw-rounded-md tw-border tw-border-gray-300 tw-bg-white tw-px-4 tw-py-2 tw-text-sm tw-font-medium tw-leading-5 tw-text-gray-500">
                {!! __('pagination.next') !!}
            </span>
        @endif
    </nav>
@endif
