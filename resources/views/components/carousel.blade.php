@props(['items', 'type'])

<div class="recommended-{{ $type }}s-container">
    <div class="carousel-controls">
        <button class="carousel-button prev" data-type="{{ $type }}">
            <i class="fas fa-chevron-left"></i>
        </button>
        <button class="carousel-button next" data-type="{{ $type }}">
            <i class="fas fa-chevron-right"></i>
        </button>
    </div>

    <script>
        function toggleBookmark(icon) {
            icon.classList.toggle('far'); // removes outline
            icon.classList.toggle('fas'); // adds solid
        }
    </script>

    <div class="carousel-wrapper">
        <div class="carousel-{{ $type }}-container">
            @foreach($items as $item)
                <div class="{{ $type }}-box">
                    <i class="far fa-bookmark bookmark-icon" onclick="toggleBookmark(this)"></i>
                    <div class="{{ $type }}-info">
                        <div class="{{ $type }}-text">
                            @if($type === 'mentor')
                                <div class="mentor-middle-row">
                                    <a href="https://app.milmentor.com/mentor/{{$item['id']}}" >
                                        <img class="self-portrait" src="{{ $item['img'] }}"></img>
                                    </a>
                                    <div class="mentor-details">
                                        <a href="https://app.milmentor.com/mentor/{{$item['id']}}" style="color:black">
                                            <span style="font-size: 14px; font-weight: bold;" class="mentor-name">{{ $item['name'] }}</span>
                                        </a>
                                        <span style="font-size: 10px; color: #5C6982;" class="mentor-role">{{ $item['role'] }}</span>
                                        <span style="font-size: 10px; color: #5C6982;" class="mentor-industry">{{ $item['industry'] }}</span>
                                    </div>
                                </div>
                                <div class="mentor-bottom-row">
                                    <div class="d-block badges">
                                        <!--begin::Badge-->
                                        <a href="/mentee/feed?badge=veteran">
                                            <div class="badge badge-sm badge-light-success me-2 mb-2">Veteran</div>
                                        </a>
                                        <!--begin::Badge-->
                                    </div>
                                </div>
                            @elseif($type === 'career')
                                <div class="top-row">
                                    <img class="company-picture" src="{{ $item['img'] }}"></img>
                                    <span class="company-name">{{ $item['company'] }}</span>
                                </div>
                                <div class="middle-row">
                                    <span class="job-name">{{ $item['title'] }}</span>
                                    <span class="salary-details">{{ $item['salary'] }}</span>
                                </div>
                                <div class="bottom-row">
                                    {{ $item['location'] }}: {{ $item['job-site'] }}
                                </div>
                            @elseif($type === 'event_resource')
                                <div class="top-row">
                                    <img class="company-picture" src="{{ $item['img'] }}"></img>
                                    <span class="company-name">{{ $item['company_name'] }}</span>
                                </div>

                                <div class="middle-row">
                                    <a href="{{ $item['link'] }}" style="color:black">
                                        <span class="job-name">{{ $item['event_name'] }}</span>
                                    </a>
                                    <span class="details">{{ $item['details'] }}</span>
                                </div>

                                @if($item['attendance'] === 'Sponsored')
                                    <div class="bottom-row shifted-right">
                                        {{ $item['attendance'] }}
                                    </div>
                                @else
                                    <div class="bottom-row">
                                        {{ $item['attendance'] }}
                                    </div>
                                @endif
                            @endif
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
