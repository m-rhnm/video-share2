@extends('layout')

@section('content')
    <form action="#" method="GET" class="mt-5">
        <div class="row">
            <div class="form-group col-md-3">
                <label for="inputCity">Sort by</label>
                <select name="sortBy" class="form-control">
                    <option value="created_at" {{ request()->query('sortBy') == 'created_at' ? 'selected' : '' }} >newest</option>
                    <option value="like"       {{ request()->query('sortBy') == "like"       ? 'selected' : '' }} >pupolar</option>
                    <option value="length"     {{ request()->query('sortBy') == "length"     ? 'selected' : '' }} >video length</option>
                </select>
            </div>
            <div class="form-group col-md-3">
                <label for="inputState">Length</label>
                <select name="length" id="inputState" class="form-cotrol">
                    <option value=" " {{ request()->query('length') == null ? 'selected' : '' }} >all</option>
                    <option value="1" {{ request()->query('length') == 1    ? 'selected' : '' }} >Less than 1m</option>
                    <option value="2" {{ request()->query('length') == 2    ? 'selected' : '' }} >1m - 5m</option>
                    <option value="3" {{ request()->query('length') == 3    ? 'selected' : '' }} >More than 5m</option>
                </select>
            </div>
            <input type="hidden" name="q" value="{{ request()->query('q') }}">
            <div class="form-group col-md-3" style="margin-top: 29px">
                <button type="submit" class="btn btn-primary">filter</button>
            </div>
        </div>
    </form>
    <h1 class="new-video-title"><i class="fa fa-bolt"></i> {{ $title }} </h1>
    <div class="row">
        @foreach($videos as $video)
            <x-video-box :video="$video"></x-video-box>
        @endforeach
    </div>

    <div class="text-center">
        {{ $videos->links() }}
    </div>
@endsection