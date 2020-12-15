@csrf
<div class="md-form">
  <label>タイトル</label>
  <input type="text" name="title" class="form-control" required value="{{ old('title') ?? $article->title ?? '' }}">
</div>

<div class="form-group">
  <article-tags-input
  :initial-tags='@json($tagNames ?? [])'
  :autocomplete-items='@json($allTagNames ?? [])'
  >
  </article-tags-input>
</div>

<div class="form-group">
<input id="image" type="file" name="image" required value="{{ old('image') ?? $article->image ?? '' }}">
  <label></label>
  <textarea name="body" required class="form-control" rows="16" placeholder="本文">{{ old('body') ?? $article->body ?? '' }}</textarea>
</div>