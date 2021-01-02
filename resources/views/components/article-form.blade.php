<div>
    @if($errors->any())
        <x-error-card />
    @endif
    
    <x-input type="text" id="title" name="title" placeholder="タイトル" value="{{ $article->title ?? old('title') }}"/>
    <x-textarea id="body" name="body" placeholder="こちらに本文を入力">{{ $article->body ?? old('body') }}</x-textarea>
        @php var_dump( $article ); @endphp
</div>