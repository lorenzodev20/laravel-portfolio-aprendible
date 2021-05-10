<div class="form-group">
    <label for="title">@lang('Title Project')</label>
    <input class="form-control bg-light shadow-sm  border-0" type="text" name="title" id="title" value="{{ old('title', $project->title)}}">
</div>

<div class="form-group">
    <label for="url">@lang('Url Project')</label>
    <input class="form-control bg-light shadow-sm  border-0" type="text" name="url" id="url" value="{{ old('url', $project->url)}}">
</div>

<div class="form-group">
    <label for="title">@lang('Description Project')</label>
    <textarea class="form-control bg-light shadow-sm  border-0" name="description" id="description" cols="30" rows="10">{{ old('description', $project->description)}}</textarea>
</div>


