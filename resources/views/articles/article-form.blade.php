<div>
    <x-error-card />
    
    <x-input 
        type="text"
        id="title" name="title" 
        placeholder="タイトル" 
        value="{{ $article->title ?? old('title') }}"/>

    <article-tags-input 
        :initial-tags='@json($tagNames ?? [])'
        :autocomplete-items='@json($allTagNames ?? [])'>
    </article-tags-input>

    <x-textarea 
        id="body" name="body" 
        placeholder="こちらに本文を入力">
        {{ $article->body ?? old('body') }}
    </x-textarea>

</div>