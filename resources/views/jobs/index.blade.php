<x-layout>
    <div class="space-y-10">
        <section class="text-center pt-6">
            <h1 class="text-4xl font-bold">Let`s Find Your Next Job</h1>
            <form action="" class="mt-6">
                <input type="text" placeholder="Accountant..."
                       class="rounded-xl bg-white/20 border-white/10 px-5 py-2 w-full max-w-2xl">
            </form>
        </section>
        <section class="pt-10">
            <x-section-headind>Featured Jobs</x-section-headind>
            <div class="grid lg:grid-cols-3 gap-8 mt-6">
                @foreach($featuredJobs as $job)
                    <x-job-card :$job/>
                @endforeach
            </div>
        </section>

        <section>
            <x-section-headind>Tags</x-section-headind>
            <div class="mt-6 space-x-1">
                @foreach($tags as $tag)
                    <x-tag :$tag/>
                @endforeach

            </div>
        </section>
        <section>
            <x-section-headind>Recent Jobs</x-section-headind>
            <div class="mt-6 space-y-6">
                @foreach($jobs as $job)
                    <x-job-card-wide :$job/>
                @endforeach
            </div>

        </section>
    </div>
</x-layout>
