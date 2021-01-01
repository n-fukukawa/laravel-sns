<div>
    @if($errors->any())
        <x-error-card />
    @endif
    
    <x-input 
        type="text" 
        id="title" 
        name="title" 
        value="{{ $article->title ?? old('title')}}" 
        placeholder="タイトル"
    />
    <x-textarea 
        id="body" 
        name="body" 
        value="{{ $article->body ?? old('body') }}"
        placeholder="こちらに本文を入力しましょう" 
        class="mt-10"
    />
</div>