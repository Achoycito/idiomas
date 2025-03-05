<div class="flex gap-x-4 gap-y-2 flex-wrap w-fit bg-slate-300 p-3 rounded-lg">
    @foreach ($languagesList as $lang)
        <img src="{{asset('img/flags/'.$lang.'.svg')}}" class="w-16" alt="{{__('languages.'.$lang)}}" title="{{__('languages.'.$lang)}}">
    @endforeach
</div>