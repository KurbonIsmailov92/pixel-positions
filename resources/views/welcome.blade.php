<x-layout>
    <div class="space-y-10">
        <section class="text-center pt-6">
            <h1 class="text-4xl font-bold">Let`s Find Your Next Job</h1>
            <form action="" class="mt-6">
                <input type="text" placeholder="Accountant..."
                       class="rounded-xl bg-white/20 border-white/10 px-5 py-4 w-full max-w-2xl">
            </form>
        </section>
        <section class="pt-10">
            <x-section-headind>Featured Jobs</x-section-headind>
            <div class="grid lg:grid-cols-3 gap-8 mt-6">
                <x-job-card/>
                <x-job-card/>
                <x-job-card/>
            </div>
        </section>

        <section>
            <x-section-headind>Tags</x-section-headind>
            <div class="mt-6 space-x-1">
                <x-tag>Frontend</x-tag>
                <x-tag>Backend</x-tag>
                <x-tag>Fullstack</x-tag>
                <x-tag>Manager</x-tag>
                <x-tag>Director</x-tag>
                <x-tag>Video maker</x-tag>
                <x-tag>Marketing</x-tag>
                <x-tag>Driver</x-tag>
                <x-tag>Account</x-tag>
                <x-tag>Cashier</x-tag>
            </div>
        </section>
        <section>
            <x-section-headind>Recent Jobs</x-section-headind>
            <div class="mt-6 space-y-6">
            <x-job-card-wide/>
            <x-job-card-wide/>
            <x-job-card-wide/>
            </div>

        </section>
    </div>
</x-layout>
