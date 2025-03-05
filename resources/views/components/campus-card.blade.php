<a href="#" class="group bg-white shadow-lg rounded-xl pt-5 px-6 pb-6 hover:ring-4 hover:ring-sky-700 hover:bg-sky-100 transition-all">
    <h3 class="uppercase text-3xl font-bold mb-3">
        {{$campusName}}
    </h3>

    <img src="{{asset('img/'.$imageName)}}" alt="" class="w-full aspect-video rounded-lg mb-4">

    <x-language-list :languagesList="$languagesList"/>

</a>