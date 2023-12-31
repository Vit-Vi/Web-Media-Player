<div class="musicCard">
    <div class="music__meta">
        <div class="music__song">{{ $music->name }}</div>
        <div class="music__artist">{{ $music->author }}</div>
    </div>
    <img class="music__bg" src="{{Storage::url($music->imagepath)}}" />
    <div class="music__controls">
        <div class="music__controls-bg"></div>


        <div class="audio-player">
            <audio src="{{Storage::url($music->musicpath)}}"></audio>
            <div class="controls">
                <button class="player-button">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="#3D3132">
                        <path fill-rule="evenodd"
                            d="M10 18a8 8 0 100-16 8 8 0 000 16zM9.555 7.168A1 1 0 008 8v4a1 1 0 001.555.832l3-2a1 1 0 000-1.664l-3-2z"
                            clip-rule="evenodd" />
                    </svg>
                </button>
                <input type="range" class="timeline" max="100" value="0">
                <button class="sound-button">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="#3D3132">
                        <path fill-rule="evenodd"
                            d="M9.383 3.076A1 1 0 0110 4v12a1 1 0 01-1.707.707L4.586 13H2a1 1 0 01-1-1V8a1 1 0 011-1h2.586l3.707-3.707a1 1 0 011.09-.217zM14.657 2.929a1 1 0 011.414 0A9.972 9.972 0 0119 10a9.972 9.972 0 01-2.929 7.071 1 1 0 01-1.414-1.414A7.971 7.971 0 0017 10c0-2.21-.894-4.208-2.343-5.657a1 1 0 010-1.414zm-2.829 2.828a1 1 0 011.415 0A5.983 5.983 0 0115 10a5.984 5.984 0 01-1.757 4.243 1 1 0 01-1.415-1.415A3.984 3.984 0 0013 10a3.983 3.983 0 00-1.172-2.828 1 1 0 010-1.415z"
                            clip-rule="evenodd" />
                    </svg>
                </button>
            </div>
        </div>

        <div class="icons">
            <div class="icon">
                <a href="/deleteMusic/{{ $music->id }}">
                    {{-- <i class="fa-solid fa-xmark"></i> --}}
                    <i class="bi bi-x-lg"></i>
                </a>
            </div>
            <div class="icon">
                <a href="/editMusic/{{ $music->id }}">
                    {{-- <i class="fa-solid fa-pen-to-square"></i> --}}
                    <i class="bi bi-pencil-square"></i>
                </a>
            </div>
            <div class="icon">
                <a href="detail/{{ $music->id }}">
                    {{-- <i class="fa-solid fa-up-right-and-down-left-from-center"></i> --}}
                    <i class="bi bi-arrows-fullscreen"></i>
                </a>
            </div>
        </div>
    </div>
</div>