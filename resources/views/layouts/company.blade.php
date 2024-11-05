<div class="mb-40">
    <h4 data-aos="fade-up" data-aos-duration="1000" class="text-center font-content text-content">Company Partner
    </h4>
    <div data-aos="fade-up" data-aos-duration="1200" class="grid grid-cols-2 gap-6 mx-8 mt-10 lg:grid-cols-6 md:grid-cols-3 justify-items-center lg:mx-32">
        @foreach ($projects as $project)
<div class="overflow-hidden ">
    @foreach($project->images as $image)
    <img class="  " src="{{ asset('/storage/' . $image) }}" alt="{{$project->name}}">
    @endforeach
</div>
@endforeach
</div>
</div>

