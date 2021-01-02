@if($errors->any())
<div class="px-4 py-2 bg-red-200">
    <ul class="list-disc list-inside">
        @foreach($errors->all() as $error)
            <li class="py-1 text-gray-600">{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif