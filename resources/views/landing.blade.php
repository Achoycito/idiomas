<!DOCTYPE html>
<html>
<head>
    <x-head></x-head>
    <title>
        {!!__('landing.html_title')!!}
    </title>

</head>
<body class="bg-slate-50">

        <img src="{{asset('img/world.jpg')}}" alt="" class="object-cover w-full h-64 -z-10">
        
    <div class="flex gap-20 items-center container mx-auto py-14 px-4">
        <h1 class="text-7xl font-black">
            {!!__('landing.main_title')!!}
        </h1>
        <p class="text-lg">
            {!!__('landing.main_paragraph')!!}
        </p>
    </div>


    <div class="py-14">
        <h2 class="text-5xl uppercase font-bold mb-8 text-center">{{__("landing.campus")}}</h2>

        <div class="grid grid-cols-2 gap-10 w-11/12 mx-auto px-4">
            <x-campus-card campusName="La Paz" imageName="lapaz.png" :languagesList="['de', 'ru', 'fr', 'en', 'it', 'jp', 'es']"></x-campus-card>
            <x-campus-card campusName="Los Cabos" imageName="loscabos.png" :languagesList="['cn', 'es', 'fr', 'en', 'jp']"></x-campus-card>
        </div>
    </div>


    <div class="w-full flex flex-col md:flex-row flex-wrap">
        <div class="w-full bg-neutral-400 flex flex-row place-items-center">
            <div class="text-black text-center py-8 container mx-auto">
                <h1 class="text-3xl font-bold mb-4">
                    {!!__('landing.history')!!}
                </h1>
                <p class="text-lg">
                    {!!__('landing.history_text')!!}
                </p>
            </div>
        </div>
        <div class="w-1/2 bg-cyan-400 flex flex-row place-items-center">
            <div class="text-black text-center py-8 px-10">
                <h1 class="text-3xl font-bold mb-4">
                    {!!__('landing.mission')!!}
                </h1>
                <p class="text-lg">
                    {!!__('landing.mission_text')!!}
                </p>
            </div>
        </div>
        <div class="w-1/2 bg-blue-600 flex flex-row place-items-center">
            <div class="text-white text-center py-8 px-10">
                <h1 class="text-3xl font-bold mb-4">
                    {!!__('landing.vision')!!}
                </h1>
                <p class="text-lg">
                    {!!__('landing.vision_text')!!}
                </p>
            </div>
        </div>
    </div>
    



    
    {{-- <h2>
        {!!__('landing.mission')!!}
    </h2>
    <p>
        {!!__('landing.mission_text')!!}
    </p>
    
    <h2>
        {!!__('landing.vision')!!}
    </h2>
    <p>
        {!!__('landing.vision_text')!!}
    </p> --}}

    

</body>
</html>