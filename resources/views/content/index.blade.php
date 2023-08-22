@extends('layout.app')

@section('content')

    <form action="{{ route('convert.video') }}" method="GET">
        @csrf
        <label for="url">Please Insert A Valid YouTube Video URL</label>
        <div class="form-row">
            <input type="url" id="url" name="url" autocomplete="off" value="{{ old('url') }}" required>
            <select name="quality">
                <option value="64">64 Kbps</option>
                <option value="128">128 Kbps</option>
                <option value="192">192 Kbps</option>
                <option value="256">256 Kbps</option>
                <option value="320" selected>320 Kbps</option>
            </select>
        </div>

        @if ($errors->any())
            <div class="alert">
                <ul style="margin: 0;">
                    @foreach ($errors->all() as $error)
                        <li>Please Try Again Later!</li>
                    @endforeach
                </ul>
            </div>
        @endif


        <button type="submit" class="btn"> <span class="noselect">Convert</span> </button>
    </form>


@endsection
